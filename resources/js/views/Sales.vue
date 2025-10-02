<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ລາຍການຂາຍ</h4>
      <div class="flex items-center space-x-2">
        <input type="text" class="form-control" placeholder="ຄົ້ນຫາ..." v-model="searchQuery">
        <button class="btn btn-primary">ຄົ້ນຫາ</button>
      </div>
    </header>
    <div class="card-body p-6">
      <div class="overflow-x-auto -mx-6">
        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
              <thead class="bg-slate-200 dark:bg-slate-700">
                <tr>
                  <th scope="col" class="table-th">ລະຫັດຂາຍ</th>
                  <th scope="col" class="table-th">ວັນທີ</th>
                  <th scope="col" class="table-th">ລູກຄ້າ</th>
                  <th scope="col" class="table-th">ຍອດລວມ</th>
                  <th scope="col" class="table-th">ສະຖານະ</th>
                  <th scope="col" class="table-th">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                <tr v-for="sale in filteredSales" :key="sale.id">
                  <td class="table-td">{{ sale.id }}</td>
                  <td class="table-td">{{ sale.date }}</td>
                  <td class="table-td">{{ sale.customer }}</td>
                  <td class="table-td">{{ sale.total }} LAK</td>
                  <td class="table-td">
                    <span :class="getStatusClass(sale.status)">{{ sale.status }}</span>
                  </td>
                  <td class="table-td">
                    <button class="btn btn-sm btn-outline-primary">ລາຍລະອຽດ</button>
                  </td>
                </tr>
                <tr v-if="filteredSales.length === 0">
                    <td colspan="6" class="table-td text-center">ບໍ່ພົບລາຍການຂາຍ</td>
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
const sales = ref([
  { id: 'S001', date: '2023-10-26', customer: 'ທ້າວ ສົມສັກ', total: 150000, status: 'ສຳເລັດ' },
  { id: 'S002', date: '2023-10-25', customer: 'ນາງ ດວງໃຈ', total: 25000, status: 'ສຳເລັດ' },
  { id: 'S003', date: '2023-10-25', customer: 'ທ້າວ ສີສຸກ', total: 75000, status: 'ຍົກເລີກ' },
  { id: 'S004', date: '2023-10-24', customer: 'ນາງ ມາລາ', total: 300000, status: 'ສຳເລັດ' },
  { id: 'S005', date: '2023-10-24', customer: 'ທ້າວ ວຽງຄຳ', total: 50000, status: 'ລໍຖ້າ' },
]);

const filteredSales = computed(() => {
  if (!searchQuery.value) {
    return sales.value;
  }
  return sales.value.filter(sale =>
    sale.id.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    sale.customer.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    sale.status.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

function getStatusClass(status) {
  switch (status) {
    case 'ສຳເລັດ': return 'badge bg-success-500';
    case 'ຍົກເລີກ': return 'badge bg-danger-500';
    case 'ລໍຖ້າ': return 'badge bg-warning-500';
    default: return 'badge bg-secondary-500';
  }
}
</script>
