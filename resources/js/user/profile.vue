<template>
    <div class="container-fluid">
        <div class="card">
            <fieldset class="mb-3 row">
                <legend class="col-form-legend col-sm-1-12 d-flex">
                    <div class="col-lg-4">Profile {{ profile.data.name }}</div>
                    <div class="col-lg-4">
                        Group {{ profile.data.konsol_id }}
                    </div>
                    <div
                        class="col-lg-4"
                        v-for="item in profile.data.roles"
                        :key="item.id"
                    >
                        Role : {{ item.name }}
                    </div>
                </legend>
                <div class="col-sm-1-12"></div>
            </fieldset>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <h2 class="text-center">Detail/Edit Profile</h2>
                    <div class="card-body">
                        <form class="from-group">
                            <div class="mb-3 row">
                                <label
                                    for="nameuser"
                                    class="col-sm-3 col-form-label"
                                >
                                    Nama
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nameuser"
                                        id="nameuser"
                                        v-model="profile.data.name"
                                    />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="username"
                                    class="col-sm-3 col-form-label"
                                >
                                    Username
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="username"
                                        id="username"
                                        v-model="profile.data.username"
                                    />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="email"
                                    class="col-sm-3 col-form-label"
                                >
                                    Email
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        v-model="profile.data.email"
                                    />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="password"
                                    class="col-sm-3 col-form-label"
                                >
                                    Password Lama
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control disabled"
                                        name="password"
                                        id="password"
                                        disabled="true"
                                        v-model="profile.data.v_password"
                                    />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="password"
                                    class="col-sm-3 col-form-label"
                                >
                                    Password Baru
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        v-model="profile.data.v_password"
                                    />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label
                                    for="password"
                                    class="col-sm-3 col-form-label"
                                >
                                    Role
                                </label>
                                <div class="col-sm-9">
                                    <select
                                        class="form-select form-select-sm"
                                        aria-label=".form-select-sm example"
                                    >
                                        <option
                                            v-for="item in profile.role"
                                            :key="item.id"
                                            :value="item.name"
                                        >
                                            {{ item.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div
                                    class="form-check form-check-inline"
                                    v-for="item in profile.Permission"
                                    :key="item.id"
                                >
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        :id="item.id"
                                        :value="item.name"
                                    />
                                    <label
                                        class="form-check-label"
                                        :for="item.id"
                                        >{{ item.name }}</label
                                    >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-text text-center fw-bold">
                            Role : {{ role }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            profile: [],
            role: "",
        };
    },
    methods: {
        loadData() {
            axios
                .get("/api/profile/" + this.$route.params.username)
                .then(({ data }) => (console.log(data), (this.profile = data)));
        },
    },
    created() {
        this.loadData();
    },
};
</script>
