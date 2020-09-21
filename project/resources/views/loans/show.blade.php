@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="@lang('headings.Details')">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>
        <breadcrumb-item href="{{ route('loans.index') }}">
            @lang('headings._loans')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.loans.show')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-lg-left">
                            <h2>@lang('headings.loans.show')</h2>
                        </div>
                        <div class="float-lg-right">
                            <a href="{{ route('loans.index')}}" class="btn btn-primary">
                                <i class="fa fa-arrow-left mr-2"></i>Voltar
                            </a>
                        </div>
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
                                             width="270" height="auto" class="img img-profile embed-responsive">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12 float-md-right">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>ID: </strong>{{ $loan->id }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>@lang('headings.loans.book')</strong>{{ $loan->book_id }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('headings.loans.loans_date') </strong>
                                        {{ format_date($loan->loans_date, 'd/m/Y') }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('headings.loans.return_date') </strong>
                                        {{ format_date($loan->return_date, 'd/m/Y') }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>@lang('headings.loans.is loan')</strong>{{ $loan->is_loan }}
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
                            <a href="{{ route('books.edit', $loan->id) }}" class="btn btn-block btn-success">
                                <i class="fa fa-pencil mr-1"></i> @lang('buttons.Edit')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
