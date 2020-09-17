@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="Usuários">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings._home')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.users.index')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-md-12">
        <data-list data-source="{{ route('pagination.users') }}">
            <template #options>
                <div class="row my-2">
                    <div class="col-sm-12 col-md-9">
                        <filter-text url-key="query"
                                     class="col-12 form-control"
                                     placeholder="Buscar...">
                        </filter-text>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <a :href="'{{ route('admin.user.create') }}'">
                            <button class="btn btn-block btn-primary">
                                <i class="fa fa-plus"></i>
                                @lang('headings.users.create')
                            </button>
                        </a>
                    </div>
                </div>
            </template>

            <template #header="{orderBy}">
                <tr>
                    @include('users.partials._head')
                </tr>
            </template>

            <template #body="{fetchData, items}">
                <tr v-for="(item, index) in items" :key="index">
                    @include('users.partials._body')
                </tr>
            </template>
        </data-list>
    </div>
</div>
@endsection
