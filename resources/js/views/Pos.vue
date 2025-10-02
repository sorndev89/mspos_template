<template>
  <div class="grid grid-cols-12 gap-5">
    <!-- Left Column: Product Selection & Search -->
    <div class="lg:col-span-8 col-span-12">
      <div class="card">
        <header class="card-header">
          <h4 class="card-title">ເລືອກສິນຄ້າ</h4>
        </header>
        <div class="card-body p-6">
          <!-- Product Search -->
          <div class="fromGroup mb-4">
            <label for="productSearch" class="form-label">ຄົ້ນຫາສິນຄ້າ</label>
            <input type="text" id="productSearch" class="form-control" placeholder="ຊື່ສິນຄ້າ ຫຼື Barcode" v-model="searchQuery">
          </div>

          <!-- Product List (Mockup) -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div v-for="product in filteredProducts" :key="product.id" class="card p-4 cursor-pointer hover:shadow-lg transition-all duration-200" @click="addToCart(product)">
              <div class="w-full h-24 flex items-center justify-center bg-slate-100 dark:bg-slate-700 mb-2 rounded">
                <iconify-icon icon="heroicons-outline:cube" class="text-5xl text-slate-500 dark:text-slate-300"></iconify-icon>
              </div>
              <h5 class="text-sm font-medium text-slate-900 dark:text-white">{{ product.name }}</h5>
              <p class="text-xs text-slate-500 dark:text-slate-400">{{ product.price }} LAK</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Cart & Payment -->
    <div class="lg:col-span-4 col-span-12">
      <div class="card">
        <header class="card-header">
          <h4 class="card-title">ລາຍການສັ່ງຊື້</h4>
        </header>
        <div class="card-body p-6">
          <!-- Cart Items Table -->
          <div class="overflow-x-auto -mx-6">
            <div class="inline-block min-w-full align-middle">
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                  <thead class="bg-slate-200 dark:bg-slate-700">
                    <tr>
                      <th scope="col" class="table-th">ສິນຄ້າ</th>
                      <th scope="col" class="table-th">ຈຳນວນ</th>
                      <th scope="col" class="table-th">ລາຄາ</th>
                      <th scope="col" class="table-th">ລວມ</th>
                      <th scope="col" class="table-th"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                    <tr v-for="(item, index) in cart" :key="item.id">
                      <td class="table-td">{{ item.name }}</td>
                      <td class="table-td">
                        <input type="number" v-model.number="item.quantity" @change="updateQuantity(index)" class="form-control w-20 text-center">
                      </td>
                      <td class="table-td">{{ item.price }}</td>
                      <td class="table-td">{{ item.price * item.quantity }}</td>
                      <td class="table-td">
                        <button @click="removeFromCart(index)" class="btn btn-danger btn-sm">ລຶບ</button>
                      </td>
                    </tr>
                    <tr v-if="cart.length === 0">
                        <td colspan="5" class="table-td text-center">ຍັງບໍ່ມີສິນຄ້າໃນລາຍການ</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Totals -->
          <div class="mt-4 text-right">
            <p class="text-lg font-medium text-slate-900 dark:text-white">ລວມທັງໝົດ: {{ totalAmount }} LAK</p>
            <button class="btn btn-primary mt-4 w-full" :disabled="cart.length === 0">ຊຳລະເງິນ</button>
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
  { id: 1, name: 'ນ້ຳດື່ມ', price: 5000 },
  { id: 2, name: 'ເຂົ້າໜົມ', price: 10000 },
  { id: 3, name: 'ນ້ຳອັດລົມ', price: 8000 },
  { id: 4, name: 'ໝາກໄມ້', price: 15000 },
  { id: 5, name: 'ນົມສົ້ມ', price: 7000 },
  { id: 6, name: 'ເຂົ້າຈີ່', price: 6000 },
]);

const cart = ref([]);

const filteredProducts = computed(() => {
  if (!searchQuery.value) {
    return products.value;
  }
  return products.value.filter(product =>
    product.name.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

const totalAmount = computed(() => {
  return cart.value.reduce((sum, item) => sum + (item.price * item.quantity), 0);
});

function addToCart(product) {
  const existingItem = cart.value.find(item => item.id === product.id);
  if (existingItem) {
    existingItem.quantity++;
  } else {
    cart.value.push({ ...product, quantity: 1 });
  }
}

function updateQuantity(index) {
  if (cart.value[index].quantity <= 0) {
    cart.value.splice(index, 1);
  }
}

function removeFromCart(index) {
  cart.value.splice(index, 1);
}
</script>
