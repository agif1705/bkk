require("./bootstrap");
import Veu from "vue";
import router from "./router/listuser.js";
window.Vue = require("vue").default;

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const app = new Vue({
    el: "#app",
    router,
});
