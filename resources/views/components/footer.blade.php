<style>

</style>
<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <div class="footer">
        <div class="upper-footer">
            <div class="sub-upper-div" id="company-mission">
                <h3>Empowering Connectivity</h3>
                <p>Our mission is to bring the world closer together by providing the latest mobile technology at your
                    fingertips. We strive to offer a seamless shopping experience, delivering quality devices,
                    accessories, and exceptional service that enhances your digital life. At <a
                        href="#"><b>PhoneFusion</b></a>, we're dedicated to connecting you with innovation,
                    reliability, and convenience, one device at a time.</p>
            </div>
            <div class="sub-upper-div" id="important-links">
                <h3>Important Links</h3>
                <ul>
                    <li class="important-link">
                        <a href="" class="i-link">Home</a>
                    </li>
                    <li class="important-link">
                        <a href="" class="i-link">About Us</a>
                    </li>
                    <li class="important-link">
                        <a href="" class="i-link">Contact Us</a>
                    </li>
                    <li class="important-link">
                        <a href="" class="i-link">Shipping Policy</a>
                    </li>
                    <li class="important-link">
                        <a href="" class="i-link">Cart</a>
                    </li>
                    @php
                        $user = Auth::user();
                    @endphp
                    @if (!is_null($user))
                        <li class="important-link">
                            <a href="" class="i-link"></a>
                        </li>
                    @endif

                </ul>
            </div>
            <div class="sub-upper-div" id="registration">
                <form action="">
                    <h5 class="text-left log-in-heading mb-4">
                        Register For Updates
                    </h5>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Please Enter Your E-Mail"
                            aria-describedby="Please Enter Your Email">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary p-0.5 w-25">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="lower-footer">
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
            <div class="copyRight">
                All Rights Reserved &copy; {{ date('Y') }}
            </div>
        </div>
    </div>
</div>
