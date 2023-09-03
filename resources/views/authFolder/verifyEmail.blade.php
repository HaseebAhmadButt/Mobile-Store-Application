<!DOCTYPE html>
<html>

<head>
    <title>
        Confirm Your Account |
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
    <div class="d-flex flex-container align-items-center justify-content-center mx-auto vh-100 w-25">
        <div class="login-container mx-auto p-3">
            <div>
                @if ($accountCreated)
                    <div class="alert alert-success">
                        Account Created Successfully.
                        Now, verify your E-Mail.
                        PhoneFusion has Sent you <b>6-Character</b> code on your provide
                        E-Mail. Please verify it.
                    </div>
                @endif
                @if($incorrectCode)
                <div class="alert alert-danger">
                    Please Enter valid code being sent to your E-Mail.
                 </div>
                @endif
                <form id="confirmationForm" action="emailVerification" method="post">
                    @csrf
                    <div class="alert alert-danger notification">
                       Please Enter the Password being sent to your E-Mail.
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter <b>6-Character</b> Code Sent To Your E-Mail</label>
                        <input type="text" class="form-control" id="text"
                            name="verification_Code"
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
<script type="module">
    $(document).ready(function() {
        $('#confirmationForm').on('submit', function(e) {

            if ($('#text').val().trim() === "") {
                $('.notification').css({
                    'display': 'block'
                });
                e.preventDefault();
            }
        });
    });
</script>

</html>
