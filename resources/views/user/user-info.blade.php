@extends("user.layouts.app")
@section("title")
    <title>Đăng ký</title>
    <style type="text/css">
        .bank-container {
            background-color: #fff;
            border-radius: 5px;
            margin-top: 30px;
            padding: 20px 10px 10px;
            width: "100%";
        }

        .container-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 15px;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .field-content {
            font-size: 16px;
            font-weight: 600;
        }

        .container-title .anticon-copy {
            color: #b1b1b1;
            font-size: 20px;
            margin-top: 10px;
        }

        .field-item {
            border-bottom: 1px dashed #008445;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 10px 0 2px;
        }
    </style>
@endsection
@section("content")
    <div id="app">
        <div style="padding-bottom: 80px;">
            <div class="fadein">
                <div style="padding: 10px 15px; opacity: 1; transform: none;">
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 5px; border-bottom: 1px solid rgb(238, 238, 238);">
                        <div style="padding: 0px;">
                            <a href="{{url()->previous()}}">

                            <span role="img" aria-label="left" class="anticon anticon-left"
                                  style="font-size: 25px; color: rgb(85, 85, 85);"><svg
                                    viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em" height="1em"
                                    fill="currentColor" aria-hidden="true"><path
                                        d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>
                            </a>
                        </div>
                        <span class="ant-typography" style="font-weight: 700; font-size: 20px;"><strong>Thông tin cá nhân</strong></span>
                        <div></div>
                    </div>
                    <div
                        style="padding: 10px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <span class="ant-avatar ant-avatar-circle ant-avatar-image"
                              style="width: 100px; height: 100px; line-height: 100px; font-size: 18px;">
                            @if($profile->anh_chan_dung)
                                <img src="{{$profile->anh_chan_dung}}">
                            @else
                                <img src="https://tcinvest.tcbs.com.vn/assets/images/default-avatar.svg">
                            @endif
                        </span> <span
                            class="ant-typography" style="font-size: 17px; font-weight: 700;">{{Auth::user()->phone }}</span>
                        <div role="separator"
                             class="ant-divider ant-divider-horizontal ant-divider-with-text ant-divider-with-text-left">
                            <span class="ant-divider-inner-text">Thông tin </span></div>
                        <div
                            style="display: flex; justify-content: flex-start; align-items: center; flex-direction: column; width: 100%;">
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Họ tên : </span><span
                                    class="ant-typography" style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->ho_ten}} </span>
                            </div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Địa chỉ : </span><span
                                    class="ant-typography" style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->dia_chi}} </span>
                            </div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Số CMND/CCCD : </span><span
                                    class="ant-typography"
                                    style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->cmnd}} </span></div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Giới tính : </span>
                                <!----> <span class="ant-typography"
                                              style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->gioi_tinh}} </span>
                                <!----></div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Ngày sinh : </span><span
                                    class="ant-typography" style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->ngay_sinh}}</span>
                            </div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Nghề nghiệp : </span><span
                                    class="ant-typography"
                                    style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->nghe_nghiep}} </span></div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Thu nhập : </span>
                                <!----> <span class="ant-typography"
                                              style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->thu_nhap}}</span>
                                <!----> <!----></div>
                            <div
                                style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                                <span class="ant-typography"
                                      style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Mục đích khoản vay : </span><span
                                    class="ant-typography"
                                    style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->muc_dich_vay}}</span></div>
                        </div>
                        <div
                            style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                            <span class="ant-typography"
                                  style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">SĐT người thân : </span><span
                                class="ant-typography"
                                style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->sdt_nguoi_than}} </span></div>
                        <div
                            style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                            <span class="ant-typography"
                                  style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Mối quan hệ với người thân : </span><span
                                class="ant-typography"
                                style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->moi_quan_he}} </span></div>
                        <div role="separator"
                             class="ant-divider ant-divider-horizontal ant-divider-with-text ant-divider-with-text-left">
                            <span class="ant-divider-inner-text">Tài khoản ngân hàng</span></div>
                        <div
                            style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                            <span class="ant-typography"
                                  style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Tên ngân hàng : </span><span
                                class="ant-typography"
                                style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->ngan_hang}} </span></div>
                        <div
                            style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                            <span class="ant-typography"
                                  style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 0 0 50%;">Số TK ngân hàng : </span><span
                                class="ant-typography" style="flex: 0 0 40%; font-size: 16px; font-weight: 500;">**********</span>
                            <span role="img" aria-label="eye" tabindex="-1" class="anticon anticon-eye eye-icon"><svg
                                    viewBox="64 64 896 896" focusable="false" data-icon="eye" width="1em" height="1em"
                                    fill="currentColor" aria-hidden="true"><path
                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z"></path></svg></span>
                        </div>
                        <div
                            style="width: 100%; display: flex; justify-content: flex-start; align-items: center; padding: 5px 0px;">
                            <span class="ant-typography"
                                  style="padding-right: 10px; font-size: 14px; font-weight: 500; flex: 2 1 0%;">Tên thụ hưởng : </span><span
                                class="ant-typography"
                                style="flex: 2 1 0%; font-size: 16px; font-weight: 500;">{{$profile->chu_tai_khoan}}</span></div>
                    </div>
                </div>
            </div> <!----> <!----></div>
    </div>
@endsection
