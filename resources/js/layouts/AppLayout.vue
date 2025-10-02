<template>
  <main class="app-wrapper">
    <Sidebar />
    <div class="flex flex-col justify-between min-h-screen">
      <div>
        <Header />
        <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div id="content_layout">
              <router-view />
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </div>
  </main>
</template>

<script setup>
import { onMounted } from 'vue';
import Header from '../components/layout/Header.vue';
import Sidebar from '../components/layout/Sidebar.vue';
import Footer from '../components/layout/Footer.vue';

onMounted(() => {
  const pluginScript = document.createElement('script');
  pluginScript.src = '/template_assets/js/rt-plugins.js';
  pluginScript.async = true;

  pluginScript.onload = () => {
    const appScript = document.createElement('script');
    appScript.src = '/template_assets/js/app.js';
    appScript.async = true;
    document.body.appendChild(appScript);
  };

  document.body.appendChild(pluginScript);
});
</script>