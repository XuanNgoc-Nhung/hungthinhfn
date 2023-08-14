<template>
    <div style="padding-bottom: 80px;">
        <div class="fadein">
            <div class="container" style="padding: 0px !important;">
                <div class="head"></div>
                <div class="vay-header" style="background: rgb(54, 124, 76);">
                    <div>
                        <a href="/">
                             <span role="img" aria-label="left" class="anticon anticon-left arrow-icon"
                                   style="color: rgb(255, 255, 255);"><svg viewBox="64 64 896 896" focusable="false"
                                                                           data-icon="left" width="1em" height="1em"
                                                                           fill="currentColor" aria-hidden="true"><path
                                 d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>

                        </a>
                    </div>
                    <span class="ant-typography header-text"
                          style="color: rgb(255, 255, 255);">Chọn khoản vay</span>
                    <div></div>
                </div>
                <div class="vay-body">
                    <div class="title-container"><span class="ant-typography title"
                                                       style="color: rgb(255, 255, 255);">Số tiền vay</span></div>
                    <div class="input-container">
                        <el-input @input="tinhTienHangThang" placeholder="Nhập số tiền cần vay" type="number"
                                  :min="20000000" :max="500000000" v-model="thongTinVay.soTien"></el-input>
                    </div>
                    <div class="subtitle"><span class="ant-typography">Từ 20.000.000đ</span><span
                        class="ant-typography">Đến 500.000.000đ</span></div>
                    <div class="month-container" style="padding: 10px;"><span
                        class="ant-typography">Chọn thời hạn vay</span>
                        <div tabindex="0" class="ant-select ant-select-enabled"
                             style="border-radius: 100px; min-width: 150px;">
                            <el-select v-model="thongTinVay.thoiHan" placeholder="Chọn"
                                       @change="tinhTienHangThang">
                                <el-option
                                    v-for="item in danh_sach_thoi_han_vay"
                                    :key="item.value"
                                    :label="item.name"
                                    :value="item.value">
                                </el-option>
                            </el-select>
                        </div>
                    </div>
                </div>
                <div class="form-container">
                    <div class="information-form"><span class="ant-typography form-title"
                                                        style="color: rgb(255, 255, 255); font-weight: bold;">Thông tin khoản vay</span>
                        <div class="information">
                            <div class="details-information"><span class="ant-typography">Số tiền</span><span
                                class="ant-typography">{{ parseInt(thongTinVay.soTien).toLocaleString() }} đ</span>
                            </div>
                            <div class="details-information"><span class="ant-typography">Thời hạn vay</span><span
                                class="ant-typography"> {{ thongTinVay.thoiHan }} tháng</span></div>
                            <div class="details-information"><span class="ant-typography">Ngày vay</span><span
                                class="ant-typography">12/8/2023</span></div>
                            <div class="details-information"><span
                                class="ant-typography">Hình thức thanh toán</span><span class="ant-typography">Trả góp mỗi tháng</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="old-debt-text"><span class="ant-typography"
                                                     style="flex: 2 1 0%; color: rgb(102, 102, 102); font-size: 14px;">Trả nợ kì đầu</span><span
                        class="ant-typography"
                        style="flex: 2 1 0%; color: rgb(62, 62, 62); font-size: 16px;">{{ parseInt(thongTinVay.traKyDau).toLocaleString() }} VND</span>
                    </div>
                    <div class="old-debt-text"><span class="ant-typography"
                                                     style="flex: 2 1 0%; color: rgb(102, 102, 102); font-size: 14px;">Lãi suất hàng tháng</span><span
                        class="ant-typography"
                        style="flex: 2 1 0%; color: rgb(62, 62, 62); font-size: 16px;">{{ (thongTinVay.laiSuat).toFixed(2) }}%</span>
                    </div>
                    <div class="old-debt-text"><a class="ant-typography">Chi tiết trả nợ</a></div>
                </div>
                <div class="btn-container">
                    <button type="button" @click.prevent="dangKyKhoanVay()" class="ant-btn ant-btn-default confirm-btn"><span
                        class="ant-typography btn-title">Xác nhận khoản vay</span></button>
                </div>
            </div>
        </div>
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
            danh_sach_thoi_han_vay: [
                {name: '6 tháng', value: 6},
                {name: '12 tháng', value: 12},
                {name: '24 tháng', value: 24},
                {name: '36 tháng', value: 36},
                {name: '48 tháng', value: 48},
                {name: '60 tháng', value: 60},
            ],
            thongTinVay: {
                traKyDau: 0,
                laiSuat: 0.8,
                thoiHan: 6,
                soTien: 0,
            }
        }
    },
    mounted() {
        console.log('Mounted Configs...');
    },
    methods: {
        dangKyKhoanVay(){
            console.log('dangKyKhoanVay')
            if(!this.thongTinVay.soTien||!this.thongTinVay.thoiHan){
                this.thongBao('error','Vui lòng bổ sung thông tin bắt buộc');
                return;
            }
            let params = {
                soTien: this.thongTinVay.soTien,
                thoiHan:this.thongTinVay.thoiHan,
                laiSuat:this.thongTinVay.laiSuat,
                traMoiKy:this.thongTinVay.traKyDau

            }
            rest_api.post('/dang-ky-so-tien-vay', params).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        window.open("/xac-minh", "_self")
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    this.loading.status = false;
                }
            ).catch((e) => {
            })
        },
        tinhTienHangThang() {
            console.log('tinhTienHangThang:')
            this.thongTinVay.soTien = parseInt(this.thongTinVay.soTien)
            console.log(this.thongTinVay.soTien)
            console.log(this.thongTinVay.thoiHan)
            let moiThang = (parseInt(this.thongTinVay.soTien) / this.thongTinVay.thoiHan);
            console.log('mỗi tháng trả:' + moiThang)
            let tienLai = (moiThang * this.thongTinVay.laiSuat) / 100;
            this.thongTinVay.traKyDau = (parseInt(moiThang + tienLai))
            console.log('Tiền lãi:' + tienLai)
            console.log('Trả mỗi kỳ:' + this.thongTinVay.traKyDau)
        },
        dangKy() {
            console.log('Đăng ký:')
            if (this.thongTinDangKy.phone == '' || this.thongTinDangKy.pass == '' || this.thongTinDangKy.rePass == '') {
                this.thongBao('error', 'Không được để trống thông tin')
                return;
            }
            if (this.thongTinDangKy.pass != this.thongTinDangKy.rePass) {
                this.thongBao('error', 'Mật khẩu không trùng nhau. Hãy xác nhận lại mật khẩu của bạn');
                return
            }
            console.log(this.thongTinDangKy)
            let url = '/dang-ky-tai-khoan'
            rest_api.post(url, this.thongTinDangKy).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        window.open("/", "_self")
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    this.loading.status = false;
                }
            ).catch((e) => {
            })
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
