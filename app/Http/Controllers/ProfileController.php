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
        $input = $request->except('_token');
        $input['id_user'] = $request->user_id;
        Profile::create($input);
        Customer::create([
            'id_user' => $request->user_id
        ]);
        return back()->with(['success' => 'Đăng ký thành công']);
    }
}
