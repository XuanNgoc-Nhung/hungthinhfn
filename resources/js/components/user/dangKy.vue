<template>

    <div class="form-body">
        <input autocomplete="off" placeholder="Nhập số điện thoại..." type="text"
               v-model="thongTinDangKy.phone"
                                  value="" class="ant-input ant-input-lg input"
                                  style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
        <input autocomplete="off" type="password" placeholder="Nhập mật khẩu..."
               v-model="thongTinDangKy.pass"
               class="ant-input ant-input-lg input"
               style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
        <input autocomplete="off" type="password" placeholder="Nhắc lại mật khẩu.."
               class="ant-input ant-input-lg input"
               v-model="thongTinDangKy.rePass"
               style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
        <button type="button" class="ant-btn ant-btn-default ant-btn-lg login-btn"
                @click.prevent="dangKy()"
                style="width: calc(100% - 80px) !important; border-radius: 50px !important; background: red !important; opacity: 1 !important;">
            <span class="ant-typography" style="color: rgb(255, 255, 255); font-weight: 400;">Đăng ký</span>
        </button>
        <div><br><span class="ant-typography"
                       style="padding: 3px 0px; color: rgb(51, 51, 51); font-weight: 500;">Độ dài mật khẩu từ 6 - 20 ký tự</span><br><span
            class="ant-typography"
            style="padding: 3px 0px; color: rgb(51, 51, 51); font-weight: 500;">Ví dụ mật khẩu: 123456</span>
        </div>
        <div class="form-footer"><a class="ant-typography" href="/dang-nhap"
                                    style="font-size: 15px; color: rgb(88, 88, 90); font-weight: 500;">Đã
            có tài
            khoản ? 👉 Đăng nhập ngay</a></div>
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
            thongTinDangKy:{
                phone:'',
                pass:'',
                rePass:''
            }
        }
    },
    mounted() {
        console.log('Mounted Configs...');
    },
    methods: {
        dangKy(){
            console.log('Đăng ký:')
            if(this.thongTinDangKy.phone==''||this.thongTinDangKy.pass==''||this.thongTinDangKy.rePass==''){
                this.thongBao('error','Không được để trống thông tin')
                return;
            }
            if(this.thongTinDangKy.pass!=this.thongTinDangKy.rePass){
                this.thongBao('error','Mật khẩu không trùng nhau. Hãy xác nhận lại mật khẩu của bạn');
                return
            }
            console.log(this.thongTinDangKy)
            let url = '/dang-ky-tai-khoan'
            rest_api.post(url, this.thongTinDangKy).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        window.open("/","_self")
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
