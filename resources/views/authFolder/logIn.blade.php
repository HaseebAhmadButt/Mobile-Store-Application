<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Log In | {{ config(
        //App Name
        'app.name',
        // Alternative Name
        'app.name',
    ) }}
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/user.auth.css') }}">
    @include('cdnResources.cdn')
</head>

<body>

    <div class="d-flex flex-container align-items-center justify-content-center mx-auto vh-100 w-25">
        <div class="login-container mx-auto p-3">
            <div>
                <form>
                    <h3 class="text-center log-in-heading mb-4">
                        LOG IN
                    </h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="Please Enter Your Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="mb-3 form-anchor">
                        <a href="{{route('forgotPassword')}}"> Forgot Password </a>
                    </div>
                    <div class="clear">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary p-0.5 w-50">Submit</button>
                    </div>
                </form>
                <h6 class="text-center mt-4">
                    OR
                    <br>
                    log-in with
                </h6>
                <div class="d-flex justify-content-center log-in-options mt-3 self-align-center gap-5">
                    <a href="#">
                        <img src="assets/images/google.png" />
                    </a>
                    <a href="#">
                        <img src="assets/images/facebook.png" />
                    </a>
                    <a href="#">
                        <img src="assets/images/twitter.png" />
                    </a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
