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
            <h3 class="title-3">{{ __('adminPage.all-categories') }}</h3>
            <a class="btn btn-dark btn-sm text-light" href="{{ route('admin.categories.create') }}">
                <i class="fas fa-plus pr-2"></i>
                <span>{{ __('adminPage.add-new-category') }}</span>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-top-campaign lang-body">
                <thead>
                    <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            {{ __('adminPage.image') }}
                        </th>
                        <th class="text-center px-5">
                            {{ __('adminPage.name') }}
                        </th>
                        <th class="text-center px-3">
                            {{ __('adminPage.parent-category') }}
                        </th>
                        <th class="text-center">
                            {{ __('adminPage.service-count') }}
                        </th>
                        <th class="text-center">
                            {{ __('adminPage.action') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-center">
                                <img width="100px" height="100px" src="{{ asset($category->image->path) }}" alt=""
                                    srcset="">
                            </td>
                            <td class="text-center px-5">
                                {{ $category->name_trans }}
                            </td>
                            <td class="text-center px-3">
                                {{ $category->parent->name_trans ?? '(none)' }}
                            </td>
                            <td class="text-center">
                                {{ $category->services_count }}
                            </td>
                            <td class="text-center">
                                <div>
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('admin.categories.edit', $category->id) }}">
                                        <i class="fas fa-edit pr-1"></i>
                                        {{ __('adminPage.update') }}
                                    </a>
                                    <form id="delete_form" class="d-inline"
                                        action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-name="{{ $category->name_en }}" onclick="deleteCategory(event)"
                                            class="btn btn-danger btn-sm">
                                            <i data-name="{{ $category->name_en }}" class="fas fa-trash pr-1"></i>
                                            {{ __('adminPage.delete') }}
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                <h3> {{ __('adminPage.no-data') }}
                                </h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>


    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteCategory(event) {
            event.preventDefault();


            Swal.fire({
                title: "{{ __('adminPage.delete') }} " + event.target.dataset.name +
                    " {{ __('adminPage.category') }}",
                text: "{{ __('adminPage.check-delete') }} " + event.target.dataset.name +
                    " {{ __('adminPage.category') }}?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: "{{ __('adminPage.sure-delete') }}",
                cancelButtonText: "{{ __('adminPage.cancel') }}",
            }).then((result) => {
                if (result.isConfirmed) {
                    return $('#delete_form').submit()
                }
            })
            if (document.querySelector('html').lang == 'ar') {
                document.querySelector('#swal2-title').style.direction = "rtl"
                document.querySelector('#swal2-html-container').style.direction = "rtl"
            }

        }
    </script>
@endsection
