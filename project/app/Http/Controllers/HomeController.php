<?php

namespace App\Http\Controllers;

use App\Enums\UserRolesEnum;
use App\Models\User;
use App\Models\Book;
use App\Models\Loan;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
