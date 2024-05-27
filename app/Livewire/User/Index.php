<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class Index extends Component
{
    use WithPagination;

    public $id, $name, $email, $password, $password_confirmation;
    public $search, $paginate = 5;

    public function formClear() {
        $this->id = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
 
    public function createUser() {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:6|max:16|confirmed',
        ],[
            'name' => 'กรอกชื่อให้ถูกต้อง',
            'email' => 'กรอกอีเมลให้ถูกต้อง',
            'email.unique' => 'อีเมลนี้ถูกใช้แล้ว',
            'password' => 'กรอกรหัสผ่าน 6-16 ตัว',
            'password.confirmed' => 'รหัสผ่านไม่ตรงกัน',
        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->usertype = 'admin';
        $user->save();

        $this->resetPage();
        $this->formClear();
        $this->dispatch('success');
        $this->dispatch('modal-create-hide');
    }

    public function editUser($id) {
        $user = User::find($id);
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function deleteThis($id) {
        User::find($id)->delete();
        $this->dispatch('success');
    }

    public function updateUser() {
        $this->validate([
            'name' => 'required|max:255',
            'email' => "required|max:255|email|unique:users,email,$this->id",
        ],[
            'name' => 'กรอกชื่อให้ถูกต้อง',
            'email' => 'กรอกอีเมลให้ถูกต้อง',
            'email.unique' => 'อีเมลนี้ถูกใช้แล้ว',
        ]);

        $user = User::find($this->id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->formClear();
        $this->dispatch('success');
        $this->dispatch('modal-edit-hide');
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

            $users = User::where('usertype', 'admin')->whereAny([
                'name', 'email'
            ], 'LIKE', "%$this->search%")
            ->latest()
            ->paginate($this->paginate);
        }
        else {
            if(session('search-paginate')) {
                $this->resetPage();
                session(['search-paginate' => false]);
            }
            $this->setRows();

            $users = User::where('usertype', 'admin')->latest()->paginate($this->paginate);
        }

        return view('livewire.user.index', ['users' => $users]);
    }
}
