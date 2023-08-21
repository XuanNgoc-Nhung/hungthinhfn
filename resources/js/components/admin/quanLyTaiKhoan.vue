<template>
    <el-row
        :gutter="24"
        v-loading.fullscreen.lock="loading.status" class="row">
        <!--        <el-col :sm="8" :md="4" style="text-align:center">-->
        <!--            <label style="color: transparent">Tìm kiếm</label>-->
        <!--            <el-button type="success" size="mini" @click.prevent="getData()" class="d-block">Tìm kiếm-->
        <!--            </el-button>-->
        <!--        </el-col>-->
        <el-col :span="24" style="padding-top:10px">
            <div class="card">
                <div class="card-header">
                    <el-row :gutter="24">
                        <el-col :span="12">
                            <h5 class="card-title">Danh sách tài khoản</h5></el-col>

                    </el-row>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table-bordered table hover-table">
                            <thead class="thead-light">
                            <tr>
                                <th>STT</th>
                                <th>Số điện thoại</th>
                                <th>Ngân hàng</th>
                                <th>Số tài khoản</th>
                                <th>Chủ tài khoản</th>
                                <th>Số dư tài khoản</th>
                                <th>Thông báo khi rút tiền</th>
                                <th>Vai trò</th>
                                <th>Trạng thái rút tiền</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody v-if="list_data&&list_data.length">
                            <tr v-for="(item,index) in list_data" :key="index">
                                <td class="text-center">{{ index + 1 }}</td>
                                <td class="text-center">{{ item.phone }}</td>
                                <td class="text-center">{{ item.thong_tin_tai_khoan.ngan_hang }}
                                    <td class="text-center">{{ item.thong_tin_tai_khoan.so_tai_khoan }}
                                        <td class="text-center">{{ item.thong_tin_tai_khoan.chu_tai_khoan }}
                                            <td class="text-center">
                                                {{ parseInt(item.thong_tin_tai_khoan.so_du).toLocaleString() }}
                                                vnđ
                                            </td>
                                            <td class="text-center">{{ item.thong_bao }}</td>
                                            <td class="text-center">{{ item.role == 1 ? 'Admin' : 'Người dùng' }}</td>
                                            <td class="text-center">
                                                <span v-if="item.status==1" style="color: green">Đang hoạt động</span>
                                                <span v-else style="color: red">Đang bảo trì</span>
                                            </td>
                                            <td class="text-center">
                                                <el-button v-if="item.status!=1" @click.prevent="updateStatus(item,1)"
                                                           size="mini"
                                                           type="success">Bật
                                                </el-button>
                                                <el-button v-else @click.prevent="updateStatus(item,0)" size="mini"
                                                           type="danger">
                                                    Chặn rút tiền
                                                </el-button>
                                                <el-button size="mini" type="primary"
                                                           @click.prevent="chinhSuaThongTin(item)">Chỉnh
                                                    sửa
                                                </el-button>
                                            </td>
                            </tr>
                            </tbody>
                            <tbody v-else>
                            <tr>
                                <td colspan="10" class="text-center">
                                    <p>Không có dữ liệu</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <PhanTrang v-show="paging.total>0" :tongbanghi="paging.total"
                                   :batdau="trangbatdau"
                                   @pageChange="layLai($event)">
                        </PhanTrang>
                    </div>
                </div>
            </div>
        </el-col>
        <el-col :span="24">
            <el-dialog
                title="Chỉnh sửa thông tin"
                :visible.sync="show_update"
                top="5vh"
                width="90%"
                :before-close="handleClose">
                <el-row :gutter="24">
                    <el-col :span="6">
                        <label>Tên người dùng</label>
                        <el-input placeholder="Nhập..." v-model="thongTinChinhSua.name" disabled></el-input>
                    </el-col>
                    <el-col :span="6">
                        <label>Ngân hàng</label>
                        <el-input placeholder="Nhập..." v-model="infoUpdate.ngan_hang"
                        ></el-input>
                    </el-col>
                    <el-col :span="6">
                        <label>Số tài khoản</label>
                        <el-input placeholder="Nhập..." v-model="infoUpdate.so_tai_khoan"
                        ></el-input>
                    </el-col>
                    <el-col :span="6">
                        <label>Chủ tài khoản</label>
                        <el-input placeholder="Nhập..." v-model="infoUpdate.chu_tai_khoan"
                        ></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Số dư hiện tại</label>
                        <el-input placeholder="Nhập..." v-model="thongTinChinhSua.thong_tin_tai_khoan.so_du"
                                  disabled></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Số dư mới</label>
                        <el-input placeholder="Nhập" type="number" v-model="infoUpdate.so_du"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Họ tên</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.ho_ten"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Địa chỉ</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.dia_chi"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>CMND/CCCD</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.cmnd"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Giới tính</label>
                        <el-select v-model="infoUpdate.gioi_tinh" placeholder="Giới tính" style="width: 100%">
                            <el-option
                                v-for="item in danh_sach_gioi_tinh"
                                :key="item.name"
                                :label="item.name"
                                :value="item.name">
                            </el-option>
                        </el-select>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Ngày sinh</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.ngay_sinh"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Nghề nghiệp</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.nghe_nghiep"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Thu nhập</label>
                        <el-select v-model="infoUpdate.thu_nhap" placeholder="Chọn thu nhập của bạn"
                                   style="width: 100%">
                            <el-option
                                v-for="item in danh_sach_thu_nhap"
                                :key="item.name"
                                :label="item.name"
                                :value="item.name">
                            </el-option>
                        </el-select>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Mục đích vay</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.muc_dich_vay"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Số điện thoại người thân</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.sdt_nguoi_than"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Mối quan hệ</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.moi_quan_he"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Số tiền vay</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.so_tien_vay"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Thời hạn vay</label>

                        <el-select v-model="infoUpdate.thoi_han_vay" placeholder="Chọn"
                                   style="width: 100%">
                            <el-option
                                v-for="item in danh_sach_thoi_han_vay"
                                :key="item.name"
                                :label="item.name"
                                :value="item.value">
                            </el-option>
                        </el-select>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Số tiền trả mỗi tháng</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="infoUpdate.tra_moi_ky"></el-input>
                    </el-col>
                    <el-col :span="6" style="margin-top:20px">
                        <label>Thông báo khi rút tiền</label>
                        <el-input placeholder="Nhập..." type="text"
                                  v-model="thongTinChinhSua.thong_bao"></el-input>
                    </el-col>
                    <el-col :span="8" style="margin-top: 20px">
                        <label>Ảnh mặt trước CCCD</label>
                        <div class="source d-flex">
                            <ul class="el-upload-list el-upload-list--picture-card " style="display: contents">
                                <template
                                    v-for="(link,i) in anhMatTruocCCCD"
                                >
                                    <li
                                        tabindex="0"
                                        class="el-upload-list__item is-ready"
                                    >
                                        <div class="w-100 h-100">
                                            <img
                                                :src="link.link"
                                                alt=""
                                                class="el-upload-list__item-thumbnail"
                                            >
                                        </div>
                                    </li>
                                </template>
                                <li>
                                    <div class="">
                                        <el-upload
                                            ref="anhMatTruoc"
                                            :show-file-list="false"
                                            :on-change="upLoadAnhMatTruocCCCD"
                                            accept=".jpeg,jfif,.jpg,.png"
                                            action="/"
                                            :auto-upload="false"
                                        >
                                            <div
                                                tabindex="0"
                                                class="el-upload el-upload--picture-card"
                                            >
                                                <i
                                                    class="el-icon-plus"
                                                /></div>
                                        </el-upload>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </el-col>
                    <el-col :span="8" style="margin-top: 20px">
                        <label>Ảnh mặt sau CCCD</label>
                        <div class="source d-flex">
                            <ul class="el-upload-list el-upload-list--picture-card " style="display: contents">
                                <template
                                    v-for="(link,i) in anhMatSauCCCD"
                                >
                                    <li
                                        tabindex="0"
                                        class="el-upload-list__item is-ready"
                                    >
                                        <div class="w-100 h-100">
                                            <img
                                                :src="link.link"
                                                alt=""
                                                class="el-upload-list__item-thumbnail"
                                            >
                                        </div>
                                    </li>
                                </template>
                                <li>
                                    <div class="">
                                        <el-upload
                                            ref="anhMatSau"
                                            :show-file-list="false"
                                            :on-change="upLoadAnhMatSauCCCD"
                                            accept=".jpeg,jfif,.jpg,.png"
                                            action="/"
                                            :auto-upload="false"
                                        >
                                            <div
                                                tabindex="0"
                                                class="el-upload el-upload--picture-card"
                                            >
                                                <i
                                                    class="el-icon-plus"
                                                /></div>
                                        </el-upload>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </el-col>
                    <el-col :span="8" style="margin-top: 20px">
                        <label>Ảnh chân dung cầm CCCD</label>
                        <div class="source d-flex">
                            <ul class="el-upload-list el-upload-list--picture-card " style="display: contents">
                                <template
                                    v-for="(link,i) in anhChanDungCCCD"
                                >
                                    <li
                                        tabindex="0"
                                        class="el-upload-list__item is-ready"
                                    >
                                        <div class="w-100 h-100">
                                            <img
                                                :src="link.link"
                                                alt=""
                                                class="el-upload-list__item-thumbnail"
                                            >
                                        </div>
                                    </li>
                                </template>
                                <li>
                                    <div class="">
                                        <el-upload
                                            ref="anhChanDung"
                                            :show-file-list="false"
                                            :on-change="upLoadAnhChanDungCCCD"
                                            accept=".jpeg,jfif,.jpg,.png"
                                            action="/"
                                            :auto-upload="false"
                                        >
                                            <div
                                                tabindex="0"
                                                class="el-upload el-upload--picture-card"
                                            >
                                                <i
                                                    class="el-icon-plus"
                                                /></div>
                                        </el-upload>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </el-col>
                </el-row>
                <span slot="footer" class="dialog-footer">
                    <el-button size="mini" @click="show_update = false" type="danger">Hủy</el-button>
                    <el-button size="mini" type="primary" @click="xacNhanChinhSua">Chỉnh sửa</el-button>
                </span>
            </el-dialog>
        </el-col>
    </el-row>
</template>
<script>
import rest_api from "../../api/rest_api";
import Vue from 'vue';
import ElementUI from 'element-ui';
import PhanTrang from "../Ui/phanTrang.vue";
import {
    Icon
} from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/vi'

Vue.use(ElementUI, {locale})
Vue.use(Icon);
export default {
    components: {
        PhanTrang
    },
    data() {
        return {
            anhMatTruocCCCD: [],
            anhMatSauCCCD: [],
            anhChanDungCCCD: [],
            list_data: [],
            loading: {
                status: false,
                text: 'Loading...'
            },
            dataForm: {
                matTruoc: null,
                matSau: null,
                chanDung: null
            },
            trangbatdau: false,
            paging: {
                total: 0,
                start: 0,
                limit: 10,
                currentPage: 1
            },
            show_update: false,
            thongTinChinhSua: {
                thong_tin_tai_khoan: {},
            },
            infoUpdate: {},
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
            danh_sach_thoi_han_vay: [
                {name: '6 tháng', value: 6},
                {name: '12 tháng', value: 12},
                {name: '24 tháng', value: 24},
                {name: '36 tháng', value: 36},
                {name: '48 tháng', value: 48},
                {name: '60 tháng', value: 60},
            ],
        }
    },
    mounted() {
        console.log('Mounted Giao dịch admin...');
        this.getData();
    },
    methods: {
        upLoadAnhMatTruocCCCD(file, fileList) {
            console.log('upLoadAnhMatTruocCCCD')
            if (fileList) {
                this.anhMatTruocCCCD = [];
                this.dataForm.matTruoc = [];
                fileList.forEach((item, x) => {
                    const typeImage = /(png|jpg|jfif|jpeg)$/i
                    if (item.raw) {
                        if (typeImage.exec(item.raw.type)) {
                            this.anhMatTruocCCCD.push({
                                type: 1,
                                link: URL.createObjectURL(item.raw)
                            })
                            this.dataForm.matTruoc.push(item.raw)
                        }
                    } else {
                        this.thongBao('error', 'Vui lòng chọn đúng định dạng hình ảnh')
                    }
                })
                this.$refs.anhMatTruoc.clearFiles()
                this.$refs.anhMatTruoc.value = null
            }
        },
        upLoadAnhMatSauCCCD(file, fileList) {
            console.log('upLoadAnhMatSauCCCD')
            if (fileList) {
                this.anhMatSauCCCD = [];
                this.dataForm.matSau = [];
                fileList.forEach((item, x) => {
                    const typeImage = /(png|jpg|jfif|jpeg)$/i
                    if (item.raw) {
                        if (typeImage.exec(item.raw.type)) {
                            this.anhMatSauCCCD.push({
                                type: 1,
                                link: URL.createObjectURL(item.raw)
                            })
                            this.dataForm.matSau.push(item.raw)
                        }
                    } else {
                        this.thongBao('error', 'Vui lòng chọn đúng định dạng hình ảnh')
                    }
                })
                this.$refs.anhMatSau.clearFiles()
                this.$refs.anhMatSau.value = null
            }
        },
        upLoadAnhChanDungCCCD(file, fileList) {
            console.log('upLoadAnhChanDungCCCD')
            if (fileList) {
                this.anhChanDungCCCD = [];
                this.dataForm.chanDung = [];
                fileList.forEach((item, x) => {
                    const typeImage = /(png|jpg|jfif|jpeg)$/i
                    if (item.raw) {
                        if (typeImage.exec(item.raw.type)) {
                            this.anhChanDungCCCD.push({
                                type: 1,
                                link: URL.createObjectURL(item.raw)
                            })
                            this.dataForm.chanDung.push(item.raw)
                        }
                    } else {
                        this.thongBao('error', 'Vui lòng chọn đúng định dạng hình ảnh')
                    }
                })
                this.$refs.anhChanDung.clearFiles()
                this.$refs.anhChanDung.value = null
            }
        },
        xacNhanChinhSua() {
            console.log('xacNhanChinhSua')
            console.log(this.thongTinChinhSua)
            this.$confirm('Xác nhận cập nhật thông tin ?', 'Thông báo', {
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy',
            })
                .then(_ => {
                    console.log('Tiến hành chỉnh sửa')
                    var url = '/admin/cap-nhat-thong-tin-nguoi-dung'
                    var dataForm = new FormData()
                    if (this.dataForm.matTruoc && this.dataForm.matTruoc.length) {
                        Array
                            .from(Array(this.dataForm.matTruoc.length).keys())
                            .map(x => {
                                dataForm.append('anh_mat_truoc', this.dataForm.matTruoc[x], this.dataForm.matTruoc[x].name)
                            })
                    }
                    console.log('1')
                    if (this.dataForm.matSau && this.dataForm.matSau.length) {
                        Array
                            .from(Array(this.dataForm.matSau.length).keys())
                            .map(x => {
                                dataForm.append('anh_mat_sau', this.dataForm.matSau[x], this.dataForm.matSau[x].name)
                            })
                    }
                    console.log('2')
                    if (this.dataForm.chanDung && this.dataForm.chanDung.length) {
                        Array
                            .from(Array(this.dataForm.chanDung.length).keys())
                            .map(x => {
                                dataForm.append('anh_chan_dung', this.dataForm.chanDung[x], this.dataForm.chanDung[x].name)
                            })
                    }
                    console.log('3')
                    dataForm.append('user_id', this.thongTinChinhSua.id)
                    dataForm.append('so_du', this.infoUpdate.so_du)
                    dataForm.append('thong_bao', this.thongTinChinhSua.thong_bao)
                    dataForm.append('ngan_hang', this.infoUpdate.ngan_hang)
                    dataForm.append('so_tai_khoan', this.infoUpdate.so_tai_khoan)
                    dataForm.append('chu_tai_khoan', this.infoUpdate.chu_tai_khoan)
                    dataForm.append('ho_ten', this.infoUpdate.ho_ten)
                    dataForm.append('dia_chi', this.infoUpdate.dia_chi)
                    dataForm.append('cmnd', this.infoUpdate.cmnd)
                    dataForm.append('gioi_tinh', this.infoUpdate.gioi_tinh)
                    dataForm.append('ngay_sinh', this.infoUpdate.ngay_sinh)
                    dataForm.append('nghe_nghiep', this.infoUpdate.nghe_nghiep)
                    dataForm.append('thu_nhap', this.infoUpdate.thu_nhap)
                    dataForm.append('muc_dich_vay', this.infoUpdate.muc_dich_vay)
                    dataForm.append('sdt_nguoi_than', this.infoUpdate.sdt_nguoi_than)
                    dataForm.append('moi_quan_he', this.infoUpdate.moi_quan_he)
                    dataForm.append('so_tien_vay', this.infoUpdate.so_tien_vay)
                    dataForm.append('thoi_han_vay', this.infoUpdate.thoi_han_vay)
                    dataForm.append('tra_moi_ky', this.infoUpdate.tra_moi_ky)

                    this.loading.status = true;
                    rest_api.post(url, dataForm).then(
                        response => {
                            if (response.data.rc == 0) {
                                this.getData();
                                this.thongBao('success', 'Cập nhật dữ liệu thành công')
                            } else {
                                this.thongBao('error', response.data.rd)
                            }
                            this.handleClose();
                            this.loading.status = false;
                        }
                    ).catch((e) => {
                    })
                })
                .catch(_ => {
                });
        },
        handleClose() {
            this.show_update = false
        },
        chinhSuaThongTin(item) {
            console.log('chinhSuaThongTin')
            console.log(item)
            this.soDuMoi = JSON.parse(JSON.stringify(item.thong_tin_tai_khoan.so_du))
            this.ngangHang = JSON.parse(JSON.stringify(item.thong_tin_tai_khoan.ngan_hang))
            this.soTaiKhoan = JSON.parse(JSON.stringify(item.thong_tin_tai_khoan.so_tai_khoan))
            this.chuTaiKhoan = JSON.parse(JSON.stringify(item.thong_tin_tai_khoan.chu_tai_khoan))
            this.infoUpdate = JSON.parse(JSON.stringify(item.thong_tin_tai_khoan))
            this.infoUpdate.thoi_han_vay = parseInt(this.infoUpdate.thoi_han_vay)
            this.thongTinChinhSua = JSON.parse(JSON.stringify(item))
            this.anhMatTruocCCCD = [
                {
                    type: 1,
                    link: this.infoUpdate.anh_mat_truoc
                }
            ]
            this.anhMatSauCCCD = [
                {
                    type: 1,
                    link: this.infoUpdate.anh_mat_sau
                }
            ]
            this.anhChanDungCCCD = [
                {
                    type: 1,
                    link: this.infoUpdate.anh_chan_dung
                }
            ]
            console.log(this.thongTinChinhSua)
            this.show_update = true;
        },
        updateStatus(item, status) {
            let params = {
                id: item.id,
                trang_thai: status,
            }
            this.loading.status = true;
            this.loading.text = 'Loading...'
            this.list_data = [];
            this.paging.total = 0
            rest_api.post('/admin/cap-nhat-trang-thai-tai-khoan', params).then(
                response => {
                    if (response.data.rc == 0) {
                        this.getData()
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    console.log(this.list_data)
                    this.loading.status = false;
                }
            ).catch((e) => {
            })
        },
        layLai(e) {
            console.log('onPagingClick')
            this.paging.start = e.start;
            this.paging.limit = e.limit;
            this.paging.currentPage = e.currentPage;
            this.getData()
        },
        getData() {
            console.log('getData')

            let params = {
                start: this.paging.start,
                limit: this.paging.limit,
                key: '',
            }
            this.loading.status = true;
            this.loading.text = 'Loading...'
            this.list_data = [];
            this.paging.total = 0
            rest_api.post('/admin/danh-sach-tai-khoan', params).then(
                response => {
                    if (response.data.rc == 0) {
                        this.list_data = response.data.data;
                        this.paging.total = response.data.total
                        this.thongBao('success', 'Lấy dữ liệu thành công')
                    } else {
                        this.thongBao('error', response.data.rd)
                    }
                    console.log(this.list_data)
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
<style scoped="scoped">
th {
    text-align: center;
}

.el-date-table td {
    border: none !important;
}
</style>
