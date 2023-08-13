<template>
    <div style="padding-bottom: 80px;">
        <div class="fadein">
            <div style="opacity: 1; transform: none;">
                <div class="header-container">
                    <a href="/dang-ky-khoan-vay">
                    <span role="img" aria-label="left" tabindex="-1"
                          class="anticon anticon-left arrow-icon"><svg
                        viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em" height="1em"
                        fill="currentColor" aria-hidden="true"><path
                        d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>

                    </a>
                    <span class="ant-typography header-title">Xác minh</span>
                    <div></div>
                </div>
                <div class="user-img-container" style="opacity: 1; transform: none;"><span class="ant-typography"
                                                                                           style="font-size: 18px; padding: 5px;"><strong>Chụp ảnh định danh KYC</strong></span>
                    <div class="image-container" v-bind:style="{ 'background-image': 'url(' + urlUpload.matTruoc + ')' }"><span role="img"
                                                                                                    aria-label="camera"
                                                                                                    class="anticon anticon-camera"
                                                                                                    style="font-size: 30px; color: rgb(51, 51, 51);">
                        <svg v-show="!urlUpload.matTruoc"
                        viewBox="64 64 896 896" focusable="false" data-icon="camera" width="1em"
                        height="1em" fill="currentColor" aria-hidden="true"><path
                        d="M864 248H728l-32.4-90.8a32.07 32.07 0 00-30.2-21.2H358.6c-13.5 0-25.6 8.5-30.1 21.2L296 248H160c-44.2 0-80 35.8-80 80v456c0 44.2 35.8 80 80 80h704c44.2 0 80-35.8 80-80V328c0-44.2-35.8-80-80-80zm8 536c0 4.4-3.6 8-8 8H160c-4.4 0-8-3.6-8-8V328c0-4.4 3.6-8 8-8h186.7l17.1-47.8 22.9-64.2h250.5l22.9 64.2 17.1 47.8H864c4.4 0 8 3.6 8 8v456zM512 384c-88.4 0-160 71.6-160 160s71.6 160 160 160 160-71.6 160-160-71.6-160-160-160zm0 256c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96z"></path></svg></span>
                        <input type="file" accept="image/*" id="camerafront"
                               ref="uploadShop"
                               @change=" uploadFileMatTruoc" > <span
                            v-show="!urlUpload.matTruoc"
                            class="ant-typography"
                            style="color: rgb(51, 51, 51); font-weight: 700; font-size: 16px;">Mặt trước CMND / CCCD</span>
                    </div>
                    <div class="image-container" v-bind:style="{ 'background-image': 'url(' + urlUpload.matSau + ')' }"><span role="img"
                                                                                                    aria-label="camera"
                                                                                                    class="anticon anticon-camera"
                                                                                                    style="font-size: 30px; color: rgb(51, 51, 51);"><svg

                        v-show="!urlUpload.matSau"
                        viewBox="64 64 896 896" focusable="false" data-icon="camera" width="1em"
                        height="1em" fill="currentColor" aria-hidden="true"><path
                        d="M864 248H728l-32.4-90.8a32.07 32.07 0 00-30.2-21.2H358.6c-13.5 0-25.6 8.5-30.1 21.2L296 248H160c-44.2 0-80 35.8-80 80v456c0 44.2 35.8 80 80 80h704c44.2 0 80-35.8 80-80V328c0-44.2-35.8-80-80-80zm8 536c0 4.4-3.6 8-8 8H160c-4.4 0-8-3.6-8-8V328c0-4.4 3.6-8 8-8h186.7l17.1-47.8 22.9-64.2h250.5l22.9 64.2 17.1 47.8H864c4.4 0 8 3.6 8 8v456zM512 384c-88.4 0-160 71.6-160 160s71.6 160 160 160 160-71.6 160-160-71.6-160-160-160zm0 256c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96z"></path></svg></span>
                        <input type="file" accept="image/*" id="cameraback"
                               @change=" uploadFileMatSau"   > <span
                            v-show="!urlUpload.matSau"
                            class="ant-typography"
                            style="color: rgb(51, 51, 51); font-weight: 700; font-size: 16px;">Mặt sau CMND / CCCD</span>
                    </div>
                    <div class="image-container"  v-bind:style="{ 'background-image': 'url(' + urlUpload.chanDung + ')' }"><span role="img"
                                                                                                    aria-label="camera"
                                                                                                    class="anticon anticon-camera"
                                                                                                    style="font-size: 30px; color: rgb(51, 51, 51);"><svg

                        v-show="!urlUpload.chanDung"
                        viewBox="64 64 896 896" focusable="false" data-icon="camera" width="1em"
                        height="1em" fill="currentColor" aria-hidden="true"><path
                        d="M864 248H728l-32.4-90.8a32.07 32.07 0 00-30.2-21.2H358.6c-13.5 0-25.6 8.5-30.1 21.2L296 248H160c-44.2 0-80 35.8-80 80v456c0 44.2 35.8 80 80 80h704c44.2 0 80-35.8 80-80V328c0-44.2-35.8-80-80-80zm8 536c0 4.4-3.6 8-8 8H160c-4.4 0-8-3.6-8-8V328c0-4.4 3.6-8 8-8h186.7l17.1-47.8 22.9-64.2h250.5l22.9 64.2 17.1 47.8H864c4.4 0 8 3.6 8 8v456zM512 384c-88.4 0-160 71.6-160 160s71.6 160 160 160 160-71.6 160-160-71.6-160-160-160zm0 256c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96z"></path></svg></span>
                        <input type="file" accept="image/*" id="cameraface"
                               @change=" uploadFileChanDung"  > <span

                            v-show="!urlUpload.chanDung"
                            class="ant-typography"
                            style="color: rgb(51, 51, 51); font-weight: 700; font-size: 16px;">Ảnh chân dung</span>
                    </div>
                    <div class="confirm-div" @click.prevent="uploadXacMinh()"><span class="ant-typography"
                                                   style="color: rgb(255, 255, 255); font-weight: 700; font-size: 17px;">Tiếp tục</span>
                    </div>
                </div> <!----> <!----> <!----></div>
        </div> <!----> <!----></div>
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
            danh_sach_thoi_han_vay:[
                {name:'6 tháng',value:6},
                {name:'12 tháng',value:12},
                {name:'24 tháng',value:24},
                {name:'36 tháng',value:36},
                {name:'48 tháng',value:48},
                {name:'60 tháng',value:60},
            ],
            thongTinVay:{
                traKyDau:0,
                laiSuat:0.8,
                thoiHan:6,
                soTien:0,
            },
            listFileUpload:[],
            urlUpload:{
                matTruoc:'',
                matSau:'',
                chanDung:''
            },
            selectedFile:{
                matTruoc:null,
                matSau:null,
                chanDung:null
            }
        }
    },
    mounted() {
        console.log('Mounted Configs...');
    },
    methods: {
        uploadXacMinh(){
            console.log('Upload Xác Minh')
            if(!this.selectedFile.matTruoc||!this.selectedFile.matSau||!this.selectedFile.chanDung){
                this.thongBao('error','Vui lòng bổ sung thông tin.')
                return
            }
            var dataForm = new FormData()
            dataForm.append('matTruoc', this.selectedFile.matTruoc, this.selectedFile.matTruoc.name)
            dataForm.append('matSau', this.selectedFile.matSau, this.selectedFile.matTruoc.matSau)
            dataForm.append('chanDung', this.selectedFile.chanDung, this.selectedFile.matTruoc.chanDung)
            rest_api.post('/xac-minh-hinh-anh', dataForm).then(
                response => {
                    if (response && response.data.rc == 0) {
                        window.open("/xac-minh-thong-tin-ca-nhan", "_self")
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    this.loading.status = false;
                }
            ).catch((e) => {
            })
        },
        uploadFileMatTruoc(e){
            this.selectedFile.matTruoc = e.target.files[0]
            let file = e.target.files[0];
            this.urlUpload.matTruoc = URL.createObjectURL(file);
            console.log(this.urlUpload)
            console.log(this.selectedFile)
        },
        uploadFileMatSau(e){
            this.selectedFile.matSau = e.target.files[0]
            let file = e.target.files[0];
            this.urlUpload.matSau = URL.createObjectURL(file);
            console.log(this.urlUpload)
            console.log(this.selectedFile)
        },
        uploadFileChanDung(e){
            this.selectedFile.chanDung = e.target.files[0]
            let file = e.target.files[0];
            this.urlUpload.chanDung = URL.createObjectURL(file);
            console.log(this.urlUpload)
            console.log(this.selectedFile)
        },
        tinhTienHangThang(){
            console.log('tinhTienHangThang:')
            this.thongTinVay.soTien = parseInt(this.thongTinVay.soTien)
            console.log(this.thongTinVay.soTien)
            console.log(this.thongTinVay.thoiHan)
            let moiThang = (parseInt(this.thongTinVay.soTien)/this.thongTinVay.thoiHan);
            console.log('mỗi tháng trả:' + moiThang)
            let tienLai = (moiThang*this.thongTinVay.laiSuat)/100;
            this.thongTinVay.traKyDau = (parseInt(moiThang+tienLai))
            console.log('Tiền lãi:' + tienLai)
            console.log('Trả mỗi kỳ:' + this.thongTinVay.traKyDau)
        },
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
<style>
input{
    opacity: 0;
    cursor: pointer;
    display: block;
    width: 100%;
    border: 1px solid red;
    height: inherit;
}
</style>
