import Vue from "vue";
import VueRouter from "vue-router";
import NotFound from "../user/NotFound.vue";
import ListUser from "../user/listuser.vue";
import profile from "../user/profile.vue";
import Home from "../user/HomeAdmin.vue";
Vue.use(VueRouter);

const routes = [
    {
        name: "listuser",
        path: "/admin/listuser",
        component: ListUser,
        props: true,
    },
    {
        name: "profile.user",
        path: "/admin/profile/:username?",
        component: profile,
        props: true,
    },
    {
        name: "admin",
        path: "/admin",
        component: Home,
        props: true,
    },
    {
        path: "*",
        component: NotFound,
    },
    {
        name: "booking",
        path: "/admin/booking",
        component: require("../booking/Create.vue").default,
    },
    {
        name: "pickup",
        path: "/admin/pickup",
        component: require("../booking/Pickup.vue").default,
    },
    {
        name: "createkargo",
        path: "/admin/created/kargo",
        component: require("../booking/CreateKargo.vue").default,
    },
    {
        name: "createkurir",
        path: "/admin/created/kurir",
        component: require("../booking/CreateKurir.vue").default,
    },
];
const router = new VueRouter({
    mode: "history",
    routes,
});
export default router;
