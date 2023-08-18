<template>
    <div class="fadein">
        <div style="opacity: 1; transform: none;">
            <div class="header-content">
                <div style="padding: 0px;">
                    <a href="/hoan-tat-xac-minh"><span role="img" aria-label="left"
                                                       class="anticon anticon-left left-icon"><svg
                        viewBox="64 64 896 896"
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
                class="ant-typography"><strong>{{
                    thongTinCaNhan.so_tien_vay ? thongTinCaNhan.so_tien_vay.toLocaleString() : 0
                }}</strong></span> VND</span><span
                class="ant-typography"
                style="font-size: 17px;">Thời hạn thanh toán : <span
                class="ant-typography"><strong>{{
                    thongTinCaNhan.thoi_han_vay ? thongTinCaNhan.thoi_han_vay : 0
                }} tháng</strong></span></span>
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
                        <button type="button" @click.prevent="xacNhanChuKy()" class="ant-btn ant-btn-default" style="background: rgb(54, 124, 76);">
                            <span class="ant-typography" style="color: rgb(255, 255, 255);">Xác nhận chữ ký</span>
                        </button>
                    </div>
                    <div class="signing" style="width: 100%; height: 200px;">
                        <canvas ref="signatureCanvas" style="" :width="screenWidth-88" height="192"
                                @touchstart="startDrawing"
                                @touchmove="draw"
                                @touchend="stopDrawing"
                                @touchcancel="stopDrawing"></canvas>
<!--                        <canvas id="canvas419" ref="signatureCanvas" class="canvas" width="996" height="300"-->
<!--                                style="touch-action: none;"></canvas>-->
                    </div>
                    <div @click="clearCanvas()" class="refresh"><span class="ant-typography"
                                               style="text-decoration: underline;">Làm mới </span></div>
                </div>
            </div>
        </div>
        <el-dialog
            :visible.sync="hien_thi_hop_dong"
            width="95%"
            top="5vh"
            :before-close="handleClose">
            <div>
                <div class="ant-modal-body">
                    <div><h5 style="text-align: center;"><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></h5><h5
                        style="text-align: center; "><b>ĐỘC LẬP - TỰ DO - HANH PHÚC</b></h5><h5
                        style="text-align: center; "><b>ĐƠN VAY VỐN KIÊM HỢP ĐỒNG</b></h5><h5>Bên A (Bên cho vay) :
                        CÔNG TY TÀI CHÍNH CỔ PHẦN TÍN VIỆT Tên quốc tế  VIETCREDIT FINANCE JOINT STOCK COMPANY<br></h5>
                        <p>Mã số hợp đồng:&nbsp;<span id="codeContractSetting"
                                                      style="color:red">{{ 'HDVV0' + thongTinCaNhan.id }}</span>
                        </p>
                        <p>Địa chỉ :&nbsp;số 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, TP.HCM</p>
                        <p>Mã số doanh nghiệp : 0102383351</p>
                        <p>Người đại diện pháp luật : ÔNG (BÀ) HỒ MINH TUẤN</p>
                        <p>Chức vụ : Thành Viên Hội Đồng Quản Trị Kiêm giám Đốc</p>
                        <p>Hai bên thống nhất việc bên A cho bên B vay tiền từ nguồn vốn của bên A theo các điều
                            kiện dưới đây.</p>
                        <p>ĐIỀU : THÔNG TIN CƠ BẢN VỀ KHÁCH HÀNG</p>
                        <p>1.1 Họ Và Tên :&nbsp;<span id="nameSetting"
                                                      style="color:red">{{ thongTinCaNhan.ho_ten }}</span>&nbsp;&nbsp;Mã
                            số hợp đồng:&nbsp;<span id="codeContract1Setting"
                                                    style="color:red">{{ 'HDVV0' + thongTinCaNhan.id }}</span>
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
                                                             src="/static/media/anhConDau.jpg"><br>
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
    setup() {
        const windowSize = ref(window.innerWidth)
        onMounted(() => {
            window.addEventListener('resize', () => {windowSize.value = window.innerWidth} )
        })
        onUnmounted(() => {
            window.removeEventListener('resize', () => {windowSize.value = window.innerWidth})
        })
        console.log(windowSize)
        return {
            windowSize
        }
    },
    data() {
        return {
            thongTinCaNhan: {},
            hien_thi_hop_dong: false,
            lastX: 0,
            lastY: 0,
            canvas: null,
            ctx: null,
            isDrawing: true,
            screenWidth:0

        }
    },
    mounted() {

        this.screenWidth = window.innerWidth;
        window.addEventListener('resize', this.updateScreenWidth);
        console.log('Mounted xác nhận khoản vay...');
        this.layThongTinCaNhan();

        // Lấy tham chiếu đến canvas
        this.canvas = this.$refs.signatureCanvas;
        this.ctx = this.canvas.getContext("2d");

        // Biến kiểm tra xem người dùng đang vẽ chữ ký hay không
        this.isDrawing = false;

        // Xác định các biến lưu trữ vị trí chuột trước đó
        this.lastX = 0;
        this.lastY = 0;
        this.ctx.strokeStyle = 'black';
        this.ctx.lineWidth = 2;

        // Lắng nghe sự kiện khi người dùng bắt đầu vẽ chữ ký
        this.canvas.addEventListener("mousedown", this.startDrawing);

        // Lắng nghe sự kiện khi người dùng di chuyển chuột để vẽ chữ ký
        this.canvas.addEventListener("mousemove", this.draw);

        // Lắng nghe sự kiện khi người dùng ngừng vẽ chữ ký
        this.canvas.addEventListener("mouseup", this.stopDrawing);
        this.canvas.addEventListener("mouseout", this.stopDrawing);
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.updateScreenWidth);
    },
    methods: {
        updateScreenWidth(){
            this.screenWidth = window.innerWidth;
        },
        // Bắt đầu vẽ chữ ký
        startDrawing(e) {
            this.isDrawing = true;
            const touch = e.touches[0];
            [this.lastX, this.lastY] = [touch.clientX - this.canvas.offsetLeft, touch.clientY - this.canvas.offsetTop];
        },
        // Vẽ điểm trên canvas
        draw(e) {
            if (!this.isDrawing) return;
            e.preventDefault();
            const touch = e.touches[0];
            this.ctx.beginPath();
            this.ctx.moveTo(this.lastX, this.lastY);
            this.ctx.lineTo(touch.clientX - this.canvas.offsetLeft, touch.clientY - this.canvas.offsetTop);
            this.ctx.stroke();
            [this.lastX, this.lastY] = [touch.clientX - this.canvas.offsetLeft, touch.clientY - this.canvas.offsetTop];
        },
        // Dừng vẽ chữ ký
        stopDrawing() {
            this.isDrawing = false;
        },
        // Xóa chữ ký
        clearCanvas() {
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        },
        getEmptyCanvasData() {
            const emptyCanvas = document.createElement("canvas");
            emptyCanvas.width = this.canvas.width;
            emptyCanvas.height = this.canvas.height;
            return emptyCanvas.toDataURL();
        },
        // Lưu chữ ký
        xacNhanChuKy() {
            console.log('Xác nhận lưu chữ ký:')
            console.log(this.canvas)
            const signatureDataURL = this.canvas.toDataURL();
            console.log(signatureDataURL);
            console.log(signatureDataURL.length);
            console.log('Lưu thông tin chữ ký')
            if (signatureDataURL === this.getEmptyCanvasData()) {
                console.log("Chữ ký trống rỗng");
                this.thongBao('error','Vui lòng bổ sung chữ ký vào khung bên dưới.')
                return
            }
            rest_api.post('/luu-thong-tin-chu-ky', {
                chuKy:signatureDataURL
            }).then(
                response => {
                    console.log('Res đăng ký:')
                    console.log(response)
                    if (response.data.rc == 0) {
                        window.open('/vay-thanh-cong','_self')
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    console.log(this.thongTinCaNhan)
                }
            ).catch((e) => {
            })
        },
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
        hienThiHopDong() {
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
