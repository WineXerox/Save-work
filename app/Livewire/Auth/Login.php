<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function autoAccount() {
        $this->email = 'admin@exp.com';
        $this->password = 'password';
    }

    public function login() {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], [
            'email' => 'กรอกอีเมล',
            'email.exists' => 'ไม่พบอีเมล',
            'password' => 'กรอกรหัสผ่าน',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (auth()->attempt($credentials)) {
            return $this->redirect(route('index'), navigate:true);
        }
        else {
            $this->validate([
                'password' => 'size:1000',
            ], [
                'password' => 'รหัสผ่านไม่ถูกต้อง',
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
