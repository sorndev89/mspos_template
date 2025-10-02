<template>
  <div class="card">
    <header class="card-header">
      <h4 class="card-title">ໝວດໝູ່ສິນຄ້າ</h4>
      <div class="flex items-center space-x-2">
        <input type="text" class="form-control" placeholder="ຄົ້ນຫາໝວດໝູ່..." v-model="searchQuery">
        <button class="btn btn-primary">ເພີ່ມໝວດໝູ່</button>
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
                  <th scope="col" class="table-th">ຊື່ໝວດໝູ່</th>
                  <th scope="col" class="table-th">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                <tr v-for="category in filteredCategories" :key="category.id">
                  <td class="table-td">{{ category.id }}</td>
                  <td class="table-td">{{ category.name }}</td>
                  <td class="table-td">
                    <button class="btn btn-sm btn-outline-warning mr-2">ແກ້ໄຂ</button>
                    <button class="btn btn-sm btn-outline-danger">ລຶບ</button>
                  </td>
                </tr>
                <tr v-if="filteredCategories.length === 0">
                    <td colspan="3" class="table-td text-center">ບໍ່ພົບໝວດໝູ່ສິນຄ້າ</td>
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
const categories = ref([
  { id: 'C001', name: 'ເຄື່ອງດື່ມ', },
  { id: 'C002', name: 'ອາຫານຫວ່າງ', },
  { id: 'C003', name: 'ອາຫານສົດ', },
  { id: 'C004', name: 'ນົມ', },
]);

const filteredCategories = computed(() => {
  if (!searchQuery.value) {
    return categories.value;
  }
  return categories.value.filter(category =>
    category.name.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
    category.id.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});
</script>
