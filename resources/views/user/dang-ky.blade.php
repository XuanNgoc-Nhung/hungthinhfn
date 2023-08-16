@extends("user.layouts.app")
@section("title")
    <title>Đăng ký</title>
@endsection
@section("content")
    <div id="app">
        <div>
            <div style="padding-bottom: 30px;">
                <div class="login-container"
                     style="background-image: linear-gradient(rgba(255, 255, 255, 0.77) 0%, rgb(255, 255, 255) 100%), url('/static/media/ksksk.webp'); min-height: 100vh; background-repeat: no-repeat; background-size: cover; background-position: 63% 0px; padding-bottom: 60px;">
                    <div class="empty-div transformLogo showTransform"
                         style="opacity: 1; padding: 0px; margin-bottom: 0px;">
                        <div class="ant-image" style="width: 250px;"><img src="/static/media/hungthinh.png"
                                                                          class="ant-image-img"
                                                                          style="border-radius: 0px;"></div>
                    </div>
                    <h3 style="text-align: center; font-size: 16px; margin-bottom: 22px; margin-top: -20px; font-weight: 500; color: rgb(54, 124, 76);">
                        HOTLINE: 02929990999</h3>
                    <div class="form" style="margin-top: -10px;">
                        <dang-ky></dang-ky>
                        <div style="position: relative; padding-left: 40px; padding-right: 40px; margin-top: 15px;">
                            <div class="owl-carousel">
                                <div class="item" style=" margin-right: 10px;"><img src="/images/slider/img1.jpg"></div>
                                <div class="item" style=" margin-right: 10px;"><img src="/images/slider/img2.jpg"></div>
                                <div class="item" style=" margin-right: 10px;"><img src="/images/slider/img3.jpg"></div>
                                <div class="item" style=" margin-right: 10px;"><img src="/images/slider/img4.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js_location")
    <script src="{{asset('js/user-dang-ky.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>
@endsection
