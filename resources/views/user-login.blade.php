
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--    admin  css files--}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="assets/js/sb-admin-2.min.js" rel="script"></script>
    <title>User Login</title>
</head>
<body>
<section class="vh-100" style="background-color: #cbcaca;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img
                                src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img2.jpg"
                                alt="login form"
                                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                            />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                {{-- @if(isset(Auth::user()->email))
                                <script>window.location="/user/login/successful";</script>
                               @endif

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                 <ul>
                                 @foreach($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                 @endforeach
                                 </ul>
                                </div>
                               @endif --}}
                                <form method="POST" action="{{ route('login')}}">
                                    @csrf
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3 text-primary" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0 text-primary">Meal On Wheel</span>
                                    </div>

                                    <h3 class="fw-normal mb-3 pb-3 text-primary" style="letter-spacing: 1px;">User Login</h3>

                                    <div class="form-outline mb-4">
                                        <label class="form-label text-primary" for="form2Example17">Email address</label>
                                        <input  type="email" id="form2Example17" value="{{ old('email') }}" class=" @error('email') is-invalid @enderror form-control form-control-lg" name="email"/>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label text-primary" for="form2Example27">Password</label>
                                        <input type="password" id="form2Example27" class="@error('password') is-invalid @enderror form-control form-control-lg" name="password"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Login</button>
                                    </div>

                                    <a class="small text-muted d-flex justify-content-center" href="#!">Forgot
                                        password?</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
