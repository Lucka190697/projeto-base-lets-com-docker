<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Loan;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Book $book, Loan $loan)
    {
        $total_users = User::count();//Total de Usuários
        $total_books = Book::count();//Livros Cadastrados
        $total_loans = Loan::count();//Total de Empréstimos
        $books_loan = $book->loans()->count();
        $user_loan = $user->loans()->get()->count();

        return view('home',
            compact('total_books', 'total_loans', 'total_users','books_loan', 'user_loan'));
    }
}
