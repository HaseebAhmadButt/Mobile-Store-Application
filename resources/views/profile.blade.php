<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | {{ config('app.name', 'Laravel') }}</title>
    @include('CommonCssResources.css')
    @include('cdnResources.cdn')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* *{
            margin: 0 !important;
            padding: unset !important;
            box-sizing: border-box !important;
        } */
        header {
            padding: unset;
            background-color: black
        }

        body {
            /* margin: 0 !important; */
            /* padding: unset !important; */
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.1);
            /* box-sizing: border-box; */
        }

        a {
            text-decoration: none;
            color: rgb(0, 0, 0);
        }

        .recent-products-heading {
            width: max-content;
            margin: 2.5% 0 0 4%;
            text-decoration: underline;
        }

        /* Profile Section */

        .profile-body {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: row;

        }

        .sidebar {
            flex: 20%;
            height: 100%;
            /* background-color: cyan; */
        }

        .profile-info {
            flex: 80%;
            height: 100%;
            background-color: gainsboro
        }

        .profile-options {
            margin: 0;
            padding: 0;
            margin-top: 10%;
            list-style-type: none;
            padding: 0;
        }

        .profile-options li {
            padding: 10px 20px;
            border-bottom: 1px solid #555;
            font-family: sans-serif;
            /* Separator between items */
        }

        .profile-options li:hover {
            background-color: white;
            /* Background color on hover */
            cursor: pointer;
        }
        .hide{
            display: none;
        }
    </style>

</head>

<body>
    <header>
        <x-header />
    </header>
    <div class="profile-body">
        <div class="sidebar">
            <ul class="profile-options">
                <li class="profile-settings"> <i class="fa fa-cog" aria-hidden="true"></i>
                    &nbsp; &nbsp;Profile Settings</li>
                <li class="saved-products"> <i class="fa fa-save"></i>
                    &nbsp; &nbsp; Saved Products</li>
                <li class="cart"><i class="fas fa-cart-arrow-down"></i>
                    &nbsp; &nbsp; Cart</li>
                <li class="previous-orders"><i class="fa fa-history"></i>&nbsp; &nbsp; Previous Orders</li>
                <li class="bank-account"><i class="fa fa-arrow-circle-right"></i>&nbsp; &nbsp; Attach Bank Account</li>
                <li class="log-out"><i class="fa fa-sign-out-alt"></i>&nbsp; &nbsp; Log Out</li>
            </ul>
        </div>
        <div class="profile-info">
            <div id="profile-settings" class="hide">
                <h1>Profile Settings</h1>
            </div>
            <div id="saved-products" class="hide">
                <h1>Saved Products</h1>
            </div>
            <div id="cart" class="hide">
                <h1>Cart</h1>
            </div>
            <div id="previous-orders" class="hide">
                <h1>Previous Orders</h1>
            </div>
            <div id="bank-account" class="hide">
                <h1>Bank Account</h1>
            </div>
            <div id="log-out" class="hide">
                <h1>Log Out Performed</h1>
            </div>
        </div>
    </div>

    <footer>
        <x-footer />
    </footer>
</body>
<script type="module">
    $(document).ready(function() {
        $("#profile-settings").css({
            "display": "block"
        })
        $(".profile-options li").on('click', function(){
            $(".hide").css({
                "display":"none"
            })
            $("#"+$(this).attr('class')).css({
                "display":"block"
            })
        });
    })
</script>

</html>
