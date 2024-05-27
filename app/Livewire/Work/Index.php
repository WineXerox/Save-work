<?php

namespace App\Livewire\Work;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Route;

class Index extends Component
{
    use WithPagination;

    public $name, $phone, $device, $cause, $note, $price;
    public $paginate = 5;
    public $status, $route, $search;

    public function mount($status) {
        $this->route = Route::currentRouteName();
        $this->status = $status;
    }

    public function formClear() {
        $this->name = '';
        $this->phone = '';
        $this->device = '';
        $this->cause = '';
        $this->note = '';
        $this->price = '';
    }

    public function createWork() {
        $this->validate([
            'name' => 'required|max:255',
            'phone' => 'required|size:10',
            'device' => 'required|max:255',
            'cause' => 'required',
            'price' => 'required|numeric',
        ], [
            'name' => 'กรอกชื่อให้ถูกต้อง',
            'phone' => 'กรอกเบอร์ให้ถูกต้อง 10 ตัว',
            'device' => 'กรอกชื่ออุปกรณ์ให้ถูกต้อง',
            'cause' => 'กรอกสาเหตุที่ต้องการซ่อมให้ถูกต้อง',
            'price' => 'กรอกราคาให้ถูกต้อง',
        ]);

        $work = new Work();
        $work->name = $this->name;
        $work->phone = $this->phone;
        $work->device = $this->device;
        $work->cause = $this->cause;
        $work->note = $this->note;
        $work->price = $this->price;
        $work->status = 'new';
        $work->save();

        $this->resetPage();
        $this->formClear();
        $this->dispatch('modal-create-hide');
        $this->dispatch('success');
    }

    public function setRows() {
        if($this->paginate != 5 && !session('set-rows-paginate')) {
            $this->resetPage();
            session(['set-rows-paginate' => true]);
        }
        if($this->paginate == 5 && session('set-rows-paginate')) {
            $this->resetPage();
            session(['set-rows-paginate' => false]);
        }
    }

    public function render()
    {
        if($this->search != '') {
            if(!session('search-paginate')) {
                $this->resetPage();
                session(['search-paginate' => true]);
            }
            $this->setRows();

            $search = Work::whereAny([
                'name',
                'phone',
                'device',
            ], 'LIKE', "%$this->search%");

            if($this->status != 'all') {
                $search->where('status', $this->status);
            }

            $data = $search->latest()->paginate($this->paginate);
        }

        else {
            if(session('search-paginate')) {
                $this->resetPage();
                session(['search-paginate' => false]);
            }
            $this->setRows();

            if($this->status == 'all') {
                $data = Work::latest()->paginate($this->paginate);
            }
            else {
                $data = Work::where('status', $this->status)->latest()->paginate($this->paginate);
            }
        }

        return view('livewire.work.index', ['works' => $data]);
    }
}
