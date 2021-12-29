import "./bootstrap";

import Vue from "vue";
import router from "./router";
import AOS from "aos";
import "aos/dist/aos.css";
import App from "./layouts/App.vue";
import Bootstrap from "./bootstrap";
new Vue({
    router,
    el: "#app",
    render: (h) => h(App),
    mounted() {
        AOS.init();
    },
});
