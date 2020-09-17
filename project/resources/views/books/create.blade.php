@extends('layouts.app')
@section('breadcrumb')
    <breadcrumb header="Cadastrar livro">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>
        <breadcrumb-item href="{{ route('books.index') }}">
            @lang('headings._books')
        </breadcrumb-item>

        <breadcrumb-item active>
            Criar novo Livro
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">@lang('headings.books.create')</div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('books.store') }}">
                @include('books.partials._form')
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-check mr-1"></i>@lang('links._create')</button>
            </form>
        </div>
    </div>
@endsection
