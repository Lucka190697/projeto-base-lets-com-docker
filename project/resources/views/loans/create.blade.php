@extends('layouts.app')
@section('breadcrumb')
    <breadcrumb header="Solicitar empréstimo">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>
        <breadcrumb-item href="{{route('loans.index')}}">
            @lang('headings._loans')
        </breadcrumb-item>
        <breadcrumb-item active>
            @lang('headings.loans.create')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-lg-left">
                @lang('headings.loans.create')
            </div>
            <div class="float-lg-right">
                <a href="{{ route('loans.index')}}" class="btn btn-primary">
                    <i class="fa fa-arrow-left mr-2"></i>Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                <div class="col-md-8">
                    <form class="form-horizontal " method="POST" action="{{ route('loans.store') }}">
                        @include('loans.partials._form')
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <button class="btn btn-block btn-primary" type="submit">
                                    <i class="fa fa-check mr-1"></i>@lang('links._create')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
