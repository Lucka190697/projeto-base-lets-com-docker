@extends('layouts.app')
@section('breadcrumb')
    <breadcrumb header="@lang('headings.books.edit')">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>
        <breadcrumb-item href="{{ route('books.index') }}">
            @lang('headings._books')
        </breadcrumb-item>

        <breadcrumb-item active>
            Editar novo Livro
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-lg-left">
                @lang('headings.books.edit')
            </div>
            <div class="float-lg-right">
                <a href="{{ route('books.index')}}" class="btn btn-primary">
                    <i class="fa fa-arrow-left mr-2"></i>Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                <div class="col-md-8">
                    <form class="form-horizontal" method="POST" action="{{ route('books.update', $book->id) }}">
                        @method('PUT')
                        @include('books.partials._form')
                        <button class="btn btn-block btn-primary" type="submit">
                            <i class="fa fa-check mr-1"></i>@lang('links._edit')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
