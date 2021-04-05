
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/bundles/jquery-selectric/selectric.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/backend/img/favicon.ico')}}' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="name">Phone</label>
                                        <input type="number" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">NID</label>
                                        <input id="email" type="number" class="form-control" name="nid">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password" class="d-block">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password-confirm">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="">Address</label>
                                        <input name="address" id="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="photo">Photo</label>
                                        <input type="file" class="form-control" name="photo">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-check"></i>
                                        Register
                                    </button>

                                    <div class="mb-4 text-muted text-right">
                                        Already Registered? <a href="{{route('showLoginForm')}}">Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="{{asset('assets/backend/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('assets/backend/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{asset('assets/backend/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('assets/backend/js/page/auth-register.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('assets/backend/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('assets/backend/js/custom.js')}}"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>
