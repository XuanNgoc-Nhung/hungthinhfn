@extends("user.layouts.app")
@section("title")
    <title>Đăng nhập</title>
@endsection
@section("content")
    <div id="app">
        <div>
            <div style="padding-bottom: 30px;">
                <div class="login-container"
                     style="background-image: linear-gradient(rgba(255, 255, 255, 0.77) 0%, rgb(255, 255, 255) 100%), url(&quot;/static/media/ksksk.webp&quot;); min-height: 100vh; background-repeat: no-repeat; background-size: cover; background-position: 63% 0px; padding-bottom: 60px;">
                    <div class="empty-div transformLogo showTransform"
                         style="opacity: 1; padding: 0px; margin-bottom: 0px;">
                        <div class="ant-image" style="width: 250px;"><img src="/static/media/hungthinh.png"
                                                                          class="ant-image-img"
                                                                          style="border-radius: 0px;"></div>
                    </div>
                    <h3 style="text-align: center; font-size: 16px; margin-bottom: 22px; margin-top: -20px; font-weight: 500; color: rgb(54, 124, 76);">
                        HOTLINE: 02929990999</h3>
                    <div class="form" style="margin-top: -10px;">
                        <div class="form-body"><input autocomplete="off" placeholder="Nhập số điện thoại..." type="text"
                                                      value="" class="ant-input ant-input-lg input"
                                                      style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
                            <input autocomplete="off" type="password" placeholder="Nhập mật khẩu..."
                                   class="ant-input ant-input-lg input"
                                   style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
                            <button type="button" class="ant-btn ant-btn-default ant-btn-lg login-btn"
                                    style="width: calc(100% - 80px) !important; border-radius: 50px !important; background: rgb(54, 124, 76) !important; opacity: 1 !important;">
                                <span class="ant-typography" style="color: rgb(255, 255, 255); font-weight: 400;">Đăng nhập</span>
                            </button>
                            <div class="form-footer"><a class="ant-typography"
                                                        style="font-size: 15px; color: rgb(88, 88, 90); font-weight: 500;">Chưa
                                    có tài
                                    khoản ? 👉 Đăng ký tài khoản mới</a></div>
                        </div>
                        <div style="position: relative; padding-left: 40px; padding-right: 40px; margin-top: 15px;">
                            <div class="owl-carousel">
                                <div class="item" style=" margin-right: 10px;"><img
                                        src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                <div class="item" style=" margin-right: 10px;"><img
                                        src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                <div class="item" style=" margin-right: 10px;"><img
                                        src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                <div class="item" style=" margin-right: 10px;"><img
                                        src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                <div class="item" style=" margin-right: 10px;"><img
                                        src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                <div class="item" style=" margin-right: 10px;"><img
                                        src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
