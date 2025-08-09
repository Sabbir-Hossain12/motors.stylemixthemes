<style>
    .line {
        height: 5px;
        width: 30px;
        background-color: white;
        margin-bottom: 15px;

    }

    .info_text {
        color: white;
    }
</style>
<!--<div class="pt-4 row" style="background: #f3f3f3">-->
<!--    <div class="pt-4 text-center col-lg-4 col-md-4 col-sm-12">-->
<!--        <i style="font-size: 1.5rem;" class="fas fa-lock"></i>-->
<!--        <div style="font-weight: 600; font-size: 1.2rem">All secure payment methods</div>-->
<!--        <div class="" style="justify-content: center;width: 100%;float: left;">-->
<!--            <a class="btn" id="formTextBtn" href="tel:{{ App\Models\Basicinfo::first()->bk }}"-->
<!--                style="text-align: center;padding: 10px;width: 100%;font-size: 18px;font-weight: bold;padding-bottom: 0px;"><img-->
<!--                    src="{{ asset('public/bkl.png') }}" style="width: 30px;border-radius: 50%;margin-top: -2px;"-->
<!--                    alt=""> {{ App\Models\Basicinfo::first()->bk }} Bkash Personal </a>-->
<!--        </div>-->
<!--        <div class="" style="justify-content: left;width: 100%;float: left;">-->
<!--            <a class="btn" id="formTextBtn" href="tel:{{ App\Models\Basicinfo::first()->ng }}"-->
<!--                style="text-align: center;padding: 10px;width: 100%;font-size: 18px;font-weight: bold;padding-bottom: 0px;"><img-->
<!--                    src="{{ asset('public/ngl.jpg') }}" style="width: 30px;border-radius: 50%;margin-top: -2px;"-->
<!--                    alt=""> {{ App\Models\Basicinfo::first()->ng }} Nagad Personal</a>-->
<!--        </div>-->
<!--        <div class="mb-3" style="justify-content: left;width: 100%;float: left;">-->
<!--            <a class="btn" id="formTextBtn" href="tel:{{ App\Models\Basicinfo::first()->dbbl }}"-->
<!--                style="text-align: center;padding: 10px;width: 100%;font-size: 18px;font-weight: bold;padding-bottom: 0px;"><img-->
<!--                    src="{{ asset('public/rkl.png') }}" style="width: 30px;border-radius: 50%;margin-top: -2px;"-->
<!--                    alt=""> {{ App\Models\Basicinfo::first()->dbbl }} Roket Personal</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="pt-4 text-center col-lg-4 col-md-4 col-sm-12">-->
<!--        <i style="font-size: 1.5rem;" class="fas fa-smile"></i>-->
<!--        <div style="font-weight: 600; font-size: 1.2rem">Satisfaction guaranteed</div>-->
<!--        <div style="margin: 15px 0">Made with premium quality materials.<br><b>Cozy yet lasts the test of time</b></div>-->
<!--    </div>-->
<!--    <div class="pt-4 text-center col-lg-4 col-md-4 col-sm-12">-->
<!--        <i style="font-size: 1.5rem;" class="fas fa-truck"></i>-->
<!--        <div style="font-weight: 600; font-size: 1.2rem">Worldwide delivery</div>-->
<!--        <p>We use all courier for delivered the prodcuts</p>-->
<!--    </div>-->
<!--</div>-->


<footer id="footer" class="p-0 footer color-bg">


    <div class="pt-4 footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3" id="left">
                    <div class="row">
                        <div class="col-12">
                            <div class="module-heading">
                                <h4 class="module-title">About</h4>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.module-heading -->
                    <div class="row">
                        <div class="col-12">
                            <div class="module-body">
                                <p style="color: white">{{ env('APP_NAME') }} fashion is a trendy fashion brand in
                                    Bangladesh. Our aim is to serve our customers with the best quality products at a
                                    very reasonable price.</p>

                            </div>
                        </div>
                    </div>


                    <div class="mb-4 row">
                        <div class="col-12 col-md-12 no-padding social" style="text-align: center;">
                            <ul class="mb-4 link d-flex justify-content-between">
                                <li class="fb pull-left" style="    margin-top: 4px;">
                                    <a target="_blank" rel="nofollow" href="{{ $basicinfo->facebook }}"
                                        title="Facebook"></a>
                                </li>
                                <li class="youtube pull-left" style="    margin-top: 4px;">
                                    <a target="_blank" rel="nofollow" href="{{ $basicinfo->youtube }}"
                                        title="Youtube"></a>
                                </li>
                                <li class="pull-left">
                                    <a target="_blank" href="{{ $basicinfo->linkedin }}" title="Instagram">
                                        <img src="{{ asset('public/instagram.png') }}" style="width:43px;">
                                    </a>
                                </li>
                                <li class="pull-left">
                                    <a target="_blank" href="{{ $basicinfo->twitter }}" title="Google Maps">
                                        <img src="{{ asset('public/google-maps.png') }}" style="width:40px;">
                                    </a>
                                </li>
                                <li class="pull-left">
                                    <a target="_blank" href="{{ $basicinfo->pinterest }}" title="Tiktok">
                                        <img src="{{ asset('public/video.png') }}" style="width:40px;">
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix payment-methods" style="text-align: -webkit-center;">
                                <ul style="display: flex;width: 250px;">
                                    <li><img src="{{ asset('public/1p.png') }}" alt=""
                                            style="border-radius: 2px;">
                                    </li>
                                    <li><img src="{{ asset('public/2p.png') }}" alt=""
                                            style="border-radius: 2px;">
                                    </li>
                                    <li><img src="{{ asset('public/3p.jpg') }}" alt=""
                                            style="border-radius: 2px;">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.module-body -->
                </div>

                <div class="col-12 col-md-3" id="left">
                    <div class="module-heading">
                        <h4 class="module-title">Information</h4>
                        <div class="line"></div>
                    </div>

                    <div class="module-body">
                        <ul class='list-unstyled' style="font-size: 16px;">
                            <li class="first"><a class="info_text" title="Your Account"
                                    href="{{ url('venture/about_us') }}">About us</a></li>
                            <div class="lineb"></div>
                            <li><a class="info_text" href="{{ url('venture/contact_us') }}"
                                    title="Suppliers">Contact Us</a></li>
                            <div class="lineb"></div>
                            <li><a class="info_text" href="{{ url('venture/terms_codition') }}"
                                    title="Terms & Conditions">Terms & Conditions</a></li>
                            <div class="lineb"></div>
                            <li><a class="info_text" href="{{ url('venture/faq') }}" title="faq">FAQ</a></li>
                            <div class="lineb"></div>
                            <li><a class="info_text" href="tel:+88{{ $basicinfo->phone_one }}" title="email">Phone:
                                    {{ $basicinfo->phone_one }}</a></li>
                            <div class="lineb"></div>
                            <li><a class="info_text" href="mailto:{{ $basicinfo->email }}" title="email">Email:
                                    {{ $basicinfo->email }}</a></li>

                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-md-3" id="left">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                        <div class="line"></div>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class="toggle-footer" style="font-size: 16px;">
                            <li class="media">
                                <small style="color: white; font-size: 16px;">Address:</small>
                                <div class="media-body" style="color: white;">
                                    {{ $basicinfo->address }}
                                </div>
                            </li>
                            <div class="lineb"></div>

                            <li class="media">
                                <small style="color: white; font-size: 16px;">Phone:</small>
                                <div class="media-body" style="color: white;">
                                    <a href="tel:+88{{ $basicinfo->phone_one }}" style="color: white;">+(88)
                                        {{ $basicinfo->phone_one }}</a><br>
                                    <a href="tel:+88{{ $basicinfo->phone_two }}" style="color: white;">+(88)
                                        {{ $basicinfo->phone_two }}</a><br>
                                    <a href="tel:+88{{ $basicinfo->wp_1 }}" style="color: white;">+(88)
                                        {{ $basicinfo->wp_1 }}</a><br>
                                    <a href="tel:+88{{ $basicinfo->wp_2 }}" style="color: white;">+(88)
                                        {{ $basicinfo->wp_2 }}</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->



                <div class="col-12 col-md-3" id="left">
                    <div class="module-heading">
                        <h4 class="module-title">LIKE US ON FACEBOOK</h4>
                        <div class="line"></div>
                    </div>
                    <div class="row">
                        <a target="_blank" href="{{ $basicinfo->facebook }}">
                            <img src="{{ asset($basicinfo->page_image) }}" style="width:100%;border-radius:4px;">
                        </a>
                    </div>

                </div>
                <!-- /.col -->



            </div>
            <div class="pt-3 pb-2 row">

                <div class="col-12">
                    <div class="module-heading">
                        <p class="text-center module-title" style="font-size: 12px;">Copyright © 2025 -
                            {{ env('APP_NAME') }} | Developed by <a href="https://danpitetech.com/">Danpite Tech</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</footer>
