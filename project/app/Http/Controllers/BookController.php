<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use App\Repositories\BookRepository;
use App\Repositories\Criteria\Common\Has;
use App\Repositories\Repository;
use App\Support\PaginationBuilder;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'book';
        return view('books.index', compact('title'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();

        current_user()->books()->create($data);

        $message = _m('common.success.create');
        return $this->chooseReturn('success', $message, 'books.index');
    }

    public function edit(Book $model, $id)
    {
        $book = $model->find($id);
        return view('books.edit', compact('book'));
    }

    public function update(BookRepository $repository, BookRequest $request, $id)
    {
        $data = $request->validated();

        $repository->update($id, $data);

        $message = _m('common.success.update');
        return $this->chooseReturn('success', $message, 'books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function destroy($id)
    {
        try {
            (new BookRepository)->delete($id);
            return $this->chooseReturn('success', _m('common.success.destroy'));
        } catch (\Exception $exception) {
            report($exception);
            return $this->chooseReturn('error', _m('common.error.destroy'));
        }
    }

    public function pagination()
    {
        $pagination = new PaginationBuilder();
        return $pagination->repository(new BookRepository())
//            ->criteria(new Has('loan', '<>', 1))
            ->resource(BookResource::class);
    }
}
