<template>
    <div style="padding-bottom: 80px;">
        <div class="fadein">
            <div style="opacity: 1; transform: none;">
                <div class="header-container">
                    <a href="/xac-minh">
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
                </div> <!---->
                <div class="personal-information-container" style="opacity: 1; transform: none;"><span
                    class="ant-typography"
                    style="font-size: 18px; padding: 10px;"><strong>Thông tin cá nhân</strong></span>
                    <form class="components-input-demo-presuffix ant-form ant-form-horizontal" style="width: 100%;">
                        <el-input placeholder="Họ tên" v-model="thongTinCaNhan.hoTen"></el-input>
                        <el-input placeholder="Số CMND/CCCD" v-model="thongTinCaNhan.cccd"></el-input>
                        <!--                        <el-input placeholder="Giới tính" v-model="thongTinCaNhan.gioiTinh"></el-input>-->
                        <el-select v-model="thongTinCaNhan.gioiTinh" placeholder="Giới tính" style="width: 100%">
                            <el-option
                                v-for="item in danh_sach_gioi_tinh"
                                :key="item.name"
                                :label="item.name"
                                :value="item.name">
                            </el-option>
                        </el-select>
                        <!--                        <el-input placeholder="Ngày sinh" v-model="thongTinCaNhan.ngaySinh"></el-input>-->
                        <el-date-picker
                            v-model="thongTinCaNhan.ngaySinh" style="width: 100%"
                            type="date"
                            format="dd/MM/yyyy"
                            value-format="dd/MM/yyyy"
                            placeholder="Ngày sinh">
                        </el-date-picker>
                        <el-input placeholder="Nghề nghiệp" v-model="thongTinCaNhan.ngheNghiep"></el-input>
                        <!--                        <el-input placeholder="Thu nhập của bạn" v-model="thongTinCaNhan.thuNhap"></el-input>-->
                        <el-select v-model="thongTinCaNhan.thuNhap" placeholder="Chọn thu nhập của bạn"
                                   style="width: 100%">
                            <el-option
                                v-for="item in danh_sach_thu_nhap"
                                :key="item.name"
                                :label="item.name"
                                :value="item.name">
                            </el-option>
                        </el-select>
                        <el-input placeholder="Mục đích vay" v-model="thongTinCaNhan.mucDichVay"></el-input>
                        <el-input placeholder="Địa chỉ" v-model="thongTinCaNhan.diaChi"></el-input>
                        <el-input placeholder="SĐT người thân" v-model="thongTinCaNhan.sdtNguoiThan"></el-input>
                        <el-input placeholder="Mối quan hệ với người thân"
                                  v-model="thongTinCaNhan.mqhNguoiThan"></el-input>
                    </form>
                    <div class="" style="display: flex; justify-content: center; padding-top: 30px">
                        <button @click.prevent="xacMinhThongTinCaNhan()" type="submit"
                                class="ant-btn ant-btn-default confirm-btn"><span
                            class="ant-typography btn-title">Tiếp tục</span></button>
                    </div>
                </div> <!----> <!----></div>
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

Vue.use(ElementUI, {locale});
Vue.use(Icon);
export default {
    components: {},
    data() {
        return {
            danh_sach_thu_nhap: [
                {name: 'Dưới 5tr'},
                {name: 'Từ 5-10tr'},
                {name: 'Từ 10-20tr'},
                {name: 'Trên 20tr'},
            ],
            danh_sach_gioi_tinh: [
                {name: 'Nam'},
                {name: 'Nữ'},
                {name: 'Khác'},
            ],
            thongTinCaNhan: {
                hoTen: '',
                cccd: '',
                gioiTinh: '',
                ngaySinh: '',
                ngheNghiep: '',
                thuNhap: '',
                mucDichVay: '',
                diaChi: '',
                sdtNguoiThan: '',
                mqhNguoiThan: '',
            }

        }
    },
    mounted() {
        console.log('Mounted Configs...');
    },
    methods: {
        xacMinhThongTinCaNhan() {
            console.log('xác minh thông tin:')
            if (!this.thongTinCaNhan.hoTen || !this.thongTinCaNhan.cccd || !this.thongTinCaNhan.gioiTinh || !this.thongTinCaNhan.ngaySinh || !this.thongTinCaNhan.ngheNghiep || !this.thongTinCaNhan.thuNhap || !this.thongTinCaNhan.mucDichVay||!this.thongTinCaNhan.diaChi||!this.thongTinCaNhan.sdtNguoiThan||!this.thongTinCaNhan.mqhNguoiThan) {
                this.thongBao('error','Vui lòng bổ sung thông tin.')
                return;
            }
            console.log(this.thongTinCaNhan)
            rest_api.post('/xac-minh-thong-tin-ca-nhan', this.thongTinCaNhan).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        window.open("/xac-minh-thong-tin-ngan-hang","_self")
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
<style>
.el-input {
    margin-bottom: 20px;
}
</style>
