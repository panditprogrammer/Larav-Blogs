@extends('admin.layouts.main')


@push('title')
    <title>Admin - All Contacts | {{@config('constants.site_name')}} </title>
@endpush


@section('body-content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">

            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">All Contact</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">S.No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Message</th>
                            <th scope="col">Added On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allContacts as $Contact)
                            <tr>
                                <td>{{ $Contact->id }}</td>
                                <td>{{ $Contact->name }}</td>
                                <td>{{ $Contact->email }}</td>
                                <td>{{ $Contact->mobile}}</td>
                                <td width="40%">{{ $Contact->message}}</td>
                                <td>{{ $Contact->added_on }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
