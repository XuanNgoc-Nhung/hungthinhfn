<template>
    <el-row :gutter="24" style="margin-top:30px"
            v-loading="loading">
<!--        <el-col :span="4">-->
<!--            <label>Đầu số</label>-->
<!--            <el-input-->
<!--                type="text"-->
<!--                placeholder="Nhập"-->
<!--                v-model="thongTinTao.sdt"-->
<!--                maxlength="4"-->
<!--                show-word-limit-->
<!--            ></el-input>-->
<!--        </el-col>-->
        <el-col :span="4">
            <label>Mật khẩu</label>
            <el-input
                type="text"
                placeholder="Nhập"
                v-model="thongTinTao.matKhau"
                maxlength="10"
                show-word-limit
            ></el-input>
        </el-col>
        <el-col :span="4">
            <label>Số lượng</label>
            <el-input
                type="number"
                placeholder="Nhập"
                v-model="thongTinTao.soLuong"
                maxlength="6"
                show-word-limit
            ></el-input>
        </el-col>
        <el-col :span="4">
            <label style="color: transparent">Tạo</label>
            <el-button @click.prevent="taoSoDienThoai()" type="primary" style="display: block">Tạo số điện thoại
            </el-button>
        </el-col>
        <el-col :span="24" style="margin-top:30px">
            <span>Kết quả</span>
            <el-input
                type="textarea"
                :autosize="{ minRows: 10, maxRows: 20}"
                placeholder="Kết quả"
                v-model="ketQuaTxt">
            </el-input>
        </el-col>
        <el-col :span="24" v-if="false" style="margin-top:15px">
            <span>Danh sách kết quả</span>
            <el-table
                :data="tableData"
                border
                style="width: 100%">
                <el-table-column
                    align="center"
                    header-align="center"
                    label="STT"
                    type="index"
                    width="50">
                </el-table-column>
                <el-table-column
                    prop="soDienThoai"
                    align="center"
                    header-align="center"
                    label="Số điện thoại">
                </el-table-column>
                <el-table-column
                    prop="matKhau"
                    align="left"
                    header-align="center"
                    label="Mật khẩu">
                </el-table-column>
            </el-table>
        </el-col>
    </el-row>
</template>

<script>
import ElementUI from 'element-ui';
import {
    Icon
} from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/vi'

Vue.use(ElementUI, {locale})
export default {
    data() {
        return {
            loading: false,
            thongTinTao: {
                sdt: '',
                matKhau: '',
                soLuong: 10
            },
            danh_sach_dau_so: ['032', '033', '034', '035', '036', '037', '038', '039', '096', '097', '098', '086', '083', '084', '085', '081', '082', '088', '091', '094', '070', '079', '077', '076', '078', '090', '093', '089', '056', '058', '092'],
            tableData: [],
            ketQuaTxt:''
        }
    },
    methods: {
        taoSoDienThoai() {
            console.log('taoSoDienThoai')
            this.loading = true;
            console.log(this.thongTinTao)
            if (!this.thongTinTao.soLuong || this.thongTinTao.soLuong < 1) {
                this.thongBao('error', 'Vui lòng nhập số lượng số điện thoại muốn tạo')
                return;
            }
            let arr = [];
            this.ketQuaTxt = '';
            let textKq = ''
            for (let i = 0; i < this.thongTinTao.soLuong; i++) {
                let indexRandom = Math.floor(Math.random() * this.danh_sach_dau_so.length);
                let dauSoNgauNhien = this.danh_sach_dau_so[indexRandom];
                let obj = {
                    soDienThoai:dauSoNgauNhien + this.generateRandomNumber(),
                    matKhau: this.generateRandomPassword(10)
                }
                arr.push(obj)
                let kq = obj.soDienThoai +':'+obj.matKhau
                if(i<=this.thongTinTao.soLuong){
                    kq = kq+'\n'
                }
                textKq += kq

            }
            this.ketQuaTxt = textKq;
            this.tableData = JSON.parse(JSON.stringify(arr))
            this.thongBao('success','Cảm ơn bạn đã sử dụng dịch vụ. Trong trường hợp cần hỗ trợ, vui lòng liên hệ 0332882442')
            setTimeout(() => {
                this.loading = false
            }, 500)
        },

        generateRandomPassword(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let password = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                password += characters.charAt(randomIndex);
            }
            if(this.thongTinTao.matKhau){
                password = this.thongTinTao.matKhau
            }
            return password
        },
        generateRandomNumber() {
            const min = 1000000; // Giá trị nhỏ nhất có 7 chữ số
            const max = 9999999; // Giá trị lớn nhất có 7 chữ số
            let randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
            return randomNumber
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
                duration: 4000
            });
        },
    }
}
</script>
