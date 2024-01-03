<template>
    <el-row
        :gutter="24"
        v-loading.fullscreen.lock="loading.status">
        <el-col :span="12">
            <label for="">Kết quả phiên <span style="color:blue;font-weight:700">KQL1P-{{ ketQuaPhienToi.id }}</span> sẽ
                được công bố sau <span :class="{ 'text-red': thoiGianCongBoTiep<=10 }"
                                       style="font-size: 18px">{{ thoiGianCongBoTiep }}</span>
                giây</label>
            <el-card class="box-card">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mb-0">
                        <thead>
                        <tr>
                            <th>Giải</th>
                            <th>Kết quả</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-right">Đặc biệt</td>
                            <td>{{ ketQuaPhienToi.dac_biet }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải nhất</td>
                            <td>{{ ketQuaPhienToi.giai_nhat }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải nhì</td>
                            <td>{{ ketQuaPhienToi.giai_nhi }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải ba</td>
                            <td>{{ ketQuaPhienToi.giai_ba }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải tư</td>
                            <td>{{ ketQuaPhienToi.giai_tu }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải năm</td>
                            <td>{{ ketQuaPhienToi.giai_nam }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải sáu</td>
                            <td>{{ ketQuaPhienToi.giai_sau }}</td>
                        </tr>
                        <tr>
                            <td class="text-right">Giải bảy</td>
                            <td>{{ ketQuaPhienToi.giai_bay }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </el-card>
        </el-col>
        <el-col :span="12">
            <label for="">Doanh thu dự kiến</label>
            <el-card class="box-card"></el-card>
        </el-col>
        <el-col :span="24" class="mt-3">
            <div class="card">
                <div class="card-header">
                    <el-row :gutter="24">
                        <el-col :span="24">
                            <h5 class="card-title">Lịch sử</h5></el-col>
                    </el-row>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table-bordered table hover-table">
                            <thead class="thead-light">
                            <tr>
                                <th>STT</th>
                                <th>Phiên</th>
                                <th>Thời gian</th>
                                <th>Đặc biệt</th>
                                <th>Nhất</th>
                                <th>Nhì</th>
                                <th>Ba</th>
                                <th>Tư</th>
                                <th>Năm</th>
                                <th>Sáu</th>
                                <th>Bảy</th>
                            </tr>
                            </thead>
                            <tbody v-if="list_data&&list_data.length">
                            <tr v-for="(item,index) in list_data" :key="index">
                                <td class="text-center">{{ (paging.currentPage - 1) * paging.limit + index + 1 }}</td>
                                <td class="text-center">KQL1P-{{ item.id }}</td>
                                <td class="text-center">{{ item.created_at }}</td>
                                <td class="text-center">{{ item.dac_biet }}</td>
                                <td class="text-center">{{ item.giai_nhat }}</td>
                                <td class="text-center">{{ item.giai_nhi }}</td>
                                <td class="text-center">{{ item.giai_ba }}</td>
                                <td class="text-center">{{ item.giai_tu }}</td>
                                <td class="text-center">{{ item.giai_nam }}</td>
                                <td class="text-center">{{ item.giai_sau }}</td>
                                <td class="text-center">{{ item.giai_bay }}</td>

                            </tr>
                            </tbody>
                            <tbody v-else>
                            <tr>
                                <td colspan="11" class="text-center">
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
    </el-row>
</template>
<script>
import rest_api from "../../../api/rest_api";
import Vue from 'vue';
import ElementUI from 'element-ui';
import PhanTrang from "../../Ui/phanTrang";
import {
    Icon
} from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);
Vue.use(Icon);
export default {
    components: {
        PhanTrang
    },
    data() {
        return {
            list_data: [],
            ketQuaPhienToi: null,
            thoiGianCongBoTiep: 60,
            dataSearch: {
                key: '',
            },
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
        }
    },
    mounted() {
        console.log('Mounted quản lý game lô 1 phút...');
        this.layDanhSachKetQua();
        this.startTimer();
    },
    methods: {

        startTimer() {
            this.updateTimer();
            setInterval(this.updateTimer, 1000);
        },
        updateTimer() {
            var now = new Date();
            this.thoiGianCongBoTiep = 59 - now.getSeconds();
            if (this.thoiGianCongBoTiep == 59) {
                this.layDanhSachKetQua()
            }
        },
        getSecondsToNextMinute() {
            var now = new Date();
            var seconds = 60 - now.getSeconds();
            return seconds;
        },
        layDanhSachKetQua() {
            let params = {
                start: this.paging.start,
                limit: this.paging.limit,
                key: this.dataSearch.key
            }
            var url = '/admin/list-kq-lo-1p'
            this.loading.status = true;
            this.loading.text = 'Loading...'
            this.list_data = [];
            rest_api.post(url, params).then(
                response => {
                    if (response.data.rc == 0) {
                        this.list_data = response.data.data;
                        this.paging.total = response.data.total;
                        this.ketQuaPhienToi = response.data.last_result;
                    } else {
                    }
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
            this.layDanhSachKetQua()
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

.text-red {
    color: red;
    font-size: 22px;
    font-weight: bold
}
.table > tbody > tr > td{
    padding:3px 15px;
}
</style>
