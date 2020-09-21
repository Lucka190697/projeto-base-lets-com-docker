@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="Criar usuário">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>
        <breadcrumb-item href="{{ route('admin.user.index') }}">
            @lang('headings._users')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.users.create')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-lg-left">
                @lang('headings.users.create')
            </div>
            <div class="float-lg-right">
                <a href="{{route('admin.user.index')}}" class="btn btn-primary">
                    <i class="fa fa-arrow-left mr-2"></i>Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                <div class="col-md-8">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.user.store') }}">
                        @include('users.partials._form')
                        <div class="form-group col-sm-12 col-md-6">
                            <button class="btn btn-block btn-primary" type="submit">
                                <i class="fa fa-check"></i> @lang('links._create')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
