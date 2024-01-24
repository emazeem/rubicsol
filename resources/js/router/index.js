import { createRouter, createWebHistory } from 'vue-router';
//import Login from '../views/Login.vue';
import App from "../App.vue";
import Home from "../web/Home.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home, name: Home, meta: { loginRequired: false } },
    ],
});
router.beforeEach((to, from, next) => {
    next();
});
export default router;
