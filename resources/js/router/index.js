import { createRouter, createWebHistory } from 'vue-router';
import AppLayout from '../layouts/AppLayout.vue';

const routes = [
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/auth/Login.vue'),
  },
  {
    path: '/',
    component: AppLayout,
    children: [
      { path: '', name: 'home', component: () => import('../views/Dashboard.vue') }, // Changed to Dashboard.vue
      { path: '/pos', name: 'pos', component: () => import('../views/Pos.vue') },
      { path: '/sales', name: 'sales', component: () => import('../views/Sales.vue') },
      { path: '/products', name: 'products', component: () => import('../views/products/Index.vue') },
      { path: '/products/categories', name: 'products.categories', component: () => import('../views/products/Categories.vue') },
      { path: '/inventory', name: 'inventory', component: () => import('../views/Inventory.vue') },
      { path: '/customers', name: 'customers', component: () => import('../views/Customers.vue') },
      { path: '/reports', name: 'reports', component: () => import('../views/Reports.vue') },
      { path: '/settings', name: 'settings', component: () => import('../views/Settings.vue') },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;