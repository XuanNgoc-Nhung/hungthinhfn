<template>
    <div class="form-body">
        <input autocomplete="off" placeholder="Nhập số điện thoại..." type="text"
               v-model="thongTinDangNhap.phone"
                                  value="" class="ant-input ant-input-lg input"
                                  style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
        <input autocomplete="off" type="password" v-model="thongTinDangNhap.pass" placeholder="Nhập mật khẩu..."
               class="ant-input ant-input-lg input"
               style="border-radius: 50px !important; height: 46px; line-height: 46px; border-color: rgb(54, 124, 76) !important;">
        <button type="button" @click.prevent="dangNhapTaiKhoan()" class="ant-btn ant-btn-default ant-btn-lg login-btn"
                style="width: calc(100% - 80px) !important; border-radius: 50px !important; background: red !important; opacity: 1 !important;">
            <span class="ant-typography" style="color: rgb(255, 255, 255); font-weight: 400;">Đăng nhập</span>
        </button>
        <div class="form-footer"><a class="ant-typography"
                                    href="/dang-ky"
                                    style="font-size: 15px; color: rgb(88, 88, 90); font-weight: 500;">Chưa
            có tài
            khoản ? 👉 Đăng ký tài khoản mới</a></div>
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
            thongTinDangNhap:{
                phone:'',
                pass:'',
            }
        }
    },
    mounted() {
        console.log('Mounted đăng nhập...');
    },
    methods: {
        dangNhapTaiKhoan(){
            console.log('Đăng ký:')
            if(this.thongTinDangNhap.phone==''||this.thongTinDangNhap.pass==''){
                this.thongBao('error','Không được để trống thông tin')
                return;
            }
            console.log(this.thongTinDangNhap)
            let url = '/dang-nhap-tai-khoan'
            rest_api.post(url, this.thongTinDangNhap).then(
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
