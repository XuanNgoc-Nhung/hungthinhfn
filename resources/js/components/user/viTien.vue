<template>
    <div class="fadein">
        <div style="opacity: 1; transform: none;">
            <div class="header-container">
                <div></div>
                <span class="ant-typography"
                      style="font-weight: 700; font-size: 18px; color: rgb(255, 255, 255);"><strong>Ví tiền</strong></span>
                <div></div>
            </div>
            <div style="padding: 10px;">
                <div style="padding: 5px; opacity: 1;">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <div
                            style="border-radius: 5px; width: 100%; height: 200px; display: flex; justify-content: space-between; align-items: center; flex-direction: column; background-image: url(&quot;/static/media/card.d49cd7cf12be322a95cb.png&quot;); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                            <div class="card-head-img">
                                <div></div>
                            </div>
                            <div style="padding: 10px; justify-content: flex-start; min-width: 100%;">
                                <div class="atm-card-information"><span class="ant-typography atm-card-text">{{thongTinCaNhan.so_tai_khoan?thongTinCaNhan.so_tai_khoan.slice(0,2):''}}*******</span>
                                    <span class="ant-typography atm-card-text">{{ thongTinCaNhan.chu_tai_khoan }}</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="check-amount-container">
                        <div><span class="ant-typography"
                                   style="font-size: 15px; color: rgb(51, 51, 51); font-weight: 600;">Số dư ví :</span><br>
                            <div></div>
                        </div>
                        <div style="display: flex; flex-direction: column; align-items: flex-end;"><span
                            class="ant-typography"
                            style="font-size: 17px; color: rgb(206, 79, 83); font-weight: 700;">{{thongTinCaNhan.so_du?thongTinCaNhan.so_du.toLocaleString():0}}  VND </span>
                        </div>
                    </div>
                    <a href="/bien-dong-so-du" style="text-decoration: underline; margin: 5px;">Biến động số dư</a></div>
                <div style="padding: 0px 5px;">
                    <div @click.prevent="rutTien()"  class="item" style="cursor: pointer; background: rgb(54, 124, 76); border-radius: 50px;"><span
                        class="ant-typography"
                        style="flex: 1 1 0%; font-size: 16px; padding-left: 20px; color: rgb(255, 255, 255);"><strong>Rút tiền về tài khoản liên kết</strong></span>
                        <span role="img" aria-label="vertical-align-bottom"
                              class="anticon anticon-vertical-align-bottom"
                              style="color: rgb(255, 255, 255); font-size: 30px;"><svg viewBox="64 64 896 896"
                                                                                       focusable="false"
                                                                                       data-icon="vertical-align-bottom"
                                                                                       width="1em" height="1em"
                                                                                       fill="currentColor"
                                                                                       aria-hidden="true"><path
                            d="M859.9 780H164.1c-4.5 0-8.1 3.6-8.1 8v60c0 4.4 3.6 8 8.1 8h695.8c4.5 0 8.1-3.6 8.1-8v-60c0-4.4-3.6-8-8.1-8zM505.7 669a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V176c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8z"></path></svg></span>
                    </div>
                </div>
                <div class="ant-image"><img src="/static/media/4-buoc-vay-tien-mat-an-toan-nhanh-chong-01.png"
                                            class="ant-image-img" style="padding: 5px; border-radius: 10px;">
                </div>
                <div class="ant-image"><img src="/static/media/wallet.911a2f9edd9a6151a551.jpg"
                                            class="ant-image-img" style="padding: 5px; border-radius: 10px;">
                </div>
            </div>
        </div>
        <div style="position: fixed; z-index: 1000; bottom: 0px; min-width: 100%;">
            <div
                style="display: flex; justify-content: space-between; align-items: center; min-height: 60px; padding: 0px 30px 10px; border-top: 1px solid rgb(238, 238, 238); background: rgb(255, 255, 255);">
                <div
                    style="min-height: 60px; border-radius: 25px; min-width: 60px; display: flex; justify-content: center; align-items: center; flex-direction: column; transform: none;">
                            <span role="img" aria-label="credit-card" class="anticon anticon-credit-card"
                                  style="font-size: 20px; color: rgb(1, 150, 245);"><svg viewBox="64 64 896 896"
                                                                                         focusable="false"
                                                                                         data-icon="credit-card"
                                                                                         width="1em" height="1em"
                                                                                         fill="currentColor"
                                                                                         aria-hidden="true"><path
                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-792 72h752v120H136V232zm752 560H136V440h752v352zm-237-64h165c4.4 0 8-3.6 8-8v-72c0-4.4-3.6-8-8-8H651c-4.4 0-8 3.6-8 8v72c0 4.4 3.6 8 8 8z"></path></svg></span>
                    <span class="ant-typography"
                          style="font-size: 12px; color: rgb(1, 150, 245);">Ví tiền</span></div>
                <div
                    style="min-height: 45px; display: flex; justify-content: center; align-items: center; flex-direction: column; background: rgb(255, 255, 255); transform: none;">
                            <span role="img" aria-label="home" class="anticon anticon-home"
                                  style="font-size: 20px; color: rgb(102, 102, 102);"><svg viewBox="64 64 896 896"
                                                                                           focusable="false"
                                                                                           data-icon="home" width="1em"
                                                                                           height="1em"
                                                                                           fill="currentColor"
                                                                                           aria-hidden="true"><path
                                d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 00-44.4 0L77.5 505a63.9 63.9 0 00-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0018.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path></svg></span>
                    <span class="ant-typography"
                          style="font-size: 12px; color: rgb(102, 102, 102);">Trang chủ</span></div>
                <div
                    style="min-height: 45px; display: flex; justify-content: center; align-items: center; flex-direction: column; background: rgb(255, 255, 255); transform: none;">
                            <span role="img" aria-label="user" class="anticon anticon-user"
                                  style="font-size: 20px; color: rgb(102, 102, 102);"><svg viewBox="64 64 896 896"
                                                                                           focusable="false"
                                                                                           data-icon="user" width="1em"
                                                                                           height="1em"
                                                                                           fill="currentColor"
                                                                                           aria-hidden="true"><path
                                d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg></span>
                    <span class="ant-typography"
                          style="font-size: 12px; color: rgb(102, 102, 102);">Hồ sơ</span></div>
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
    components: {
    },
    data() {
        return {
            thongTinCaNhan:{}
        }
    },
    mounted() {
        console.log('Mounted ví...');
        this.layThongTinCaNhan();
    },
    methods: {
        layThongTinCaNhan(){
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
                        // window.open("/", "_self")
                    }
                    console.log(this.thongTinCaNhan)
                }
            ).catch((e) => {
            })
        },
        rutTien(){
            if(this.thongTinCaNhan.so_du==0){
                this.thongBao('error','Số dư không đủ.')
                return;
            }else{
                this.tienHanhRutTien();
            }
        },
        tienHanhRutTien(){
            console.log('Lấy thông tin cá nhân')
            this.thongTinCaNhan = {};
            rest_api.post('/rut-tien-ca-nhan', {}).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        this.thongBao('success', response.data.rd)
                        this.layThongTinCaNhan()
                    } else {
                        this.thongBao('error', response.data.rd)
                        // window.open("/", "_self")
                    }
                    console.log(this.thongTinCaNhan)
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
