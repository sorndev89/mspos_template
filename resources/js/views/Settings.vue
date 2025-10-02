<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ຕັ້ງຄ່າລະບົບ</h4>
    </header>
    <div class="card-body p-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        <!-- General Settings -->
        <div class="lg:col-span-1">
          <h5 class="text-lg font-medium text-slate-900 dark:text-white mb-4">ຕັ້ງຄ່າທົ່ວໄປ</h5>
          <div class="fromGroup mb-4">
            <label for="appName" class="form-label">ຊື່ລະບົບ</label>
            <input type="text" id="appName" class="form-control" v-model="settings.appName">
          </div>
          <div class="fromGroup mb-4">
            <label for="currency" class="form-label">ສະກຸນເງິນ</label>
            <select id="currency" class="form-control" v-model="settings.currency">
              <option value="LAK">LAK (ກີບ)</option>
              <option value="THB">THB (ບາດ)</option>
              <option value="USD">USD (ໂດລາ)</option>
            </select>
          </div>
        </div>

        <!-- User Settings (Placeholder) -->
        <div class="lg:col-span-1">
          <h5 class="text-lg font-medium text-slate-900 dark:text-white mb-4">ຕັ້ງຄ່າຜູ້ໃຊ້</h5>
          <div class="fromGroup mb-4">
            <label for="defaultRole" class="form-label">ບົດບາດເລີ່ມຕົ້ນ</label>
            <select id="defaultRole" class="form-control" v-model="settings.defaultRole">
              <option value="cashier">ພະນັກງານຂາຍ</option>
              <option value="manager">ຜູ້ຈັດການ</option>
            </select>
          </div>
          <div class="fromGroup mb-4">
            <label class="form-label">ເປີດໃຊ້ການລົງທະບຽນ</label>
            <div class="flex items-center space-x-2">
              <input type="checkbox" id="enableRegistration" class="h-5 w-5" v-model="settings.enableRegistration">
              <label for="enableRegistration" class="text-slate-600 dark:text-slate-300">ອະນຸຍາດໃຫ້ຜູ້ໃຊ້ລົງທະບຽນໃໝ່</label>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 text-right">
        <button class="btn btn-primary">ບັນທຶກການປ່ຽນແປງ</button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const settings = ref({
  appName: 'MsPOS System',
  currency: 'LAK',
  defaultRole: 'cashier',
  enableRegistration: true,
});

function saveSettings() {
  // Logic to save settings would go here
  console.log('Settings saved:', settings.value);
  alert('ບັນທຶກການຕັ້ງຄ່າສຳເລັດແລ້ວ!');
}
</script>
