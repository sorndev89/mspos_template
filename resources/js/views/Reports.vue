<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ລາຍງານ</h4>
    </header>
    <div class="card-body p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <!-- Report Type Selection -->
        <div class="fromGroup">
          <label for="reportType" class="form-label">ປະເພດລາຍງານ</label>
          <select id="reportType" class="form-control" v-model="selectedReportType">
            <option value="sales">ລາຍງານຍອດຂາຍ</option>
            <option value="products">ລາຍງານສິນຄ້າ</option>
            <option value="inventory">ລາຍງານສະຕັອກ</option>
            <option value="customers">ລາຍງານລູກຄ້າ</option>
          </select>
        </div>

        <!-- Date Range Selection -->
        <div class="fromGroup">
          <label for="dateRange" class="form-label">ຊ່ວງວັນທີ</label>
          <input type="text" id="dateRange" class="form-control" placeholder="ເລືອກຊ່ວງວັນທີ">
        </div>
      </div>

      <div class="mt-6">
        <button class="btn btn-primary w-full">ສ້າງລາຍງານ</button>
      </div>

      <!-- Report Display Area (Placeholder) -->
      <div class="mt-8 p-4 border border-slate-200 dark:border-slate-700 rounded-md bg-slate-50 dark:bg-slate-900">
        <h5 class="text-lg font-medium text-slate-900 dark:text-white mb-2">ຜົນຂອງລາຍງານ (ຕົວຢ່າງ)</h5>
        <p class="text-slate-600 dark:text-slate-300">
          ສະແດງຜົນລາຍງານສຳລັບ: {{ getReportTypeName(selectedReportType) }}
          <span v-if="selectedReportType === 'sales'"> (ຍອດຂາຍລວມ: 1,500,000 LAK)</span>
          <span v-else-if="selectedReportType === 'products'"> (ສິນຄ້າຂາຍດີທີ່ສຸດ: ນ້ຳດື່ມ)</span>
          <span v-else-if="selectedReportType === 'inventory'"> (ສິນຄ້າໃກ້ໝົດ: ເຂົ້າໜົມ, ນົມສົ້ມ)</span>
          <span v-else-if="selectedReportType === 'customers'"> (ລູກຄ້າທີ່ຊື້ຫຼາຍທີ່ສຸດ: ນາງ ມາລາ)</span>
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const selectedReportType = ref('sales'); // Default selected report type

function getReportTypeName(type) {
  switch (type) {
    case 'sales': return 'ລາຍງານຍອດຂາຍ';
    case 'products': return 'ລາຍງານສິນຄ້າ';
    case 'inventory': return 'ລາຍງານສະຕັອກ';
    case 'customers': return 'ລາຍງານລູກຄ້າ';
    default: return 'ບໍ່ລະບຸ';
  }
}
</script>
