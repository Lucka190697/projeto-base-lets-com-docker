@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12"><!--offset-md-2-->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-tachometer"></i>
                        Dashboard
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('layouts.home-cards')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
