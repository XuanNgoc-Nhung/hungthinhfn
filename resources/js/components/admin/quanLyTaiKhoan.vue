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
                                <th>Số dư tài khoản</th>
                                <th>Thông báo khi rút tiền</th>
                                <th>Trạng thái rút tiền</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody v-if="list_data&&list_data.length">
                            <tr v-for="(item,index) in list_data" :key="index">
                                <td class="text-center">{{ index + 1 }}</td>
                                <td class="text-center">{{ item.phone }}</td>
                                <td class="text-center">{{ parseInt(item.thong_tin_tai_khoan.so_du).toLocaleString() }}
                                    vnđ
                                </td>
                                <td class="text-center">{{ item.thong_bao }}</td>
                                <td class="text-center">
                                    <span v-if="item.status==1" style="color: green">Đang hoạt động</span>
                                    <span v-else style="color: red">Đang bảo trì</span>
                                </td>
                                <td class="text-center">
                                    <el-button v-if="item.status!=1" @click.prevent="updateStatus(item,1)" size="mini"
                                               type="success">Bật
                                    </el-button>
                                    <el-button v-else @click.prevent="updateStatus(item,0)" size="mini" type="danger">
                                        Chặn rút tiền
                                    </el-button>
                                    <el-button size="mini" type="primary" @click.prevent="chinhSuaThongTin(item)">Chỉnh
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
                width="50%"
                :before-close="handleClose">
                <el-row :gutter="24">
                    <el-col :span="12">
                        <label>Tài khoản</label>
                        <el-input placeholder="Mục đích vay" v-model="thongTinChinhSua.name" disabled></el-input>
                    </el-col>
                    <el-col :span="12">
                        <label>Số dư hiện tại</label>
                        <el-input placeholder="Mục đích vay" v-model="thongTinChinhSua.thong_tin_tai_khoan.so_du"
                                  disabled></el-input>
                    </el-col>
                    <el-col :span="12" style="margin-top:20px">
                        <label>Số dư mới</label>
                        <el-input placeholder="Nhập" type="number" v-model="soDuMoi"></el-input>
                    </el-col>
                    <el-col :span="12" style="margin-top:20px">
                        <label>Thông báo khi rút tiền</label>
                        <el-input placeholder="Mục đích vay" type="text"
                                  v-model="thongTinChinhSua.thong_bao"></el-input>
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
            list_data: [],
            loading: {
                status: false,
                text: 'Loading...'
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
            soDuMoi:0
        }
    },
    mounted() {
        console.log('Mounted Giao dịch admin...');
        this.getData();
    },
    methods: {
        xacNhanChinhSua() {
            console.log('xacNhanChinhSua')
            console.log(this.thongTinChinhSua)
            this.$confirm('Xác nhận cập nhật thông tin ?', 'Thông báo', {
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy',
            })
                .then(_ => {
                    var url = '/admin/cap-nhat-thong-tin-nguoi-dung'
                    let params = {
                        user_id: this.thongTinChinhSua.id,
                        so_du: this.soDuMoi,
                        thong_bao: this.thongTinChinhSua.thong_bao,
                    }
                    rest_api.post(url, params).then(
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
            this.thongTinChinhSua = JSON.parse(JSON.stringify(item))
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
