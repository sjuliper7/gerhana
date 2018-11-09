<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{!! asset('template/styles/bootstrap4/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css"
          href="{!! asset('template/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('template/styles/bootstrap4/login.css') !!}">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center" style="margin-top: 15em">
                <a href="{{ url('/home') }}">
                    <img src="images/login.png" alt="Responsive image" style="width: 50%;height: 50%">
                </a>
                <b></b>
                <h3> Selamat Datang di BatakZone</h3></b>
                <h5>Masuk dan penuhi berbagai kebutuhanmu disini</h5>

            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-sm-9 ">
                    <div class="card card-signin my-5" >
                        <div class="card-body">
                            <h5 class="card-title text-center">Sign In</h5>
                            <form class="form-signin form-group">

                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" style="width: 21em" class="rounded-0" placeholder="Email address"
                                           required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" style="width: 21em" class="rounded-0"
                                           placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                <div class="form-group">
                                    <div class="form-check" style="margin-left: 25px">
                                        <input type="checkbox" class="form-check-input " id="exampleCheck1" >
                                        <label class="form-check-label" for="exampleCheck1" style="padding-left: 0px">Check
                                            me out</label>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase rounded" type="submit">Sign in
                                </button>

                                <hr class="my-4">

                                <button class="btn btn-lg btn-google btn-block text-uppercase rounded" type="submit"
                                        style="background: #ea4335"><i class="fab fa-google mr-2"></i> Sign in with
                                    Google
                                </button>
                                <button class="btn btn-lg btn-facebook btn-block text-uppercase rounded" type="submit"><i
                                        class="fab fa-facebook-f mr-2"></i> Sign in with Facebook
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{!! asset('template/js/jquery-3.3.1.min.js') !!}"></script>
<script src="{!! asset('template/js/bootstrap.bundle.min.js') !!}"></script>

</body>
</html>


