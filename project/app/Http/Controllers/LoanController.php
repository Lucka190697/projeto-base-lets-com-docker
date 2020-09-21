<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Http\Resources\BookResource;
use App\Http\Resources\LoanResource;
use App\Models\Book;
use App\Models\Loan;
use App\Repositories\BookRepository;
use App\Repositories\Criteria\Common\Has;
use App\Repositories\LoanRepository;
use App\Support\PaginationBuilder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Loan $loan, Book $book)
    {
        return view('loans.index');
    }

    public function create()
    {
        $books = (new BookRepository())->pushCriteria(new Has('loans', '<>', 1))->all();
        return view('loans.create', compact('books'));
    }

    public function store(LoanRequest $request, LoanRepository $repository)
    {
        $data = $request->validated();
        $data['loans_date'] = Carbon::createFromFormat('d/m/Y', $data['loans_date']);
        $data['return_date'] = Carbon::createFromFormat('d/m/Y', $data['return_date']);

        $book = (new BookRepository())->find($data['book_id']);
        $book->loans()->save($data);

        $message = _m('common.success.create');
        return $this->chooseReturn('success', $message, 'loans.index');
    }

    public function edit($id)
    {
        $loan = Loan::find($id);
        $books = Book::with('loans')->get();
        (new BookRepository())->pushCriteria(new Has('loans', '<>', 1))->all();
        return view('loans.edit', compact('loan', 'books'));
    }

    public function update(LoanRequest $request, $id)
    {
        (new LoanRepository())->update($id, $request->validated());

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

    public function reserve($id)
    {
        $to_reserve = Book::find($id);

        return view('loans.create', compact('to_reserve'));

    }
}
