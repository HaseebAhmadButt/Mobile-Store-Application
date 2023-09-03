<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register |
        {{ config(
            //App Name
            'app.name',
            // Alternative Name
            'Laravel',
        ) }}
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/user.auth.css') }}">
    @include('cdnResources.cdn')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="d-flex flex-container align-items-center justify-content-center mx-auto vh-100 w-25 mt-5 mb-5">
        <div class="login-container mx-auto p-3">
            <div>
                @if (!$registered)
                    <div class="alert alert-danger">
                        Sorry, Not able to register you right now.
                    </div>
                @endif
                @if (!$registered && !$validForm )
                    <div class="alert alert-danger">
                       Data Entered in Fields is In-Correct
                    </div>
                @endif
                @if ($accountExists)
                <div class="alert alert-danger">
                   This E-Mail is already registered.
                </div>
            @endif
                <form id="registration-form" action="/registeringUser" method="post">
                    @csrf
                    <h4 class="text-center log-in-heading mb-4">
                        REGISTER NOW
                    </h4>
                    <div class="alerts">
                        <div class=" alert alert-danger notification" id="empty-fields" role="alert">
                            Please fill all fields.
                        </div>
                        <div class=" alert alert-danger notification" id="in-correct-mail" role="alert">
                            Please Enter Appropriate E-Mail.
                        </div>
                        <div class=" alert alert-danger notification" id="in-complete-password" role="alert">
                            Password Should be of atleast 8 characters.
                        </div>
                        <div class=" alert alert-danger notification" id="in-correct-password" role="alert">
                            Please Re-Check the passwords you entered.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            aria-describedby="Please Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="Please Enter Your Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="confirm_password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary p-0.5 w-50">Submit</button>
                    </div>
                </form>
                <h6 class="text-center mt-4">
                    OR
                    <br>
                    Register with
                </h6>
                <div class="d-flex justify-content-center log-in-options mt-3 self-align-center gap-5">
                    <a href="/auth/googleLogIn">
                        <img src="assets/images/google.png" />
                    </a>
                    <a href="/auth/facebookRegistration">
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
<script type="module">
    $(document).ready(function() {
        $('.notification').hide();
        $('#registration-form').on('submit', function(e) {

            const name = $('#name').val();
            const email = $('#email').val();
            const password = $('#password').val();
            const confirm_password = $('#confirm_password').val();
            if (email.trim() === "" || password.trim() === "" || confirm_password.trim() === "") {
                updateAlerts('#empty-fields', e);
            }

            if (!isValidEmail(email)) {
                updateAlerts('#in-correct-mail', e);
            }

            if (password.trim().length < 4 || confirm_password.trim().length < 4) {
                updateAlerts('#in-complete-password', e);
            }

            if (password.trim() !== confirm_password.trim()) {
                updateAlerts('#in-correct-password', e);
            }
        });

        function updateAlerts(alert_id, e) {
            $('.notification').css({
                'display': 'none'
            });
            $(alert_id).css({
                'display': 'block'
            });
            e.preventDefault();
        }

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    });
</script>

</html>
