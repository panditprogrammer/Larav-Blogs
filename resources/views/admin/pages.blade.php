@extends('admin.layouts.main')

@push('title')
    <title>Admin Pages : {{@config('constants.site_name')}} </title>
@endpush

@section('body-content')
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3>This is page</h3>
        </div>
    </div>
</div>
<!-- Blank End -->
@endsection

