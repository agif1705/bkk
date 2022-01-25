require("./bootstrap");

window.Vue = require("vue").default;
import vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/create",
        component: require("./components/booking/Create.vue").default,
    },
    {
        path: "/pickup",
        component: require("./components/booking/Pickup.vue").default,
    },
];

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
const router = new VueRouter({
    mode: "history",
    routes,
});
const app = new Vue({
    el: "#app",
    router,
});
