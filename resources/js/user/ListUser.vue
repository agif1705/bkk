<template>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="card">
                <div class="card-header">Create Booking</div>
                <a href=""></a>
                <div class="card-body">
                    <table
                        class="table table-hover table-success table-striped"
                    >
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Konsol</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in record" :key="item.id">
                                <th scope="row">{{ item.id }}</th>
                                <td>
                                    <router-link :to="profileurl(item.id)">{{
                                        item.name
                                    }}</router-link>
                                </td>
                                <td>{{ item.email }}</td>
                                <td>{{ item.roles }}</td>
                                <td>{{ item.konsol_id }}</td>
                                <td>{{ item.v_password }}</td>
                                <td>edit/hapus</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    // props: ["username"],
    data() {
        return {
            record: [],
        };
    },
    methods: {
        loadData() {
            axios.get("/api/listuser").then(({ data }) => (this.record = data));
        },
        profileurl(id) {
            return "/admin/user/data/" + id;
        },
    },
    created() {
        this.loadData();
    },
};
</script>
