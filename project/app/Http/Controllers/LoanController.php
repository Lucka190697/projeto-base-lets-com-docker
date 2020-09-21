<?php

namespace App\Http\Controllers;

use App\Enums\UserRolesEnum;
use App\Http\Requests\LoanRequest;
use App\Http\Resources\BookResource;
use App\Http\Resources\LoanResource;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use App\Repositories\BookRepository;
use App\Repositories\Criteria\Common\Has;
use App\Repositories\LoanRepository;
use App\Support\PaginationBuilder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return view('loans.index');
    }

    public function create()
    {
        $books = (new BookRepository())->pushCriteria(new Has('loan', '<>', 0))->all();
        $users = User::all();
        return view('loans.create', compact('books', 'users'));
    }

    public function store(LoanRequest $request, LoanRepository $repository)
    {
        $data = $request->validated();

        $book = (new BookRepository())->find($data['book_id']);
        if (current_user()->hasRole(UserRolesEnum::CLIENT))
            $data['user_id'] = auth()->user()->id;

        $book->loan()->create($data);

        $message = _m('common.success.create');
        return $this->chooseReturn('success', $message, 'loans.index');
    }

    public function edit($id)
    {
        $loan = Loan::find($id);
        $books = Book::with('loan')->get();
        $users = User::all();
        (new BookRepository())->pushCriteria(new Has('loan', '<>', 1))->all();
        return view('loans.edit', compact('loan', 'books', 'users'));
    }

    public function update(LoanRequest $request, $id)
    {
        $data = $request->validated();

        $book = (new BookRepository())->find($data['book_id']);

        $book->loan()->create($data);

//        (new LoanRepository())->update($id, $data);

        $message = _m('common.success.update');
        return $this->chooseReturn('success', $message, 'loans.index');
    }

    public function show($id)
    {
        $loan = Loan::find($id);
        return view('loans.show', compact('loan'));
    }

    public function destroy($id)
    {
        try {
            (new LoanRepository())->delete($id);
            return $this->chooseReturn('success', _m('common.success.destroy'));
        } catch (\Exception $exception) {
            report($exception);
            return $this->chooseReturn('error', _m('common.error.destroy'));
        }
    }

    public function pagination()
    {
        $pagination = new PaginationBuilder();
        return $pagination->repository(new LoanRepository())
            ->resource(LoanResource::class);
    }
}
