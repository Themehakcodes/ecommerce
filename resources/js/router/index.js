import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/Screens/Home.vue';
import Login from '../components/Screens/Login.vue';
import Register from '../components/Screens/Register.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/login', component: Login },
    { path: '/register', component: Register },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
