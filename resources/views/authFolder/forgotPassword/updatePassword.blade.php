<!DOCTYPE html>
<html>

<head>
    <title>
        Forgot Password |
        {{ config(
            //App Name
            'app.name',
            // Alternative Name
            'Laravel',
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
                    {{-- <h5 class="text-center log-in-heading mb-4">
                        Enter Your Registered E-Mail
                    </h5> --}}
                    <h5 class="text-center log-in-heading mb-4">
                        Update Password
                    </h5>
                    <div class="mb-3">
                        <label for="email" class="form-label">New Password</label>
                        <input type="email" class="form-control" id="email"
                            aria-describedby="Please Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Confirm New Password</label>
                        <input type="email" class="form-control" id="email"
                            aria-describedby="Please Enter 6-Digit Code sent to your Email">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary p-0.5 w-50">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
