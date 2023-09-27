<div>
    <div class="header">
        <div class="image">
            <a href="#">
                <img src="/assets/images/logo.png" alt="Website Logo">
            </a>
        </div>
        <div class="sub-header">
            <ul>
                <li><a href="#">Home</a></li>
                {{-- <li><a href="#">Products</a></li> --}}
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shipping Policy</a></li>
                <li class="cart-button"><a href="#">Cart &nbsp;<i class="fas fa-cart-arrow-down"></i></a> </li>
                @php
                    $user = Auth::user();
                @endphp
                @if (!is_null($user))
                    <li id="user_profile">
                        <a href="/profile" class="user_profile_link">
                            <i class="fa fa-solid fa-user"></i>
                        </a>
                    </li>
                @else
                    <li id="sign_in">
                        <a href="/singIn" class="sign_in_link">
                            Sign In
                        </a>
                    </li>
                @endif

            </ul>
        </div>
        <div class="menue">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</div>
