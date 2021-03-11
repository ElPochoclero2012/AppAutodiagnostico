import Vue from 'vue'
import Router from 'vue-router'

import Login from '@/components/Login'
import Register from '@/components/Register'
import Diagnostico from '@/components/Diagnostico'
import About from '@/components/About'
import Home from '@/components/Home'
import Password from '@/components/Password'

Vue.use(Router);

export const router = new Router({
  mode: 'history',
  routes: [
    // No requieren autenticacion
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/register',
      name: 'Register',
      component: Register
    },
    {
      path: '/home',
      name: 'Home',
      component: Home
    },
    {
      path: '/password',
      name: 'Password',
      component: Password
    },
    // Requieren autenticacion
    {
      path: '/diagnostico',
      name: 'Diagnostico',
      component: Diagnostico
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    // Cualquier otra cosa
    {
      path: '*',
      name: 'Anything',
      component: Login
    }
  ]
})

router.beforeEach((to, from, next) => {
  const publicPages = ['/login', '/register', '/home', '/password'];
  const authRequired = !publicPages.includes(to.path);
  const loggedIn = localStorage.getItem('user');

  if (authRequired && !loggedIn) {
    next('/login');
  } else {
    next();
  }
});