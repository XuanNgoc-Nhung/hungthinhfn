@extends("user.layouts.app")
@section("title")
    <title>Đăng ký</title><style type="text/css">
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
            <div class="fadein" style="height: calc(100vh - 80px); background-color: rgb(245, 245, 245);">
                <div style="padding: 10px 15px; opacity: 1; transform: none;">
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 5px; border-bottom: 1px solid rgb(238, 238, 238);">
                        <div style="padding: 0px;">
                            <a href="{{url()->previous()}}"><span role="img" aria-label="left" class="anticon anticon-left"
                                             style="font-size: 25px; color: rgb(85, 85, 85);"><svg
                                        viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em" height="1em"
                                        fill="currentColor" aria-hidden="true"><path
                                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span></a>
                        </div>
                        <span class="ant-typography" style="font-weight: 700; font-size: 20px;"><strong>Thông tin Ngân hàng trả nợ</strong></span>
                        <div></div>
                    </div>
                    <div style="">
                        <div class="bank-container">
                            <div role="separator"
                                 class="ant-divider ant-divider-horizontal ant-divider-with-text ant-divider-with-text-center">
                                <span class="ant-divider-inner-text"><span class="ant-typography"
                                                                           style="font-size: 16px;">Tài khoản thanh toán cho công ty</span></span>
                            </div>
                            <div>
                                <div class="field-item"><span class="ant-typography container-title"><span>Tên ngân hàng :</span><span
                                            role="img" aria-label="copy" tabindex="-1" class="anticon anticon-copy"><svg
                                                viewBox="64 64 896 896" focusable="false" data-icon="copy" width="1em"
                                                height="1em" fill="currentColor" aria-hidden="true"><path
                                                    d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM382 896h-.2L232 746.2v-.2h150v150z"></path></svg></span></span><span
                                        class="ant-typography field-content">{{$config->ngan_hang}}</span></div>
                                <div class="field-item"><span class="ant-typography container-title"><span>STK ngân hàng :</span><span
                                            role="img" aria-label="copy" tabindex="-1" class="anticon anticon-copy"><svg
                                                viewBox="64 64 896 896" focusable="false" data-icon="copy" width="1em"
                                                height="1em" fill="currentColor" aria-hidden="true"><path
                                                    d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM382 896h-.2L232 746.2v-.2h150v150z"></path></svg></span></span><span
                                        class="ant-typography field-content">{{$config->so_tai_khoan}}</span></div>
                                <div class="field-item"><span class="ant-typography container-title"><span>Chủ tài khoản :</span><span
                                            role="img" aria-label="copy" tabindex="-1" class="anticon anticon-copy"><svg
                                                viewBox="64 64 896 896" focusable="false" data-icon="copy" width="1em"
                                                height="1em" fill="currentColor" aria-hidden="true"><path
                                                    d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM382 896h-.2L232 746.2v-.2h150v150z"></path></svg></span></span><span
                                        class="ant-typography field-content">{{$config->chu_tai_khoan}}</span></div> <!---->
                                <!----></div>
                        </div>
                    </div>
                </div>
            </div>
            @include('user.layouts.chan-trang')
        </div>
    </div>
@endsection
