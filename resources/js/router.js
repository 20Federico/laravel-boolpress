import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Contact from "./pages/Contact.vue";
import NotFound from "./pages/NotFound.vue";

Vue.use(VueRouter);

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home,
		},
		{
			path: '/about',
			name: 'about',
			component: About,
		},
		{
			path: '/contact',
			name: 'contact',
			component: Contact,
		},
		{
			path: '/*',
			name: 'notfound',
			component: NotFound,
		}
	],
});
export default router;