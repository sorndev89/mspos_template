<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ຂໍ້ມູນລູກຄ້າ</h4>
      <div class="flex items-center space-x-2">
        <input type="text" class="form-control" placeholder="ຄົ້ນຫາລູກຄ້າ..." v-model="searchQuery">
        <button class="btn btn-primary">ເພີ່ມລູກຄ້າ</button>
      </div>
    </header>
    <div class="card-body p-6">
      <div class="overflow-x-auto -mx-6">
        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
              <thead class="bg-slate-200 dark:bg-slate-700">
                <tr>
                  <th scope="col" class="table-th">ລະຫັດ</th>
                  <th scope="col" class="table-th">ຊື່ລູກຄ້າ</th>
                  <th scope="col" class="table-th">ເບີໂທ</th>
                  <th scope="col" class="table-th">ອີເມວ</th>
                  <th scope="col" class="table-th">ຍອດຊື້ລວມ</th>
                  <th scope="col" class="table-th">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                <tr v-for="customer in filteredCustomers" :key="customer.id">
                  <td class="table-td">{{ customer.id }}</td>
                  <td class="table-td">{{ customer.name }}</td>
                  <td class="table-td">{{ customer.phone }}</td>
                  <td class="table-td">{{ customer.email }}</td>
                  <td class="table-td">{{ customer.totalPurchases }} LAK</td>
                  <td class="table-td">
                    <button class="btn btn-sm btn-outline-warning mr-2">ແກ້ໄຂ</button>
                    <button class="btn btn-sm btn-outline-primary">ລາຍລະອຽດ</button>
                  </td>
                </tr>
                <tr v-if="filteredCustomers.length === 0">
                    <td colspan="6" class="table-td text-center">ບໍ່ພົບຂໍ້ມູນລູກຄ້າ</td>
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
const customers = ref([
  { id: 'C001', name: 'ທ້າວ ສົມສັກ', phone: '020 1111 2222', email: 'somsak@example.com', totalPurchases: 500000 },
  { id: 'C002', name: 'ນາງ ດວງໃຈ', phone: '020 3333 4444', email: 'duangjai@example.com', totalPurchases: 250000 },
  { id: 'C003', name: 'ທ້າວ ສີສຸກ', phone: '020 5555 6666', email: 'sisouk@example.com', totalPurchases: 100000 },
  { id: 'C004', name: 'ນາງ ມາລາ', phone: '020 7777 8888', email: 'mala@example.com', totalPurchases: 750000 },
]);

const filteredCustomers = computed(() => {
  if (!searchQuery.value) {
    return customers.value;
  }
  return customers.value.filter(customer =>
    customer.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    customer.phone.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    customer.email.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    customer.id.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});
</script>
