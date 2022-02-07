<template>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">Booking Paket</div>
                <div class="card-body">
                    <router-link
                        class="btn btn-primary"
                        :to="{ name: 'createkargo' }"
                        ><i class="fas fa-plus">Kargo</i>
                    </router-link>

                    <router-link
                        class="btn btn-success"
                        :to="{ name: 'createkurir' }"
                        ><i class="fas fa-plus">Kurir</i>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card collapsed-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-start">
                            <div class="bd-highlight">List Booking Kargo</div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success mr-2">Pickup </a>
                            <a class="btn btn-warning mr-2">Print All </a>
                            <div class="card-tools">
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                    title="Collapse"
                                >
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="display: none">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Resi</th>
                                <th scope="col">Pengirim</th>
                                <th scope="col">Penerima</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: none">Footer</div>
                <!-- /.card-footer-->
            </div>
        </div>
        <div class="row">
            <div class="card collapsed-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-start">
                            <div class="bd-highlight">List Booking kurir</div>
                            <div class="bd-highlight mr-3">Total :</div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success mr-2">Pickup </a>
                            <a class="btn btn-warning mr-2">Print All </a>
                            <div class="card-tools">
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                    title="Collapse"
                                >
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="display: none">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Resi</th>
                                <th scope="col">Pengirim</th>
                                <th scope="col">Penerima</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: none">Footer</div>
                <!-- /.card-footer-->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        create(username) {
            return "/admin/profile/" + username;
        },
        mounted() {
            console.log("Component mounted.");
        },
    },
};
</script>
