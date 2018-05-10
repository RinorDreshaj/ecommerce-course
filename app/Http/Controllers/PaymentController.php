<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::user());

        $user->charge(100);

        dd("success");

    }
}
