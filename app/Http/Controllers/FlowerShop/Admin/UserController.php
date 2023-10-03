<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\User;
use Session;
class UserController extends Controller
{
    public function users(){
        Session::put('page', 'users');
        $users = User::get()->toArray();
        return view('FlowerShop.admin.users.users', compact('users'));
    }
}
