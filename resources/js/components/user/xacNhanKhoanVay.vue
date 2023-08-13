<template>
    <div style="padding-bottom: 80px;">
        <div class="fadein">
            <div style="opacity: 1; transform: none;">
                <div class="header-content">
                    <div style="padding: 0px;">
                        <a href="/hoan-tat-xac-minh"><span role="img" aria-label="left"
                                         class="anticon anticon-left left-icon"><svg viewBox="64 64 896 896"
                                                                                     focusable="false"
                                                                                     data-icon="left"
                                                                                     width="1em"
                                                                                     height="1em"
                                                                                     fill="currentColor"
                                                                                     aria-hidden="true"><path
                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>
                        </a>
                    </div>
                    <span class="ant-typography" style="font-weight: 700; font-size: 20px; color: white;"><strong>Xác nhận vay</strong></span>
                    <div></div>
                </div>
                <div class="checking-container" style="padding-bottom: 120px;"><span class="ant-typography"
                                                                                     style="font-size: 15px; text-align: center;"><strong>Xác nhận khoản vay</strong></span><br><br><span
                    class="ant-typography" style="font-size: 17px;">Khoản tiền vay : <span
                    class="ant-typography"><strong>{{thongTinCaNhan.so_tien_vay?thongTinCaNhan.so_tien_vay.toLocaleString():0}}</strong></span> VND</span><span class="ant-typography"
                                                                                               style="font-size: 17px;">Thời hạn thanh toán : <span
                    class="ant-typography"><strong>{{thongTinCaNhan.thoi_han?thongTinCaNhan.thoi_han:0}} tháng</strong></span></span>
                    <button type="button" class="ant-btn ant-btn-round ant-btn-default"
                            @click.prevent="hienThiHopDong()"
                            style="background: rgb(255, 115, 35); margin: 10px;"><span class="ant-typography"
                                                                                       style="color: rgb(255, 255, 255);"><strong>Xem hợp đồng</strong></span>
                    </button>
                    <br>
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <span class="ant-typography" style="font-size: 12px;">Kí vào khung bên dưới </span>
                            <a href="/vay-thanh-cong"><button type="button" class="ant-btn ant-btn-default" style="background: rgb(54, 124, 76);">
                                <span class="ant-typography" style="color: rgb(255, 255, 255);">Xác nhận chữ ký</span>
                            </button></a>
                        </div>
                        <div class="signing" style="width: 100%; height: 200px;">
                            <canvas id="canvas419" data-uid="canvas419" class="canvas" width="996" height="300"
                                    style="touch-action: none;"></canvas>
                        </div>
                        <div class="refresh"><span class="ant-typography"
                                                   style="text-decoration: underline;">Làm mới </span></div>
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

        <el-dialog
            :visible.sync="hien_thi_hop_dong"
            width="80%"
            top="5vh"
            :before-close="handleClose">
            <div>
                <div class="ant-modal-body">
                    <div><h5 style="text-align: center;"><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></h5><h5
                        style="text-align: center; "><b>ĐỘC LẬP - TỰ DO - HANH PHÚC</b></h5><h5
                        style="text-align: center; "><b>ĐƠN VAY VỐN KIÊM HỢP ĐỒNG</b></h5><h5>Bên A (Bên cho vay) :
                        CÔNG TY CỔ PHẦN ĐẦU TƯ TÀI CHÍNH HƯNG THỊNH<br></h5>
                        <p>Mã số hợp đồng:&nbsp;<span id="codeContractSetting"
                                                      style="color:red">{{ 1000000000 + thongTinCaNhan.id }}</span>
                        </p>
                        <p>Địa chỉ :&nbsp;Nhà G32B Làng quốc tế Thăng Long, Phường Dịch Vọng, Quận Cầu Giấy, Thành
                            phố Hà Nội, Việt Nam</p>
                        <p>Mã số doanh nghiệp : 0102383351</p>
                        <p>Người đại diện pháp luật : ÔNG (BÀ) ĐÀO&nbsp;XUÂN&nbsp;THIỀNG</p>
                        <p>Chức vụ : Thành Viên Hội Đồng Quản Trị Kiêm giám Đốc</p>
                        <p>Hai bên thống nhất việc bên A cho bên B vay tiền từ nguồn vốn của bên A theo các điều
                            kiện dưới đây.</p>
                        <p>ĐIỀU : THÔNG TIN CƠ BẢN VỀ KHÁCH HÀNG</p>
                        <p>1.1 Họ Và Tên :&nbsp;<span id="nameSetting"
                                                      style="color:red">{{ thongTinCaNhan.ho_ten }}</span>&nbsp;&nbsp;Mã
                            số hợp đồng:&nbsp;<span id="codeContract1Setting"
                                                    style="color:red">{{ 1000000000 + thongTinCaNhan.id }}</span>
                        </p>
                        <p>Số CMND / CCCD :&nbsp;<span id="cccdSetting"
                                                       style="color:red">{{ thongTinCaNhan.cmnd }}</span></p>
                        <p>Số điện thoại :&nbsp;<span id="usernameSetting"
                                                      style="color:red">{{
                                thongTinCaNhan.thong_tin_tai_khoan ? thongTinCaNhan.thong_tin_tai_khoan.phone : ''
                            }}</span>
                        </p>
                        <p>Ngày vay :&nbsp;<span id="createdSetting"
                                                 style="color:red">{{ thongTinCaNhan.created_at }}</span></p>
                        <p>Số tiền vay : <span id="moneySetting"
                                               style="color:red">{{
                                thongTinCaNhan.so_tien_vay ? thongTinCaNhan.so_tien_vay.toLocaleString() : 0
                            }} VNĐ</span>
                        </p>
                        <p>Kỳ hạn vay : <span id="monthSetting"
                                              style="color:red">{{ thongTinCaNhan.thoi_han_vay }}</span> tháng</p>
                        <p>1.2 TIỀN VAY&nbsp;<span id="money1Setting"
                                                   style="color:red">{{
                                thongTinCaNhan.so_tien_vay ? thongTinCaNhan.so_tien_vay.toLocaleString() : 0
                            }}</span>
                        </p>
                        <p>- Chỉ tính số tiền bên A cho bên B vay</p>
                        <p>1.3 TIỀN LÃI &nbsp;<span id="interestRateSetting"
                                                    style="color:red">{{ thongTinCaNhan.lai_suat }}%</span></p>
                        <p>- Chỉ tính khoản lãi liên quan đến số tiền gốc bao gồm cả số tiền lãi trong thời hạn vay
                            thông thường và nợ quá hạn.</p>
                        <p>1.4 QUÁ HẠN</p>
                        <p>- Quá hạn sẽ phát sinh lãi quá hạn và các khoản chi phí khác.</p>
                        <p>- Chỉ tính việc bên B hoàn trả tiền gốc và lãi của khoản vay và thanh toán phí tín dụng
                            duyệt nhanh, phí quản lý tài khoản.</p>
                        <p style="text-align: center; "><img style="max-width:100%;"
                                                             src="https://hungthinhfn.com/static/media/photo_2023-06-25_06-51-41-removebg-preview.png"><br>
                        </p>
                        <p><br></p>
                        <p><br></p></div>
                </div>
            </div>
            <span slot="footer" class="dialog-footer">
    <el-button size="mini" type="primary" @click="hien_thi_hop_dong = false">OK</el-button>
  </span>
        </el-dialog>
    </div>
</template>
<script>
import rest_api from "../../api/rest_api";
import Vue from 'vue';
import ElementUI from 'element-ui';
import {
    Icon
} from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);
Vue.use(Icon);
export default {
    components: {},
    data() {
        return {
            thongTinCaNhan: {},
            hien_thi_hop_dong: false,
        }
    },
    mounted() {
        console.log('Mounted xác nhận khoản vay...');
        this.layThongTinCaNhan();
    },
    methods: {
        layThongTinCaNhan() {
            console.log('Lấy thông tin cá nhân')
            this.thongTinCaNhan = {};
            rest_api.post('/lay-thong-tin-ca-nhan', {}).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        this.thongTinCaNhan = response.data.data;
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    console.log(this.thongTinCaNhan)
                }
            ).catch((e) => {
            })
        },
        hienThiHopDong(){
            this.hien_thi_hop_dong = true;
        },
        handleClose() {
            this.hien_thi_hop_dong = false;
        },
        thongBao(typeNoty, msgNoty) {
            let msg = "";
            let cl = "";
            if (msgNoty) {
                msg = msgNoty;
            }
            let type = "success";
            if (typeNoty) {
                type = typeNoty
            }
            if (type == "success") {
                cl = "dts-noty-success"
            }
            if (type == "warning") {
                cl = "dts-noty-warning"
            }
            if (type == "error") {
                cl = "dts-noty-error"
            }
            if (type == "info") {
                cl = "dts-noty-info"
            }
            this.$message({
                customClass: cl,
                showClose: true,
                message: msg,
                type: type,
                duration: 3000
            });
        },
    }
}

</script>
