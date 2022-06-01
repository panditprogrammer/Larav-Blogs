@extends('admin.layouts.main')


@push('title')
    <title>Admin - All Pages | {{@config('constants.site_name')}} </title>
@endpush


@section('body-content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">

            @isset($success)
                @if ($success)
                    {!! '<div class="text-center alert bg-success text-white py-2">Page Updated successfully!</div>' !!}
                @else
                    {!! '<div class="text-center alert bg-danger  text-white py-2">Unable to update page!</div>' !!}
                @endif
            @endisset

            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">All Page</h6>
                <a href="{{ url('/admin/add-page') }}">Add New Page</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">S.No.</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Page Date</th>
                            <th scope="col">Added On</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allPages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->name }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                    @if ($page->status)
                                        {{ 'Published' }}
                                    @else
                                        {{ 'Draft' }}
                                    @endif
                                </td>
                                <td>{{ $page->page_date }}</td>
                                <td>{{ $page->added_on }}</td>
                                <td><a class="btn btn-sm btn-info"
                                        href="{{ url("/admin/edit-page/{$page->id}") }}">Edit</a>
                                </td>
                                <td><a class="btn btn-sm btn-danger"
                                        href="{{ url("/admin/delete-page/{$page->id}") }}">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
