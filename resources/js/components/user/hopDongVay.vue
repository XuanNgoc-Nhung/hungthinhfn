<template>

    <div style="padding-bottom: 80px;">
        <div class="fadein">
            <div style="padding: 10px 15px; opacity: 1; transform: none;">
                <div
                    style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 5px; border-bottom: 1px solid rgb(238, 238, 238);">
                    <div style="padding: 0px;">
                        <a href="/ho-so">
                        <span role="img" aria-label="left" class="anticon anticon-left"
                              style="font-size: 25px; color: rgb(85, 85, 85);"><svg
                            viewBox="64 64 896 896" focusable="false" data-icon="left" width="1em" height="1em"
                            fill="currentColor" aria-hidden="true"><path
                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path></svg></span>

                        </a>
                    </div>
                    <span class="ant-typography"
                          style="font-weight: 700; font-size: 20px;"><strong>Khoản vay</strong></span>
                    <div></div>
                </div>
                <div
                    style="padding: 10px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div role="separator"
                         class="ant-divider ant-divider-horizontal ant-divider-with-text ant-divider-with-text-center">
                        <span class="ant-divider-inner-text"><span class="ant-typography" style="font-size: 16px;">Thông tin hợp đồng của bạn</span></span>
                    </div>
                    <div style="width: 100%; padding: 20px 10px 10px;">
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <span class="ant-typography" style="font-size: 17px;">Mã hợp đồng :</span><span
                            class="ant-typography"
                            style="flex: 1 1 0%; margin-left: 20px; font-size: 17px; font-weight: 500;">{{
                                1000000000 + thongTinCaNhan.id
                            }}</span>
                        </div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <span class="ant-typography" style="font-size: 17px;">Số tiền vay :</span><span
                            class="ant-typography"
                            style="flex: 1 1 0%; margin-left: 20px; font-size: 17px; font-weight: 700;">{{
                                thongTinCaNhan.so_tien_vay ? thongTinCaNhan.so_tien_vay.toLocaleString() : '0'
                            }}VND</span>
                        </div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <span class="ant-typography" style="font-size: 17px;">Hạn thanh toán :</span><span
                            class="ant-typography"
                            style="flex: 1 1 0%; margin-left: 20px; font-size: 17px; font-weight: 500;">{{
                                thongTinCaNhan.thoi_han_vay
                            }} tháng</span>
                        </div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                            <span class="ant-typography" style="font-size: 17px;">Khởi tạo lúc :</span><span
                            class="ant-typography"
                            style="flex: 1 1 0%; margin-left: 20px; font-size: 17px; font-weight: 500;">{{
                                thongTinCaNhan.created_at
                            }}</span>
                        </div>
                        <a @click="hien_thi_chi_tiet_tra_no = true" class="ant-typography"><strong>Chi tiết trả nợ</strong></a> <br> <br>
                        <button @click.prevent="hienThiHopDong" type="button"
                                class="ant-btn ant-btn-round ant-btn-default"
                                style="background: rgb(255, 115, 35); display: flex; justify-content: center; margin: 0px auto; align-items: center;">
                                <span class="ant-typography"
                                      style="color: rgb(255, 255, 255);"><strong>Xem hợp đồng</strong></span></button>
                    </div>
                </div>
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

        <el-dialog
            title="Chi tiết trả nợ"
            :visible.sync="hien_thi_chi_tiet_tra_no"
            width="80%"
            :before-close="handleClose">
            <div>
                <div style="max-height: 350px; overflow-y: scroll;">
                    <table style="table-layout: auto;">
                        <colgroup></colgroup>
                        <thead class="ant-table-thead">
                        <tr>
                            <th class="ant-table-cell">Kỳ</th>
                            <th class="ant-table-cell">Số tiền</th>
                            <th class="ant-table-cell">Ngày đóng</th>
                        </tr>
                        </thead>
                        <tbody class="ant-table-tbody">
                        <tr v-for="(item,i) in 12" class="ant-table-row ant-table-row-level-0">
                            <td class="ant-table-cell"><span class="ant-typography">Kì thứ {{i+1}}</span></td>
                            <td class="ant-table-cell"><span
                                class="ant-typography"><strong>{{thongTinCaNhan.tra_moi_ky?thongTinCaNhan.tra_moi_ky.toLocaleString():0}}</strong></span></td>
                            <td class="ant-table-cell"><span class="ant-typography"><strong>13 - 9</strong></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <span slot="footer" class="dialog-footer">
    <el-button size="mini" type="primary" @click="hien_thi_chi_tiet_tra_no = false">OK</el-button>
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
            hien_thi_chi_tiet_tra_no: false,
        }
    },
    mounted() {
        console.log('Mounted ví...');
        this.layThongTinCaNhan();
    },
    methods: {
        handleClose() {
            this.hien_thi_hop_dong = false;
            this.hien_thi_chi_tiet_tra_no = false;
        },
        hienThiHopDong() {
            this.hien_thi_hop_dong = true;
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
        rutTien() {
            if (true) {
                this.thongBao('error', 'Số dư không đủ.')
                return;
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

