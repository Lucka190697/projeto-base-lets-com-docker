@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="@lang('headings.View books details')">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.users.show')
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
                            <h1>@lang('headings.Details')</h1>
                        </div>
                        <div class="float-lg-right">
                            <a href="{{ route('admin.user.index')}}" class="btn btn-primary">
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
                                        <img src="{{ asset('/default.jpg') }}" alt="img"
                                             width="250" height="auto" class="img img-profile embed-responsive">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12 float-right">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>ID: </strong>
                                        {{ $user->id }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>@lang('headings.users.name')</strong>
                                        {{ $user->name }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>@lang('headings.users.email')</strong>
                                        {{ $user->email }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong> @lang('labels.created_at') </strong>
                                        {{ $user->created_at }}
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
                            <a href="{{ route('books.edit', $user->id) }}" class="btn btn-block btn-success">
                                <i class="fa fa-pencil mr-1"></i> @lang('buttons.Edit')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
