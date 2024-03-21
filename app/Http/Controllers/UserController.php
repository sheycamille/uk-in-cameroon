<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('user.home');
    }

    public function account() {
        return view('user.account');
    }

    public function settings() {
        return view('user.settings');
    }

    public function contact() {
        return view('user.contact');
    }

    public function help() {
        return view('user.help');
    }
}
