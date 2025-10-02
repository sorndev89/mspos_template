<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ຈັດການສະຕັອກ</h4>
      <div class="flex items-center space-x-2">
        <input type="text" class="form-control" placeholder="ຄົ້ນຫາສິນຄ້າ..." v-model="searchQuery">
        <button class="btn btn-primary">ນຳເຂົ້າສິນຄ້າ</button>
      </div>
    </header>
    <div class="card-body p-6">
      <div class="overflow-x-auto -mx-6">
        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
              <thead class="bg-slate-200 dark:bg-slate-700">
                <tr>
                  <th scope="col" class="table-th">ລະຫັດສິນຄ້າ</th>
                  <th scope="col" class="table-th">ຊື່ສິນຄ້າ</th>
                  <th scope="col" class="table-th">ສະຕັອກປັດຈຸບັນ</th>
                  <th scope="col" class="table-th">ສະຖານະ</th>
                  <th scope="col" class="table-th">ອັບເດດຫຼ້າສຸດ</th>
                  <th scope="col" class="table-th">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                <tr v-for="item in filteredInventory" :key="item.id">
                  <td class="table-td">{{ item.id }}</td>
                  <td class="table-td">{{ item.name }}</td>
                  <td class="table-td">{{ item.stock }}</td>
                  <td class="table-td">
                    <span :class="getStockStatusClass(item.stockStatus)">{{ item.stockStatus }}</span>
                  </td>
                  <td class="table-td">{{ item.lastUpdated }}</td>
                  <td class="table-td">
                    <button class="btn btn-sm btn-outline-info mr-2">ປັບສະຕັອກ</button>
                    <button class="btn btn-sm btn-outline-primary">ປະຫວັດ</button>
                  </td>
                </tr>
                <tr v-if="filteredInventory.length === 0">
                    <td colspan="6" class="table-td text-center">ບໍ່ພົບລາຍການສະຕັອກ</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const searchQuery = ref('');
const inventory = ref([
  { id: 'P001', name: 'ນ້ຳດື່ມ', stock: 100, stockStatus: 'ໃນສະຕັອກ', lastUpdated: '2023-10-26' },
  { id: 'P002', name: 'ເຂົ້າໜົມ', stock: 10, stockStatus: 'ໃກ້ໝົດ', lastUpdated: '2023-10-26' },
  { id: 'P003', name: 'ນ້ຳອັດລົມ', stock: 0, stockStatus: 'ໝົດສະຕັອກ', lastUpdated: '2023-10-25' },
  { id: 'P004', name: 'ໝາກໄມ້', stock: 30, stockStatus: 'ໃນສະຕັອກ', lastUpdated: '2023-10-26' },
  { id: 'P005', name: 'ນົມສົ້ມ', stock: 5, stockStatus: 'ໃກ້ໝົດ', lastUpdated: '2023-10-25' },
]);

const filteredInventory = computed(() => {
  if (!searchQuery.value) {
    return inventory.value;
  }
  return inventory.value.filter(item =>
    item.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    item.id.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    item.stockStatus.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

function getStockStatusClass(status) {
  switch (status) {
    case 'ໃນສະຕັອກ': return 'badge bg-success-500';
    case 'ໃກ້ໝົດ': return 'badge bg-warning-500';
    case 'ໝົດສະຕັອກ': return 'badge bg-danger-500';
    default: return 'badge bg-secondary-500';
  }
}
</script>
