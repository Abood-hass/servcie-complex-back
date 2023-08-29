@extends('admin.layout')

@section('title', 'All Categories')

@section('content')

    {{-- Alert Section --}}
    @if (session('msg'))
        <div class="alert  alert-{{ session('type') }}" role="alert">
            {{ session('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="top-campaign">
        <div class="d-flex m-b-30 justify-content-between">
            <h3 class="title-3">All Categories</h3>
            <a class="btn btn-dark btn-sm text-light" href="{{ route('admin.categories.create') }}">
                <i class="fas fa-plus pr-2"></i>
                <span>Add new Category</span>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-top-campaign">
                <thead>
                    <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Icon
                        </th>
                        <th class="text-center px-5">
                            Name
                        </th>
                        <th class="text-center px-3">
                            Parent Category
                        </th>
                        <th class="text-center">
                            Service Count
                        </th>
                        <th class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                @php
                @endphp
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-center">
                                <i style="font-size: 25px;" class="{{ $category->icon ?? "No icon" }}"></i>
                            </td>
                            <td class="text-center px-5">
                                {{ $category->name }}
                            </td>
                            <td class="text-center px-3">
                                {{ $category->parent->name }}
                            </td>
                            <td class="text-center">
                                {{ $category->services_count }}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('admin.categories.show', $category->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('admin.categories.edit', $category->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline" action="{{ route('admin.categories.destroy', $category->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                <h3>No Data Found</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>


@endsection
