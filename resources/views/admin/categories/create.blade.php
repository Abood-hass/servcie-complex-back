@extends('admin.layout')

@section('title', 'Add new Category')

@section('content')
    <div class="top-campaign">
        <div class="d-flex flex-wrap m-b-30 justify-content-between">
            <h3 class="title-3">{{ __('adminPage.add-new-category') }}</h3>
            <a class="btn btn-dark btn-sm text-light" href="{{ route('admin.categories.index') }}">
                <i class="fas fa-tags pr-2"></i>
                <span>{{ __('adminPage.all-categories') }}</span>
            </a>
        </div>
        <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data"
            class="form-horizontal card">
            @csrf
            @include('admin.categories._form')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o pr-1"></i> {{ __('adminPage.add') }}
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban pr-1"></i> {{ __('adminPage.reset') }}
                </button>
            </div>
        </form>
    </div>
@endsection
