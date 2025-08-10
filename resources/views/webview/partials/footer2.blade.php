{{--Footer--}}
<style>
    /*footer*/
    .footer {
        background-color: #222;
        color: #ccc;
        padding: 60px 20px 30px;
        font-size: 15px;
    }

    .footer h6 {
        color: #fff;
        font-size: 14px;
        text-transform: uppercase;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .footer a {
        color: #a5a5a5;
        text-decoration: none;
    }

    .footer a:hover {
        color: #fff;
    }

    .footer .social-icons a {
        color: #fff;
        background: #444;
        display: inline-block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border-radius: 3px;
        margin-right: 10px;
    }

    .footer .footer-bottom {
        border-top: 1px solid #444;
        margin-top: 40px;
        padding-top: 20px;
        font-size: 13px;
        color: #777;
    }

    .footer .subscribe-form {
        display: flex;
        margin-bottom: 10px;
    }

    .footer .subscribe-form input[type="email"] {
        border: none;
        padding: 10px;
        flex: 1;
        border-radius: 3px 0 0 3px;
    }

    .footer .subscribe-form button {
        background-color: #f4a324;
        border: none;
        color: #fff;
        padding: 10px 15px;
        border-radius: 0 3px 3px 0;
    }

    .footer .photo-gallery img {
        width: 50px;
        margin-right: 5px;
        margin-bottom: 5px;
        border-radius: 4px;
    }

</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-3">
                <h6>{{ env('APP_NAME') }}</h6>
                <div class="photo-gallery d-flex flex-wrap">
                    <a href="{{ url('/') }}">   <img src="{{ asset($basicinfo->logo) }}" alt="" style="width: 138px"> </a>
                    {{--                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/04-12-150x150.jpg" alt="">--}}
                    {{--                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/03-25-150x150.jpg" alt="">--}}
                    {{--                    <img src="https://motors.stylemixthemes.com/wp-content/uploads/2021/03/01-25-150x150.jpg" alt="">--}}
                </div>
            </div>



            <!-- Column 2 -->
            <div class="col-md-3">
                <h6><span style="color:#4c8cf5;">{{ env('APP_NAME') }}</span></h6>
                <p>
                    {{ $basicinfo->address }}
                </p>
            </div>

            <!-- Column 3 -->
            <div class="col-md-3">
                <h6>LATEST BLOG POSTS</h6>
                <p>The Tesla Model S isn’t the first truly autonomous car on the road...</p>
{{--                <a href="#"><i class="fa-regular fa-comments"></i> No Comments</a>--}}
            </div>

            <!-- Column 4 -->
            <div class="col-md-3">
                <h6>SOCIAL NETWORK</h6>
                <div class="social-icons mt-2">
                    <a href="{{ $basicinfo->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $basicinfo->instagram }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $basicinfo->linkedin }}"><i class="fab fa-tiktok"></i></a>
                    <a href="{{ $basicinfo->youtube }}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4" style="border-color: #444;">

        <div class="row">
            <!-- Subscribe -->
            <div class="col-md-3">
                <h6>SUBSCRIBE</h6>
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter your email...">
                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                </form>
                <small>Get latest updates and offers.</small>
            </div>

            <!-- Sales Hours -->
            <div class="col-md-3">
                <h6>Pages</h6>
                <a href="{{ url('venture/about_us') }}"><p>About Us</p></a>
                <a href="{{ url('venture/contact_us') }}"><p>Contact Us</p></a>
                <a href="{{ url('venture/privacy_policy') }}"><p>Terms and conditions</p></a>
                <a href="{{ url('venture/faq') }}"><p>Faqs</p></a>
            </div>

            <!-- Service Hours -->
            <div class="col-md-3">
                <h6>Shipping Info</h6>
                <p><strong>Delivery Inside Dhaka:</strong> {{ $basicinfo->inside_dhaka_charge }}</p>
                <p><strong>Delivery Outside Dhaka:</strong> {{ $basicinfo->outside_dhaka_charge }}</p>

            </div>

            <!-- Parts Hours -->
            <div class="col-md-3">
                <h6>Support Hours</h6>
                {!! $basicinfo->office_hours ?? '' !!}
            </div>
        </div>

        <div class="footer-bottom mt-4 text-center">
            Copyright © 2025. {{ env('APP_NAME') }} – Developed by <a href="https://danpitetech.com/"> Danpite.Tech </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Disable dropdowns on desktop (keep them clickable on mobile)
            if (window.innerWidth >= 768) {
                document.querySelectorAll('.dropdown-toggle').forEach(function (el) {
                    el.removeAttribute('data-bs-toggle');
                    el.removeAttribute('data-bs-target');
                });
            }

            // Handle icon change when collapsing/expanding
            document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function (toggle) {
                const targetId = toggle.getAttribute('data-bs-target');
                const collapseEl = document.querySelector(targetId);

                if (collapseEl) {
                    collapseEl.addEventListener('show.bs.collapse', function () {
                        toggle.querySelector('span').innerHTML = '&darr;';
                    });
                    collapseEl.addEventListener('hide.bs.collapse', function () {
                        toggle.querySelector('span').innerHTML = '&rsaquo;';
                    });
                }
            });

        });

            const menuToggle = document.querySelector(".mobile-menu-toggle");
            const mobileMenu = document.querySelector("#mobileMenu");
            const closeBtn = document.querySelector(".close-mobile-menu");

            menuToggle.addEventListener("click", () => {
            mobileMenu.classList.add("open");
        });

            closeBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("open");
        });

            // Optional: close menu when clicking outside
            document.addEventListener("click", (e) => {
            if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
            mobileMenu.classList.remove("open");
        }
        });



    </script>
</footer>
