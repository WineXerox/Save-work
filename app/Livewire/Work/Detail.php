<?php

namespace App\Livewire\Work;

use App\Models\Work;
use Livewire\Component;

class Detail extends Component
{
    public $id, $detail, $status, $route;

    public function updateStatusWork() {
        $this->validate([
            'status' => 'required',
        ], [
            'status' => 'เลือกสถานะ',
        ]);

        $work = Work::find($this->id);
        $work->status = $this->status;
        $work->save();

        $this->route = "work.$work->status";
        $this->dispatch('success');
    }

    public function deleteThis($id) {
        Work::find($id)->delete();

        session(['success' => 'สำเร็จ']);
        return $this->redirect(route($this->route), navigate:true);
    }

    public function mount($id) {
        $work = Work::find($id);

        $this->$id = $id;
        $this->route = "work.$work->status";
    }

    public function render()
    {
        $this->detail = Work::find($this->id);
        return view('livewire.work.detail', [$this->detail]);
    }
}
