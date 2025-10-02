<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ລາຍການສິນຄ້າ</h4>
      <div class="flex items-center space-x-2">
        <input type="text" class="form-control" placeholder="ຄົ້ນຫາສິນຄ້າ..." v-model="searchQuery">
        <button class="btn btn-primary">ເພີ່ມສິນຄ້າ</button>
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
                  <th scope="col" class="table-th">ຊື່ສິນຄ້າ</th>
                  <th scope="col" class="table-th">ໝວດໝູ່</th>
                  <th scope="col" class="table-th">ລາຄາ</th>
                  <th scope="col" class="table-th">ສະຕັອກ</th>
                  <th scope="col" class="table-th">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                <tr v-for="product in filteredProducts" :key="product.id">
                  <td class="table-td">{{ product.id }}</td>
                  <td class="table-td">{{ product.name }}</td>
                  <td class="table-td">{{ product.category }}</td>
                  <td class="table-td">{{ product.price }} LAK</td>
                  <td class="table-td">{{ product.stock }}</td>
                  <td class="table-td">
                    <button class="btn btn-sm btn-outline-warning mr-2">ແກ້ໄຂ</button>
                    <button class="btn btn-sm btn-outline-danger">ລຶບ</button>
                  </td>
                </tr>
                <tr v-if="filteredProducts.length === 0">
                    <td colspan="6" class="table-td text-center">ບໍ່ພົບລາຍການສິນຄ້າ</td>
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
const products = ref([
  { id: 'P001', name: 'ນ້ຳດື່ມ', category: 'ເຄື່ອງດື່ມ', price: 5000, stock: 100 },
  { id: 'P002', name: 'ເຂົ້າໜົມ', category: 'ອາຫານຫວ່າງ', price: 10000, stock: 50 },
  { id: 'P003', name: 'ນ້ຳອັດລົມ', category: 'ເຄື່ອງດື່ມ', price: 8000, stock: 75 },
  { id: 'P004', name: 'ໝາກໄມ້', category: 'ອາຫານສົດ', price: 15000, stock: 30 },
  { id: 'P005', name: 'ນົມສົ້ມ', category: 'ນົມ', price: 7000, stock: 80 },
]);

const filteredProducts = computed(() => {
  if (!searchQuery.value) {
    return products.value;
  }
  return products.value.filter(product =>
    product.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    product.category.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    product.id.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});
</script>
