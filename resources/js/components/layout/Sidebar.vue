<template>
    <div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="index.html">
          <img :src="'/template_assets/images/logo/logo-c.svg'" class="black_logo" alt="logo">
          <img :src="'/template_assets/images/logo/logo-c-white.svg'" class="white_logo" alt="logo">
          <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">MsPOS</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
          <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
          <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
        </div>
        <button class="sidebarCloseIcon text-2xl inline-block md:hidden">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <template v-for="(item, i) in menuItems" :key="i">
                <li v-if="item.isHeader" class="sidebar-menu-title">{{ item.title }}</li>
                
                <!-- Single Menu -->
                <li v-else-if="!item.children">
                    <router-link :to="item.link" class="navItem" exact-active-class="active">
                        <span class="flex items-center">
                            <iconify-icon class="nav-icon" :icon="item.icon"></iconify-icon>
                            <span>{{ item.title }}</span>
                        </span>
                    </router-link>
                </li>

                <!-- Sub Menu -->
                <li v-else :class="{ 'active menu-open': isSubmenuActive(item) }">
                    <a href="#" class="navItem">
                        <span class="flex items-center">
                            <iconify-icon class="nav-icon" :icon="item.icon"></iconify-icon>
                            <span>{{ item.title }}</span>
                        </span>
                        <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                    </a>
                    <ul class="sidebar-submenu">
                        <li v-for="(child, j) in item.children" :key="j">
                            <router-link :to="child.link" exact-active-class="active">{{ child.title }}</router-link>
                        </li>
                    </ul>
                </li>
            </template>
        </ul>
      </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const isSubmenuActive = (item) => {
  if (item.children) {
    return item.children.some(child => route.path === child.link || route.path.startsWith(child.link + '/'));
  }
  return false;
};

const menuItems = ref([
  { isHeader: true, title: 'Menu' },
  {
    title: 'Dashboard',
    icon: 'heroicons-outline:home',
    link: '/'
  },
  {
    title: 'ຂາຍ (POS)',
    icon: 'heroicons-outline:cash',
    link: '/pos'
  },
  {
    title: 'ລາຍການຂາຍ',
    icon: 'heroicons-outline:shopping-cart',
    link: '/sales'
  },
  {
    title: 'ສິນຄ້າ',
    icon: 'heroicons-outline:cube',
    children: [
        { title: 'ລາຍການສິນຄ້າ', link: '/products' },
        { title: 'ໝວດໝູ່', link: '/products/categories' },
    ]
  },
  {
    title: 'ສະຕັອກ',
    icon: 'heroicons-outline:archive',
    link: '/inventory'
  },
  {
    title: 'ລູກຄ້າ',
    icon: 'heroicons-outline:user-group',
    link: '/customers'
  },
  {
    title: 'ລາຍງານ',
    icon: 'heroicons-outline:chart-bar',
    link: '/reports'
  },
  {
    title: 'ຕັ້ງຄ່າ',
    icon: 'heroicons-outline:cog',
    link: '/settings'
  },
]);

</script>