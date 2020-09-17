@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="Visualizar Livro">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>
        <breadcrumb-item href="{{ route('books.create') }}">
            @lang('headings.books.create')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.books.show')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Detalhes</h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="col-md-6 col-sm-12 float-md-left">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <img src="{{ asset('/book-default.png') }}" alt="img"
                                             width="350" height="auto" class="img img-profile embed-responsive">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12 float-md-right">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>ID: </strong>{{ $book->id }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>ISBN: </strong>{{ $book->isbn }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('headings.loans.Title') </strong>{{ $book->title }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('headings.loans.Author') </strong>{{ $book->author }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('headings.loans.Owner') </strong>{{ $book->user->name }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('headings.loans.Entry Date') </strong>{{ $book->entryDate = date('d/m/Y', strtotime($book->entryDate)) }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-md-6 float-left">
                            <a href="{{ URL::previous() }}" class="btn btn-block btn-primary">
                                <i class="fa fa-arrow-left mr-1"></i> @lang('buttons.Back')</a>
                        </div>
                        <div class="col-md-6 float-right">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-block btn-success">
                                <i class="fa fa-pencil mr-1"></i> @lang('buttons.Edit')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
