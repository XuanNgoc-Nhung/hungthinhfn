<template>
    <div style="padding-bottom: 80px;">
        <div class="fadein">
            <div style="opacity: 1; transform: none;">
                <div class="header-container">
                    <a href="/xac-minh-thong-tin-ca-nhan">
                        <span role="img" aria-label="left" tabindex="-1"
                              class="anticon anticon-left arrow-icon"><svg viewBox="64 64 896 896"
                                                                           focusable="false"
                                                                           data-icon="left"
                                                                           width="1em"
                                                                           height="1em"
                                                                           fill="currentColor"
                                                                           aria-hidden="true"><path
                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>

                    </a>
                    <span class="ant-typography header-title">Xác minh</span>
                    <div></div>
                </div> <!----> <!---->
                <div class="bank-form-container" style="opacity: 1; transform: none;"><span class="ant-typography"
                                                                                            style="font-size: 17px;"><strong>Thông tin ngân hàng thụ hưởng</strong></span>
                    <div class="image"
                         style="display: flex; justify-content: space-between; min-height: 200px; width: 85vw; border-radius: 10px; padding: 5px; flex-direction: column; background-image: url(&quot;/static/media/card.d49cd7cf12be322a95cb.png&quot;); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                        <div v-if="thongTinNganHang.logo!=''" class="ant-image" style="width: 80px;">
                            <img :src="thongTinNganHang.logo" class="ant-image-img">
                        </div>
                        <span v-if="thongTinNganHang.logo==''" class="ant-typography"
                              style="font-size: 20px; color: rgb(255, 255, 255); padding: 0px 5px;">Chọn ngân hàng</span>
                        <div><span
                            class="ant-typography hidden-information"><strong> {{ thongTinNganHang.soTaiKhoanChe }}</strong></span><br><span
                            class="ant-typography hidden-information"><strong> {{ thongTinNganHang.chuTaiKhoan ? thongTinNganHang.chuTaiKhoan : '*********' }}</strong></span>
                        </div>
                    </div>
                    <br> <br>
                    <div><span class="ipForm ant-input-affix-wrapper ant-input-affix-wrapper-lg"
                               style="padding-left: 15px !important; width: 100%; margin-bottom: 20px;"><span
                        class="ant-input-prefix"><i aria-label="icon: global" class="iconForm anticon anticon-global"><svg
                        viewBox="64 64 896 896" data-icon="global" width="1em" height="1em" fill="currentColor"
                        aria-hidden="true" focusable="false" class=""><path
                        d="M854.4 800.9c.2-.3.5-.6.7-.9C920.6 722.1 960 621.7 960 512s-39.4-210.1-104.8-288c-.2-.3-.5-.5-.7-.8-1.1-1.3-2.1-2.5-3.2-3.7-.4-.5-.8-.9-1.2-1.4l-4.1-4.7-.1-.1c-1.5-1.7-3.1-3.4-4.6-5.1l-.1-.1c-3.2-3.4-6.4-6.8-9.7-10.1l-.1-.1-4.8-4.8-.3-.3c-1.5-1.5-3-2.9-4.5-4.3-.5-.5-1-1-1.6-1.5-1-1-2-1.9-3-2.8-.3-.3-.7-.6-1-1C736.4 109.2 629.5 64 512 64s-224.4 45.2-304.3 119.2c-.3.3-.7.6-1 1-1 .9-2 1.9-3 2.9-.5.5-1 1-1.6 1.5-1.5 1.4-3 2.9-4.5 4.3l-.3.3-4.8 4.8-.1.1c-3.3 3.3-6.5 6.7-9.7 10.1l-.1.1c-1.6 1.7-3.1 3.4-4.6 5.1l-.1.1c-1.4 1.5-2.8 3.1-4.1 4.7-.4.5-.8.9-1.2 1.4-1.1 1.2-2.1 2.5-3.2 3.7-.2.3-.5.5-.7.8C103.4 301.9 64 402.3 64 512s39.4 210.1 104.8 288c.2.3.5.6.7.9l3.1 3.7c.4.5.8.9 1.2 1.4l4.1 4.7c0 .1.1.1.1.2 1.5 1.7 3 3.4 4.6 5l.1.1c3.2 3.4 6.4 6.8 9.6 10.1l.1.1c1.6 1.6 3.1 3.2 4.7 4.7l.3.3c3.3 3.3 6.7 6.5 10.1 9.6 80.1 74 187 119.2 304.5 119.2s224.4-45.2 304.3-119.2a300 300 0 0 0 10-9.6l.3-.3c1.6-1.6 3.2-3.1 4.7-4.7l.1-.1c3.3-3.3 6.5-6.7 9.6-10.1l.1-.1c1.5-1.7 3.1-3.3 4.6-5 0-.1.1-.1.1-.2 1.4-1.5 2.8-3.1 4.1-4.7.4-.5.8-.9 1.2-1.4a99 99 0 0 0 3.3-3.7zm4.1-142.6c-13.8 32.6-32 62.8-54.2 90.2a444.07 444.07 0 0 0-81.5-55.9c11.6-46.9 18.8-98.4 20.7-152.6H887c-3 40.9-12.6 80.6-28.5 118.3zM887 484H743.5c-1.9-54.2-9.1-105.7-20.7-152.6 29.3-15.6 56.6-34.4 81.5-55.9A373.86 373.86 0 0 1 887 484zM658.3 165.5c39.7 16.8 75.8 40 107.6 69.2a394.72 394.72 0 0 1-59.4 41.8c-15.7-45-35.8-84.1-59.2-115.4 3.7 1.4 7.4 2.9 11 4.4zm-90.6 700.6c-9.2 7.2-18.4 12.7-27.7 16.4V697a389.1 389.1 0 0 1 115.7 26.2c-8.3 24.6-17.9 47.3-29 67.8-17.4 32.4-37.8 58.3-59 75.1zm59-633.1c11 20.6 20.7 43.3 29 67.8A389.1 389.1 0 0 1 540 327V141.6c9.2 3.7 18.5 9.1 27.7 16.4 21.2 16.7 41.6 42.6 59 75zM540 640.9V540h147.5c-1.6 44.2-7.1 87.1-16.3 127.8l-.3 1.2A445.02 445.02 0 0 0 540 640.9zm0-156.9V383.1c45.8-2.8 89.8-12.5 130.9-28.1l.3 1.2c9.2 40.7 14.7 83.5 16.3 127.8H540zm-56 56v100.9c-45.8 2.8-89.8 12.5-130.9 28.1l-.3-1.2c-9.2-40.7-14.7-83.5-16.3-127.8H484zm-147.5-56c1.6-44.2 7.1-87.1 16.3-127.8l.3-1.2c41.1 15.6 85 25.3 130.9 28.1V484H336.5zM484 697v185.4c-9.2-3.7-18.5-9.1-27.7-16.4-21.2-16.7-41.7-42.7-59.1-75.1-11-20.6-20.7-43.3-29-67.8 37.2-14.6 75.9-23.3 115.8-26.1zm0-370a389.1 389.1 0 0 1-115.7-26.2c8.3-24.6 17.9-47.3 29-67.8 17.4-32.4 37.8-58.4 59.1-75.1 9.2-7.2 18.4-12.7 27.7-16.4V327zM365.7 165.5c3.7-1.5 7.3-3 11-4.4-23.4 31.3-43.5 70.4-59.2 115.4-21-12-40.9-26-59.4-41.8 31.8-29.2 67.9-52.4 107.6-69.2zM165.5 365.7c13.8-32.6 32-62.8 54.2-90.2 24.9 21.5 52.2 40.3 81.5 55.9-11.6 46.9-18.8 98.4-20.7 152.6H137c3-40.9 12.6-80.6 28.5-118.3zM137 540h143.5c1.9 54.2 9.1 105.7 20.7 152.6a444.07 444.07 0 0 0-81.5 55.9A373.86 373.86 0 0 1 137 540zm228.7 318.5c-39.7-16.8-75.8-40-107.6-69.2 18.5-15.8 38.4-29.7 59.4-41.8 15.7 45 35.8 84.1 59.2 115.4-3.7-1.4-7.4-2.9-11-4.4zm292.6 0c-3.7 1.5-7.3 3-11 4.4 23.4-31.3 43.5-70.4 59.2-115.4 21 12 40.9 26 59.4 41.8a373.81 373.81 0 0 1-107.6 69.2z"></path></svg></i></span>
                        <input @input="getSoTaiKhoan()"
                               v-model="thongTinNganHang.soTaiKhoan"
                               placeholder="Số tài khoản" type="text" class="ant-input ant-input-lg"></span> <span
                        class="ipForm ant-input-affix-wrapper ant-input-affix-wrapper-lg"
                        style="padding-left: 15px !important; width: 100%; margin-bottom: 20px;"><span
                        class="ant-input-prefix"><i aria-label="icon: user" class="iconForm anticon anticon-user"><svg
                        viewBox="64 64 896 896" data-icon="user" width="1em" height="1em" fill="currentColor"
                        aria-hidden="true" focusable="false" class=""><path
                        d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></i></span>
                        <input
                            v-model="thongTinNganHang.chuTaiKhoan"
                            placeholder="Tên chủ tài khoản" type="text" class="ant-input ant-input-lg"></span>
                        <div tabindex="0" class="ant-select ant-select-enabled ant-select-allow-clear ant-select-lg"
                             autocomplete="off" style="width: calc(100vw - 40px); margin-bottom: 20px;">
                            <el-select v-model="thongTinNganHang.nganHang" placeholder="Chọn ngân hàng thụ hưởng"
                                       filterable
                                       @change="chonNganHang()"
                                       style="width:100%">
                                <el-option
                                    v-for="item in danh_sach_ngan_hang"
                                    :key="item.name"
                                    :label="item.name"
                                    :value="item.name">
                                    <span style="float: left; color: black;">{{ item.name }}-{{ item.fullName }}</span>
                                    <span style="float: right">
                                        <img :src="item.logo" alt="Ảnh" style="width: 70px">
                                    </span>
                                </el-option>
                            </el-select>
                            <div v-show="false" role="combobox" aria-autocomplete="list" aria-haspopup="true"
                                 aria-controls="9b92cb6a-6e74-4aff-e1fc-8dbb7d36da8e"
                                 class="ant-select-selection ant-select-selection--single">
                                <div class="ant-select-selection__rendered">
                                    <div unselectable="on" class="ant-select-selection__placeholder"
                                         style="display: block; user-select: none;">Chọn ngân hàng thụ hưởng
                                    </div>
                                </div>
                                <span unselectable="on" class="ant-select-arrow" style="user-select: none;"><i
                                    aria-label="icon: down" class="anticon anticon-down ant-select-arrow-icon"><svg
                                    viewBox="64 64 896 896" data-icon="down" width="1em" height="1em"
                                    fill="currentColor" aria-hidden="true" focusable="false" class=""><path
                                    d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></i></span>
                            </div>
                        </div>
                        <div class="send-request-div">
                            <button @click.prevent="guiYeuCau()" type="button" class="ant-btn ant-btn-default confirm-btn"><span
                                class="ant-typography confirm-div-title">Gửi yêu cầu</span></button>
                        </div>
                    </div>
                </div> <!----></div>
        </div> <!----> <!----></div>
</template>

<script>
import rest_api from "../../api/rest_api";
import Vue from 'vue';
import ElementUI from 'element-ui';
import locale from 'element-ui/lib/locale/lang/vi'
import {
    Icon
} from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import xacMinhThongTinCaNhan from "./xacMinhThongTinCaNhan.vue";

Vue.use(ElementUI, {locale});
Vue.use(Icon);
export default {
    components: {},
    data() {
        return {
            thongTinNganHang: {
                nganHang: '',
                soTaiKhoan: '',
                chuTaiKhoan: '',
                soTaiKhoanChe: '•••••••••',
                logo: ''
            },
            danh_sach_ngan_hang: [
                {name: 'ABBank', logo: 'images/banks/ab.png', fullName: ''},
                {name: 'ACB', logo: 'images/banks/acb.png', fullName: ''},
                {name: 'Agribank', logo: 'images/banks/agri.png', fullName: ''},
                {name: 'BacABank', logo: 'images/banks/baca.png', fullName: ''},
                {name: 'Bảo Việt', logo: 'images/banks/baoviet.png', fullName: ''},
                {name: 'BIDV', logo: 'images/banks/bidv.png', fullName: ''},
                {name: 'DongA Bank', logo: 'images/banks/donga.png', fullName: ''},
                {name: 'EximBank', logo: 'images/banks/exim.png', fullName: ''},
                {name: 'GPBank', logo: 'images/banks/gp.png', fullName: ''},
                {name: 'HDBank', logo: 'images/banks/hd.png', fullName: ''},
                {name: 'HSBC', logo: 'images/banks/hsbc.png', fullName: ''},
                {name: 'INDOVINA', logo: 'images/banks/ivb.png', fullName: ''},
                {name: 'LienVietPostBank', logo: 'images/banks/lienviet.png', fullName: ''},
                {name: 'MaritimeBank', logo: 'images/banks/maritime.png', fullName: ''},
                {name: 'MBBank', logo: 'images/banks/mb.png', fullName: ''},
                {name: 'NamA Bank', logo: 'images/banks/nama.png', fullName: ''},
                {name: 'OCB BANK', logo: 'images/banks/ocb.png', fullName: ''},
                {name: 'oceanbank', logo: 'images/banks/ocean.png', fullName: ''},
                {name: 'PG Bank', logo: 'images/banks/pg.png', fullName: ''},
                {name: 'PVcombank', logo: 'images/banks/pvcom.png', fullName: ''},
                {name: 'Sacombank', logo: 'images/banks/sacom.png', fullName: ''},
                {name: 'SaiGonBank', logo: 'images/banks/saigon.png', fullName: ''},
                {name: 'SeaBank', logo: 'images/banks/sea.png', fullName: ''},
                {name: 'SHB', logo: 'images/banks/shb.png', fullName: ''},
                {name: 'Shinhan Bank', logo: 'images/banks/shinhan.png', fullName: ''},
                {name: 'Techcombank', logo: 'images/banks/techcom.png', fullName: ''},
                {name: 'TPBank', logo: 'images/banks/tp.png', fullName: ''},
                {name: 'VIB', logo: 'images/banks/vib.png', fullName: ''},
                {name: 'Viet Bank', logo: 'images/banks/viet.png', fullName: ''},
                {name: 'Viet A', logo: 'images/banks/vieta.png', fullName: ''},
                {name: 'Vietcombank', logo: 'images/banks/vietcom.png', fullName: ''},
                {name: 'VietinBank', logo: 'images/banks/vietin.png', fullName: ''},
                {name: 'VPBank', logo: 'images/banks/vp.png', fullName: ''},
            ]
        }
    },
    mounted() {
        console.log('Mounted xác minh thông tin ngân hàng...');
    },
    methods: {
        guiYeuCau(){
            console.log('guiYeuCau')
            console.log(this.thongTinNganHang)
            if(!this.thongTinNganHang.soTaiKhoan||!this.thongTinNganHang.chuTaiKhoan||!this.thongTinNganHang.nganHang){
                this.thongBao('error','Vui lòng bổ sung thông tin');
                return;
            }
            let params = {
                nganHang: this.thongTinNganHang.nganHang,
                soTaiKhoan: this.thongTinNganHang.soTaiKhoan,
                chuTaiKhoan: this.thongTinNganHang.chuTaiKhoan,

            }
            rest_api.post('/xac-minh-thong-tin-ngan-hang', params).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        window.open("/hoan-tat-xac-minh", "_self")
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    this.loading.status = false;
                }
            ).catch((e) => {
            })
        },
        getSoTaiKhoan() {
            console.log('getSoTaiKhoan')
            let result
            if (this.thongTinNganHang.soTaiKhoan) {
                result = this.thongTinNganHang.soTaiKhoan.slice(0, 3) + '••••••'
            } else {
                result = '•••••••••';
            }
            this.thongTinNganHang.soTaiKhoanChe = result;
        },
        chonNganHang() {
            console.log('Chọn ngân hàng:')
            let bank = this.danh_sach_ngan_hang.find(x => x.name === this.thongTinNganHang.nganHang)
            console.log('bank:')
            console.log(bank)
            if (bank) {
                this.thongTinNganHang.logo = bank.logo
            } else {
                this.thongTinNganHang.logo = ''
            }
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
<style>
.el-input {
    margin-bottom: 20px;
}
</style>
