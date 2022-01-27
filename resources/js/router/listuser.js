import Vue from "vue";
import VueRouter from "vue-router";
import NotFound from "../user/NotFound.vue";
import ListUser from "../user/listuser.vue";
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
        name: "create",
        path: "/admin/create",
        component: require("../booking/Create.vue").default,
    },
    {
        name: "pickup",
        path: "/admin/pickup",
        component: require("../booking/Pickup.vue").default,
    },
];
const router = new VueRouter({
    mode: "history",
    routes,
});
export default router;
