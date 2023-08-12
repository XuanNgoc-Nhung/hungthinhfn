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
                                        class="ant-typography field-content">VIB ( Ngân hàng quốc tế )</span></div>
                                <div class="field-item"><span class="ant-typography container-title"><span>STK ngân hàng :</span><span
                                            role="img" aria-label="copy" tabindex="-1" class="anticon anticon-copy"><svg
                                                viewBox="64 64 896 896" focusable="false" data-icon="copy" width="1em"
                                                height="1em" fill="currentColor" aria-hidden="true"><path
                                                    d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM382 896h-.2L232 746.2v-.2h150v150z"></path></svg></span></span><span
                                        class="ant-typography field-content">268156789</span></div>
                                <div class="field-item"><span class="ant-typography container-title"><span>Chủ tài khoản :</span><span
                                            role="img" aria-label="copy" tabindex="-1" class="anticon anticon-copy"><svg
                                                viewBox="64 64 896 896" focusable="false" data-icon="copy" width="1em"
                                                height="1em" fill="currentColor" aria-hidden="true"><path
                                                    d="M832 64H296c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h496v688c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V96c0-17.7-14.3-32-32-32zM704 192H192c-17.7 0-32 14.3-32 32v530.7c0 8.5 3.4 16.6 9.4 22.6l173.3 173.3c2.2 2.2 4.7 4 7.4 5.5v1.9h4.2c3.5 1.3 7.2 2 11 2H704c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM382 896h-.2L232 746.2v-.2h150v150z"></path></svg></span></span><span
                                        class="ant-typography field-content">NGUYEN HAN ANH THU</span></div> <!---->
                                <!----></div>
                        </div>
                    </div>
                </div>
            </div> <!---->
            <div style="position: fixed; z-index: 1000; bottom: 0px; min-width: 100%;">
                <div
                    style="display: flex; justify-content: space-between; align-items: center; min-height: 60px; padding: 0px 30px 10px; border-top: 1px solid rgb(238, 238, 238); background: rgb(255, 255, 255);">
                    <div
                        style="min-height: 45px; display: flex; justify-content: center; align-items: center; flex-direction: column; background: rgb(255, 255, 255);">
                        <span role="img" aria-label="home" class="anticon anticon-home"
                              style="font-size: 20px; color: rgb(102, 102, 102);"><svg viewBox="64 64 896 896"
                                                                                       focusable="false"
                                                                                       data-icon="home" width="1em"
                                                                                       height="1em" fill="currentColor"
                                                                                       aria-hidden="true"><path
                                    d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 00-44.4 0L77.5 505a63.9 63.9 0 00-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0018.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path></svg></span>
                        <span class="ant-typography"
                              style="font-size: 12px; color: rgb(102, 102, 102);">Trang chủ</span></div>
                    <div
                        style="min-height: 60px; border-radius: 25px; min-width: 60px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <span role="img" aria-label="credit-card" class="anticon anticon-credit-card"
                              style="font-size: 20px; color: rgb(102, 102, 102);"><svg viewBox="64 64 896 896"
                                                                                       focusable="false"
                                                                                       data-icon="credit-card"
                                                                                       width="1em" height="1em"
                                                                                       fill="currentColor"
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
                              style="font-size: 20px; color: rgb(54, 124, 76);"><svg viewBox="64 64 896 896"
                                                                                     focusable="false" data-icon="user"
                                                                                     width="1em" height="1em"
                                                                                     fill="currentColor"
                                                                                     aria-hidden="true"><path
                                    d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></span>
                        <span class="ant-typography" style="font-size: 12px; color: rgb(54, 124, 76);">Hồ sơ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
