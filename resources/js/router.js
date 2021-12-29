import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./views/Home.vue";
import About from "./views/About.vue";
import Cocofiber from "./views/Cocofiber.vue";
import Cocopeat from "./views/Cocopeat.vue";
import Charcoal from "./views/Charcoal.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },

        {
            path: "/cocofiber",
            name: "cocofiber",
            component: Cocofiber,
        },
        {
            path: "/cocopeat",
            name: "cocopeat",
            component: Cocopeat,
        },
        {
            path: "/charcoal",
            name: "charcoal",
            component: Charcoal,
        },
    ],
});

export default router;
