@extends('admin.layouts.main')


@push('title')
    <title>Admin Dashboard : {{@config('constants.site_name')}} </title>
@endpush


@section('body-content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Posts</p>
                        <h6 class="mb-0"> {{ $totalPostNum }} </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Published</p>
                        <h6 class="mb-0"> {{$publishedPosts}} </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Draft Posts</p>
                        <h6 class="mb-0"> {{$draftPostsNum}} </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Messages</p>
                        <h6 class="mb-0">{{$totalmessage}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent Posts</h6>
                <a href="/admin/all-posts">Manage Posts</a>
            </div>
            <div class="table-responsive">
                <table class="table text-center align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">S.No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Published on</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allPosts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td> <img class="img-thumbnail" width="100px"
                                        src="{{ '/storage/blogs-images/' . $post->image }}" alt="" srcset=""></td>
                                <td>
                                    @if ($post->status)
                                        {{ 'Published' }}
                                    @else
                                        {{ 'Draft' }}
                                    @endif
                                </td>
                                <td>{{ $post->added_on }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
