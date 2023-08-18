@extends("user.layouts.app")
@section("title")
    <title>Hoàn tất xác minh</title>

@endsection
@section("content")
    <div id="app">
        <div style="padding-bottom: 80px;">
            <div class="fadein">
                <div style="opacity: 1; transform: none;">
                    <div class="header-container">
                        <a href="{{url()->previous()}}">
                            <span role="img" aria-label="left" tabindex="-1"
                                  class="anticon anticon-left arrow-icon"><svg
                                    viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em" height="1em"
                                    fill="currentColor" aria-hidden="true"><path
                                        d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>

                        </a>
                        <span class="ant-typography header-title">Xác minh</span>
                        <div></div>
                    </div> <!----> <!----> <!---->
                    <div class=""
                         style="opacity: 1; transform: none; width: 100%; padding: 10px 20px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <div class="ant-image"><img src="/static/media/success.9ecb81807c34f122fc93.jpg"
                                                    class="ant-image-img"></div>
                        <div
                            class="ant-progress ant-progress-circle ant-progress-status-success ant-progress-show-info ant-progress-small"
                            style="">
                            <div class="ant-progress-inner" style="width: 120px; height: 120px; font-size: 24px;">
                                <svg viewBox="0 0 100 100" class="ant-progress-circle">
                                    <path d="M 50,50 m 0,-47
               a 47,47 0 1 1 0,94
               a 47,47 0 1 1 0,-94" stroke-linecap="round" stroke-width="6" fill-opacity="0"
                                          class="ant-progress-circle-trail"
                                          style="stroke-dasharray: 295.31px, 295.31px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s ease 0s, stroke-width 0.06s ease 0.3s, opacity 0.3s ease 0s;"></path>
                                    <path d="M 50,50 m 0,-47
               a 47,47 0 1 1 0,94
               a 47,47 0 1 1 0,-94" stroke="" stroke-linecap="round" stroke-width="6" opacity="1" fill-opacity="0"
                                          class="ant-progress-circle-path"
                                          style="stroke-dasharray: 295.31px, 295.31px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0s ease 0s, stroke-dasharray 0s ease 0s, stroke 0s ease 0s, stroke-width 0.3s ease 0s, opacity 0s ease 0s;"></path>
                                    <path d="M 50,50 m 0,-47
               a 47,47 0 1 1 0,94
               a 47,47 0 1 1 0,-94" stroke="" stroke-linecap="round" stroke-width="6" opacity="0" fill-opacity="0"
                                          class="ant-progress-circle-path"
                                          style="stroke: rgb(82, 196, 26); stroke-dasharray: 0px, 295.31px; stroke-dashoffset: 0px; transition: stroke-dashoffset 0s ease 0s, stroke-dasharray 0s ease 0s, stroke 0s ease 0s, stroke-width 0.3s ease 0s, opacity 0s ease 0s;"></path>
                                </svg>
                                <span class="ant-progress-text"><span role="img" aria-label="check"
                                                                      class="anticon anticon-check"><svg
                                            viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em"
                                            height="1em" fill="currentColor" aria-hidden="true"><path
                                                d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z"></path></svg></span></span>
                            </div>
                        </div>
                        <span class="ant-typography" style="font-size: 17px; text-align: center;">Chúc mừng</span><span
                            class="ant-typography" style="font-size: 17px; text-align: center;">Hoàn thành xác minh danh tính. Vui lòng tiếp tục</span>


                        <a href="/xac-nhan-khoan-vay" style="width: 100%">
                            <div
                                style="margin:0 auto;background: rgb(54, 124, 76); width: 70%; display: flex; justify-content: center; align-items: center; border-radius: 10px; padding: 5px;">
                                <span class="ant-typography"
                                      style="color: rgb(255, 255, 255); font-weight: 700; font-size: 17px;">Tiếp tục</span>

                            </div>
                        </a>
                    </div>
                </div>
            </div> <!----> <!----></div>
    </div>
@endsection
@section("js_location")
    {{--    <script src="{{asset('js/user-xac-minh-thong-tin-ngan-hang.js?t='.Carbon\Carbon::now()->timestamp)}}"></script>--}}
@endsection
