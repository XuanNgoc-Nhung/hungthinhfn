@extends("user.layouts.app")
@section("title")
    <title>Đăng ký</title>
@endsection
@section("content")
    <div id="app">
        <div style="padding-bottom: 80px;">
            <div class="fadein">
                <div style="opacity: 1; transform: none;">
                    <div class="header"><span class="ant-typography header-text">Hồ sơ</span></div>
                    <div>
                        <div class="avatar"><span class="ant-avatar ant-avatar-circle ant-avatar-image"
                                                  style="width: 120px; height: 120px; line-height: 120px; font-size: 18px;">

                            @if($profile->anh_chan_dung)
                                    <img src="{{$profile->anh_chan_dung}}">
                                @else
                                    <img src="https://tcinvest.tcbs.com.vn/assets/images/default-avatar.svg">
                                @endif
                            </span>
                            <span class="ant-typography"
                                  style="font-size: 23px; color: rgb(18, 18, 18);"><strong>{{$profile->ho_ten}}</strong></span>
                            <span
                                class="ant-typography"
                                style="font-size: 18px; color: rgb(102, 102, 102); font-weight: 500;">{{Auth::user()->phone}}</span>
                        </div> <!---->
                        @if($profile->anh_chan_dung==null)
                            <div class="alert-container">
                                <div><span class="ant-typography" style="font-size: 17px; color: rgb(18, 18, 18);"><strong>Xác thực tài khoản</strong></span>
                                    <div
                                        style="border-bottom: 1px solid rgba(0, 106, 176, 0.3); height: 0.1px; width: 100%;"></div>
                                    <div
                                        style="display: flex; justify-content: space-between; align-items: center; padding: 30px 10px;">
                                        <div
                                            style="flex: 1 1 0%; min-width: 30%; display: flex; justify-content: center; align-items: center;">
                                        <span role="img" aria-label="alert" class="anticon anticon-alert"
                                              style="font-size: 45px; color: rgb(54, 124, 76);"><svg
                                                viewBox="64 64 896 896" focusable="false" data-icon="alert" width="1em"
                                                height="1em" fill="currentColor" aria-hidden="true"><path
                                                    d="M512 244c176.18 0 319 142.82 319 319v233a32 32 0 01-32 32H225a32 32 0 01-32-32V563c0-176.18 142.82-319 319-319zM484 68h56a8 8 0 018 8v96a8 8 0 01-8 8h-56a8 8 0 01-8-8V76a8 8 0 018-8zM177.25 191.66a8 8 0 0111.32 0l67.88 67.88a8 8 0 010 11.31l-39.6 39.6a8 8 0 01-11.31 0l-67.88-67.88a8 8 0 010-11.31l39.6-39.6zm669.6 0l39.6 39.6a8 8 0 010 11.3l-67.88 67.9a8 8 0 01-11.32 0l-39.6-39.6a8 8 0 010-11.32l67.89-67.88a8 8 0 0111.31 0zM192 892h640a32 32 0 0132 32v24a8 8 0 01-8 8H168a8 8 0 01-8-8v-24a32 32 0 0132-32zm148-317v253h64V575h-64z"></path></svg></span>
                                        </div>
                                        <div><span class="ant-typography"
                                                   style="font-size: 16px; font-weight: 400; color: rgb(18, 18, 18);">Bổ sung CMND/CCCD và chân dung để hoàn tất định danh</span>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; justify-content: flex-end; align-items: center; padding: 0px 10px;">
                                        <div>
                                            <a href="/xac-minh">
                                                <span class="ant-typography"
                                                      style="text-align: right; font-weight: 700; color: rgb(54, 124, 76); font-size: 17px;"><strong>Xác thực ngay</strong></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div style="padding: 20px;">

                            @if(Auth::user()->role==1 )
                                <div class="tab">
                                    <a href="{{route('admin.home')}}">
                                <span role="img" aria-label="user" class="anticon anticon-user"
                                      style="color: rgb(255, 255, 255); font-size: 25px; margin-right: 20px;">
                                    <svg
                                        viewBox="64 64 896 896" focusable="false" data-icon="user" width="1em"
                                        height="1em" fill="currentColor" aria-hidden="true"><path
                                            d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></span>
                                        <span class="ant-typography tab-text" style="color: rgb(255, 255, 255);">Trang quản trị</span>
                                    </a>
                                </div>
                            @endif
                            <div class="tab">
                                <a href="{{route('user.bankInfo')}}">
                                    <span role="img" aria-label="dollar-circle"
                                          class="anticon anticon-dollar-circle"
                                          style="color: rgb(255, 255, 255); font-size: 25px; margin-right: 20px;"><svg
                                            viewBox="64 64 896 896" focusable="false" data-icon="bank" width="1em"
                                            height="1em" fill="currentColor" aria-hidden="true"><path
                                                d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 00-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM512 196.7l271.1 197.2H240.9L512 196.7zM264 462h117v374H264V462zm189 0h117v374H453V462zm307 374H642V462h118v374z"></path></svg></span>
                                    <span class="ant-typography tab-text"
                                          style="color: rgb(255, 255, 255); font-size: 19px !important;">Tài khoản thanh toán cho công ty</span>
                                </a>
                            </div>
                            <div class="tab">
                                <a href="{{route('user.hopDongVay')}}">
                                <span role="img" aria-label="dollar-circle"
                                      class="anticon anticon-dollar-circle"
                                      style="color: rgb(255, 255, 255); font-size: 25px; margin-right: 20px;"><svg
                                        viewBox="64 64 896 896" focusable="false" data-icon="dollar-circle" width="1em"
                                        height="1em" fill="currentColor" aria-hidden="true"><path
                                            d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372zm47.7-395.2l-25.4-5.9V348.6c38 5.2 61.5 29 65.5 58.2.5 4 3.9 6.9 7.9 6.9h44.9c4.7 0 8.4-4.1 8-8.8-6.1-62.3-57.4-102.3-125.9-109.2V263c0-4.4-3.6-8-8-8h-28.1c-4.4 0-8 3.6-8 8v33c-70.8 6.9-126.2 46-126.2 119 0 67.6 49.8 100.2 102.1 112.7l24.7 6.3v142.7c-44.2-5.9-69-29.5-74.1-61.3-.6-3.8-4-6.6-7.9-6.6H363c-4.7 0-8.4 4-8 8.7 4.5 55 46.2 105.6 135.2 112.1V761c0 4.4 3.6 8 8 8h28.4c4.4 0 8-3.6 8-8.1l-.2-31.7c78.3-6.9 134.3-48.8 134.3-124-.1-69.4-44.2-100.4-109-116.4zm-68.6-16.2c-5.6-1.6-10.3-3.1-15-5-33.8-12.2-49.5-31.9-49.5-57.3 0-36.3 27.5-57 64.5-61.7v124zM534.3 677V543.3c3.1.9 5.9 1.6 8.8 2.2 47.3 14.4 63.2 34.4 63.2 65.1 0 39.1-29.4 62.6-72 66.4z"></path></svg></span>
                                    <span class="ant-typography tab-text"
                                          style="color: rgb(255, 255, 255);">Hợp đồng vay</span>
                                </a>
                            </div>
                            <div class="tab">
                                <a href="{{route('user.userInfo')}}">
                                <span role="img" aria-label="user" class="anticon anticon-user"
                                      style="color: rgb(255, 255, 255); font-size: 25px; margin-right: 20px;"><svg
                                        viewBox="64 64 896 896" focusable="false" data-icon="user" width="1em"
                                        height="1em" fill="currentColor" aria-hidden="true"><path
                                            d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></span>
                                    <span class="ant-typography tab-text" style="color: rgb(255, 255, 255);">Thông tin cá nhân</span>
                                </a>
                            </div>
                            <div class="tab"><span role="img" aria-label="customer-service"
                                                   class="anticon anticon-customer-service"
                                                   style="color: rgb(255, 255, 255); font-size: 25px; margin-right: 20px;"><svg
                                        viewBox="64 64 896 896" focusable="false" data-icon="customer-service"
                                        width="1em" height="1em" fill="currentColor" aria-hidden="true"><path
                                            d="M512 128c-212.1 0-384 171.9-384 384v360c0 13.3 10.7 24 24 24h184c35.3 0 64-28.7 64-64V624c0-35.3-28.7-64-64-64H200v-48c0-172.3 139.7-312 312-312s312 139.7 312 312v48H688c-35.3 0-64 28.7-64 64v208c0 35.3 28.7 64 64 64h184c13.3 0 24-10.7 24-24V512c0-212.1-171.9-384-384-384z"></path></svg></span>
                                <span class="ant-typography tab-text" style="color: rgb(255, 255, 255);">Liên hệ tư vấn - hỗ trợ</span>
                            </div>
                            <div class="log-out">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <button type="button" class="ant-btn ant-btn-default log-out-btn"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        style="display: flex; justify-content: center; align-items: center;"><span
                                        role="img" aria-label="logout" class="anticon anticon-logout"
                                        style="font-size: 25px; color: rgb(255, 255, 255);"><svg viewBox="64 64 896 896"
                                                                                                 focusable="false"
                                                                                                 data-icon="logout"
                                                                                                 width="1em"
                                                                                                 height="1em"
                                                                                                 fill="currentColor"
                                                                                                 aria-hidden="true"><path
                                                d="M868 732h-70.3c-4.8 0-9.3 2.1-12.3 5.8-7 8.5-14.5 16.7-22.4 24.5a353.84 353.84 0 01-112.7 75.9A352.8 352.8 0 01512.4 866c-47.9 0-94.3-9.4-137.9-27.8a353.84 353.84 0 01-112.7-75.9 353.28 353.28 0 01-76-112.5C167.3 606.2 158 559.9 158 512s9.4-94.2 27.8-137.8c17.8-42.1 43.4-80 76-112.5s70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8 47.9 0 94.3 9.3 137.9 27.8 42.2 17.8 80.1 43.4 112.7 75.9 7.9 7.9 15.3 16.1 22.4 24.5 3 3.7 7.6 5.8 12.3 5.8H868c6.3 0 10.2-7 6.7-12.3C798 160.5 663.8 81.6 511.3 82 271.7 82.6 79.6 277.1 82 516.4 84.4 751.9 276.2 942 512.4 942c152.1 0 285.7-78.8 362.3-197.7 3.4-5.3-.4-12.3-6.7-12.3zm88.9-226.3L815 393.7c-5.3-4.2-13-.4-13 6.3v76H488c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h314v76c0 6.7 7.8 10.5 13 6.3l141.9-112a8 8 0 000-12.6z"></path></svg></span>
                                    <span>Đăng xuất</span></button>
                            </div>
                        </div>
                        <div
                            style="padding-top: 20px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                            <div class="ant-image"><img src="/static/media/tick.e14cb23e178b8d3acd8f.png"
                                                        class="ant-image-img" style="max-width: 100px;"></div>
                            <div style="padding: 0px 10px;"><span class="ant-typography"
                                                                  style="display: flex; justify-content: center; align-items: center; color: rgb(85, 85, 85); text-align: center;">
                    CÔNG TY TÀI CHÍNH TÍN VIỆT
                </span></div>
                        </div>
                    </div>
                </div>
            </div>
            @include('user.layouts.chan-trang')
        </div>
    </div>
@endsection
