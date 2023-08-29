@extends('admin.layout')

@section('title', 'Edit Category ' . $category->name_trans)

@section('content')
    <div class="top-campaign">
        <div class="d-flex flex-wrap m-b-30 justify-content-between">
            <h3 class="title-3">Edit Category <b class="title-10">{{ $category->name_trans }}</b></h3>
            <a class="btn btn-dark btn-sm text-light" href="{{ route('admin.categories.index') }}">
                <i class="fas fa-tags pr-2"></i>
                <span>All Category</span>
            </a>
        </div>

        <form action="{{ route('admin.categories.update', $category) }}" method="post" enctype="multipart/form-data"
            class="form-horizontal card">
            @csrf
            @method('put')
            @include('admin.categories._form', compact('category'))
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o pr-1"></i> Save
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban pr-1"></i> Reset
                </button>
            </div>
        </form>
    </div>
@endsection
