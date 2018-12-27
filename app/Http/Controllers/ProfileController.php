<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Model\Profile;
use App\Model\Customer;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles');   
    }

    public function store(RegisterRequest $request)
    {
        Profile::create([
            'id_user' => $request->user_id,
            'name' => $request->name,
            'nic_number' => $request->nic_number,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'birthday' => $request->birthday,
            'gender' => $request->gender
        ]);
        Customer::create([
            'id_user' => $request->user_id
        ]);
        $request->session()->flash('sucess', 'Đăng ký thành công');
        return redirect()->route('register');
    }
}
