@extends("user.layouts.app")
@section("title")
    <title>Trang chủ</title>
@endsection
@section("content")
    <div id="app">
        <div style="padding-bottom: 80px;">
            <div class="fadein">
                <div class="container" style="padding: 0px !important;">
                    <div class="header-content">
                        <div><span class="ant-typography text-head">Xin chào, </span><br><span
                                class="ant-typography text-head">{{Auth::user()->phone}}</span></div>
                        <div style="margin-left: auto; padding-right: 20px;"><span class="ant-typography text-head">Tổng đài CSKH</span><br><span
                                class="ant-typography text-head">Hotline: 02929990999</span></div>
                        <div><span class="ant-badge"><span role="img" aria-label="bell" class="anticon anticon-bell"
                                                           style="font-size: 20px; color: white;"><svg
                                        viewBox="64 64 896 896" focusable="false" data-icon="bell" width="1em" height="1em"
                                        fill="currentColor" aria-hidden="true"><path
                                            d="M816 768h-24V428c0-141.1-104.3-257.8-240-277.2V112c0-22.1-17.9-40-40-40s-40 17.9-40 40v38.8C336.3 170.2 232 286.9 232 428v340h-24c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h216c0 61.8 50.2 112 112 112s112-50.2 112-112h216c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM512 888c-26.5 0-48-21.5-48-48h96c0 26.5-21.5 48-48 48z"></path></svg></span></span>
                        </div>
                    </div>
                    <div class="noti-text-container"><span
                            class="ant-typography noti-text">096***2 đã rút 40.000.000 đ</span></div>
                    <div style="display: flex; justify-content: center; min-height: 100px;">
                        <div class="ant-image"
                             style="width: 100%; max-width: calc(100% - 40px); height: auto; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                            <img src="/static/media/vay-tin-chap-vpbank.jpg" class="ant-image-img"
                                 style="border-radius: 10px; margin-bottom: 20px;"></div>
                    </div>
                    <button type="button" class="ant-btn ant-btn-default choose-btn" style="margin-top: 20px !important;">
                        <span class="ant-typography" style="color: rgb(255, 255, 255); font-weight: bold; font-size: 20px;">Đăng ký khoản vay</span>
                    </button>
                    <div style="padding: 20px;">
                        <div
                            style="margin: 10px 0px; display: flex; justify-content: space-between; align-items: center; padding: 7px 15px; border: 1px solid rgb(54, 124, 76); border-radius: 5px;">
                        <span class="ant-typography"
                              style="flex: 1 1 0%; font-size: 16px; color: rgb(54, 124, 76); font-weight: 500;">Thủ tục vay nhanh chóng, đơn giản</span><span
                                role="img" aria-label="alert" class="anticon anticon-alert"
                                style="font-size: 20px; color: rgb(255, 115, 35);"><svg viewBox="64 64 896 896"
                                                                                        focusable="false" data-icon="alert"
                                                                                        width="1em" height="1em"
                                                                                        fill="currentColor"
                                                                                        aria-hidden="true"><path
                                        d="M512 244c176.18 0 319 142.82 319 319v233a32 32 0 01-32 32H225a32 32 0 01-32-32V563c0-176.18 142.82-319 319-319zM484 68h56a8 8 0 018 8v96a8 8 0 01-8 8h-56a8 8 0 01-8-8V76a8 8 0 018-8zM177.25 191.66a8 8 0 0111.32 0l67.88 67.88a8 8 0 010 11.31l-39.6 39.6a8 8 0 01-11.31 0l-67.88-67.88a8 8 0 010-11.31l39.6-39.6zm669.6 0l39.6 39.6a8 8 0 010 11.3l-67.88 67.9a8 8 0 01-11.32 0l-39.6-39.6a8 8 0 010-11.32l67.89-67.88a8 8 0 0111.31 0zM192 892h640a32 32 0 0132 32v24a8 8 0 01-8 8H168a8 8 0 01-8-8v-24a32 32 0 0132-32zm148-317v253h64V575h-64z"></path></svg></span>
                        </div>
                        <div
                            style="margin: 10px 0px; display: flex; justify-content: space-between; align-items: center; padding: 7px 15px; border: 1px solid rgb(54, 124, 76); border-radius: 5px;">
                        <span class="ant-typography"
                              style="flex: 1 1 0%; font-size: 16px; color: rgb(54, 124, 76); font-weight: 500;">Hạn mức vay lên đến 500 triệu VNĐ</span><span
                                role="img" aria-label="dashboard" class="anticon anticon-dashboard"
                                style="font-size: 20px; color: rgb(0, 143, 80);"><svg viewBox="64 64 896 896"
                                                                                      focusable="false"
                                                                                      data-icon="dashboard" width="1em"
                                                                                      height="1em" fill="currentColor"
                                                                                      aria-hidden="true"><path
                                        d="M924.8 385.6a446.7 446.7 0 00-96-142.4 446.7 446.7 0 00-142.4-96C631.1 123.8 572.5 112 512 112s-119.1 11.8-174.4 35.2a446.7 446.7 0 00-142.4 96 446.7 446.7 0 00-96 142.4C75.8 440.9 64 499.5 64 560c0 132.7 58.3 257.7 159.9 343.1l1.7 1.4c5.8 4.8 13.1 7.5 20.6 7.5h531.7c7.5 0 14.8-2.7 20.6-7.5l1.7-1.4C901.7 817.7 960 692.7 960 560c0-60.5-11.9-119.1-35.2-174.4zM482 232c0-4.4 3.6-8 8-8h44c4.4 0 8 3.6 8 8v80c0 4.4-3.6 8-8 8h-44c-4.4 0-8-3.6-8-8v-80zM270 582c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8v-44c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v44zm90.7-204.5l-31.1 31.1a8.03 8.03 0 01-11.3 0L261.7 352a8.03 8.03 0 010-11.3l31.1-31.1c3.1-3.1 8.2-3.1 11.3 0l56.6 56.6c3.1 3.1 3.1 8.2 0 11.3zm291.1 83.6l-84.5 84.5c5 18.7.2 39.4-14.5 54.1a55.95 55.95 0 01-79.2 0 55.95 55.95 0 010-79.2 55.87 55.87 0 0154.1-14.5l84.5-84.5c3.1-3.1 8.2-3.1 11.3 0l28.3 28.3c3.1 3.1 3.1 8.1 0 11.3zm43-52.4l-31.1-31.1a8.03 8.03 0 010-11.3l56.6-56.6c3.1-3.1 8.2-3.1 11.3 0l31.1 31.1c3.1 3.1 3.1 8.2 0 11.3l-56.6 56.6a8.03 8.03 0 01-11.3 0zM846 582c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8v-44c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v44z"></path></svg></span>
                        </div>
                        <div
                            style="margin: 10px 0px; display: flex; justify-content: space-between; align-items: center; padding: 7px 15px; border: 1px solid rgb(54, 124, 76); border-radius: 5px;">
                        <span class="ant-typography"
                              style="flex: 1 1 0%; font-size: 16px; color: rgb(54, 124, 76); font-weight: 500;">Nhận tiền chỉ sau 30 phút làm hồ sơ</span><span
                                role="img" aria-label="sliders" class="anticon anticon-sliders"
                                style="font-size: 20px; color: rgb(54, 124, 76);"><svg viewBox="64 64 896 896"
                                                                                       focusable="false" data-icon="sliders"
                                                                                       width="1em" height="1em"
                                                                                       fill="currentColor"
                                                                                       aria-hidden="true"><path
                                        d="M904 296h-66v-96c0-4.4-3.6-8-8-8h-52c-4.4 0-8 3.6-8 8v96h-66c-4.4 0-8 3.6-8 8v416c0 4.4 3.6 8 8 8h66v96c0 4.4 3.6 8 8 8h52c4.4 0 8-3.6 8-8v-96h66c4.4 0 8-3.6 8-8V304c0-4.4-3.6-8-8-8zm-584-72h-66v-56c0-4.4-3.6-8-8-8h-52c-4.4 0-8 3.6-8 8v56h-66c-4.4 0-8 3.6-8 8v560c0 4.4 3.6 8 8 8h66v56c0 4.4 3.6 8 8 8h52c4.4 0 8-3.6 8-8v-56h66c4.4 0 8-3.6 8-8V232c0-4.4-3.6-8-8-8zm292 180h-66V232c0-4.4-3.6-8-8-8h-52c-4.4 0-8 3.6-8 8v172h-66c-4.4 0-8 3.6-8 8v200c0 4.4 3.6 8 8 8h66v172c0 4.4 3.6 8 8 8h52c4.4 0 8-3.6 8-8V620h66c4.4 0 8-3.6 8-8V412c0-4.4-3.6-8-8-8z"></path></svg></span>
                        </div>
                    </div>
                    <div style="position: relative; padding-left: 20px; padding-right: 20px;">
                        <div><span id="carousel_prev_9z3w7k2k6bb" style="display: none;"></span>
                            <div id="carousel_cyak2kiu46i" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-1719px, 0px, 0px); transition: all 0.25s ease 0s; width: 4011px;">
                                        <div class="owl-item cloned" style="width: 573px;"><img
                                                src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                        <div class="owl-item cloned" style="width: 573px;"><img
                                                src="/static/media/hung-thinh-corp-3f3e485397a45223.jpg"></div>
                                        <div class="owl-item" style="width: 573px;"><img
                                                src="/static/media/Signing-MOU-with-Hung-Thinh-Corp-PIC-1.jpg"></div>
                                        <div class="owl-item active" style="width: 573px;"><img
                                                src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                        <div class="owl-item" style="width: 573px;"><img
                                                src="/static/media/hung-thinh-corp-3f3e485397a45223.jpg"></div>
                                        <div class="owl-item cloned" style="width: 573px;"><img
                                                src="/static/media/Signing-MOU-with-Hung-Thinh-Corp-PIC-1.jpg"></div>
                                        <div class="owl-item cloned" style="width: 573px;"><img
                                                src="/static/media/455261a118476d8c4fb69bfe158a67291673516820.png"></div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <div class="owl-prev">next</div>
                                    <div class="owl-next">prev</div>
                                </div>
                            </div>
                            <span id="carousel_next_mv94bemo4k"></span></div>
                    </div>
                    <div style="display: flex; justify-content: center; min-height: 100px; margin-top: 20px;">
                        <div class="ant-image"
                             style="width: 100%; max-width: calc(100% - 40px); height: auto; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                            <img src="/static/media/1668013577_banner1.png" class="ant-image-img"
                                 style="border-radius: 10px; margin-bottom: 20px;"></div>
                    </div>
                    <div
                        style="padding-top: 20px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <div class="ant-image"><img src="/static/media/tick.e14cb23e178b8d3acd8f.png" class="ant-image-img"
                                                    style="max-width: 100px;"></div>
                        <div style="padding: 0px 10px;"><span class="ant-typography"
                                                              style="display: flex; justify-content: center; align-items: center; color: rgb(85, 85, 85); text-align: center;">
                    CÔNG TY TÀI CHÍNH HƯNG THỊNH
                </span></div>
                    </div>
                </div>
            </div> <!---->
            <div style="position: fixed; z-index: 1000; bottom: 0px; min-width: 100%;">
                <div
                    style="display: flex; justify-content: space-between; align-items: center; min-height: 60px; padding: 0px 30px 10px; border-top: 1px solid rgb(238, 238, 238); background: rgb(255, 255, 255);">
                    <div
                        style="min-height: 45px; display: flex; justify-content: center; align-items: center; flex-direction: column; background: rgb(255, 255, 255);">
                    <span role="img" aria-label="home" class="anticon anticon-home"
                          style="font-size: 20px; color: rgb(54, 124, 76);"><svg viewBox="64 64 896 896"
                                                                                 focusable="false" data-icon="home"
                                                                                 width="1em" height="1em"
                                                                                 fill="currentColor" aria-hidden="true"><path
                                d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 00-44.4 0L77.5 505a63.9 63.9 0 00-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0018.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path></svg></span>
                        <span class="ant-typography" style="font-size: 12px; color: rgb(54, 124, 76);">Trang chủ</span>
                    </div>
                    <div
                        style="min-height: 60px; border-radius: 25px; min-width: 60px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <span role="img" aria-label="credit-card" class="anticon anticon-credit-card"
                          style="font-size: 20px; color: rgb(102, 102, 102);"><svg viewBox="64 64 896 896"
                                                                                   focusable="false"
                                                                                   data-icon="credit-card" width="1em"
                                                                                   height="1em" fill="currentColor"
                                                                                   aria-hidden="true"><path
                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-792 72h752v120H136V232zm752 560H136V440h752v352zm-237-64h165c4.4 0 8-3.6 8-8v-72c0-4.4-3.6-8-8-8H651c-4.4 0-8 3.6-8 8v72c0 4.4 3.6 8 8 8z"></path></svg></span>
                        <span class="ant-typography" style="font-size: 12px; color: rgb(102, 102, 102);">Ví tiền</span>
                    </div>
                    <div
                        style="min-height: 45px; display: flex; justify-content: center; align-items: center; flex-direction: column; background: rgb(255, 255, 255);">
                        <i aria-label="icon: customer-service" class="anticon anticon-customer-service"
                           style="font-size: 20px;">
                            <svg viewBox="64 64 896 896" data-icon="customer-service" width="1em" height="1em"
                                 fill="currentColor" aria-hidden="true" focusable="false" class="">
                                <path
                                    d="M512 128c-212.1 0-384 171.9-384 384v360c0 13.3 10.7 24 24 24h184c35.3 0 64-28.7 64-64V624c0-35.3-28.7-64-64-64H200v-48c0-172.3 139.7-312 312-312s312 139.7 312 312v48H688c-35.3 0-64 28.7-64 64v208c0 35.3 28.7 64 64 64h184c13.3 0 24-10.7 24-24V512c0-212.1-171.9-384-384-384zM328 632v192H200V632h128zm496 192H696V632h128v192z"></path>
                            </svg>
                        </i> <span class="ant-typography" style="font-size: 12px;">CSKH</span></div>
                    <div
                        style="min-height: 45px; display: flex; justify-content: center; align-items: center; flex-direction: column; background: rgb(255, 255, 255);">
                    <span role="img" aria-label="user" class="anticon anticon-user"
                          style="font-size: 20px; color: rgb(102, 102, 102);"><svg viewBox="64 64 896 896"
                                                                                   focusable="false" data-icon="user"
                                                                                   width="1em" height="1em"
                                                                                   fill="currentColor"
                                                                                   aria-hidden="true"><path
                                d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></span>
                        <span class="ant-typography" style="font-size: 12px; color: rgb(102, 102, 102);">Hồ sơ</span></div>
                </div>
            </div>
        </div>
    </div>
@endsection
