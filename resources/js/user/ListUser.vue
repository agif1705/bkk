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
                                <th scope="col">Token</th>
                                <th scope="col">Konsol</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in record" :key="item.id">
                                <th scope="row">{{ item.id }}</th>
                                <td>
                                    <router-link :to="profileurl(item.username)"
                                        >{{ item.name }} -
                                        {{ item.username }}</router-link
                                    >
                                </td>
                                <td>{{ item.email }}</td>
                                <td v-for="roles in item" :key="roles.id">
                                    {{ roles.name }}
                                </td>
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
    data() {
        return {
            record: [],
        };
    },
    methods: {
        loadData() {
            axios.get("/api/datauser").then(({ data }) => (this.record = data));
        },
        profileurl(username) {
            return "/admin/user/data/" + username;
        },
    },
    created() {
        this.loadData();
    },
};
</script>
