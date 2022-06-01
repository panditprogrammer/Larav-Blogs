<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign Up - {{@config('constants.site_name')}} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/admin-assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="/admin-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="/admin-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin-assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">

               <!-- get the error  -->
               @if (session()->get('success') == "1")
               {!! "<div class='container text-success alert text-center mb-4 py-3'>" !!}
                   {{ session()->get('msg') }}
               {!!   "</div>" !!}
               @else
               {!! "<div class='container text-danger alert text-center mb-4 py-3'>" !!}
                   {{ session()->get('msg') }}
               {!!   "</div>" !!}
               @endif

                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">

                    <form method="POST" action="{{ url('/admin/signup') }}"
                        class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        @csrf
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="{{url("/")}}" class="">
                                <h4 class="text-primary"><i class="fa fa-user-edit me-2"></i>{{@config('constants.site_name')}}</h4>
                            </a>
                            <h4>Sign Up</h4>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" id="floatingText"
                                placeholder="username" value="{{ old('username') }}">
                            <label for="floatingText">Username</label>
                            <span class="text-danger py-2">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput"
                                placeholder="name@email.com" value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                            <span class="text-danger py-2">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password_confirmation"
                                id="floatingPassword" placeholder="Comfirm Password">
                            <label for="floatingPassword">Comfirm Password</label>
                            <span class="text-danger py-2">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="/admin/signin">Sign In</a></p>
                    </form>

                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="/admin-assets/lib/easing/easing.min.js"></script>
    <script src="/admin-assets/lib/waypoints/waypoints.min.js"></script>
    
    <script src="/admin-assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/admin-assets/js/main.js"></script>
</body>

</html>
