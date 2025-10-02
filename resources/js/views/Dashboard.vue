<template>
    <div>
        <div class="flex justify-between flex-wrap items-center mb-6">
            <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">ໜ້າຫຼັກ</h4>
            <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
                <button class="btn leading-0 inline-flex justify-center bg-white text-slate-700 dark:bg-slate-800 dark:text-slate-300 !font-normal">
                    <span class="flex items-center">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:calendar"></iconify-icon>
                        <span>ລາຍອາທິດ</span>
                    </span>
                </button>
                <button class="btn leading-0 inline-flex justify-center bg-white text-slate-700 dark:bg-slate-800 dark:text-slate-300 !font-normal">
                    <span class="flex items-center">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:filter"></iconify-icon>
                        <span>ເລືອກວັນທີ</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5 mb-5">
            <div class="2xl:col-span-3 lg:col-span-4 col-span-12">
                <div class="bg-no-repeat bg-cover bg-center p-4 rounded-[6px] relative" :style="{ backgroundImage: 'url(/template_assets/images/all-img/widget-bg-1.png)' }">
                    <div class="max-w-[180px]">
                        <div class="text-xl font-medium text-slate-900 mb-2">
                            ອັບເກຣດ MsPOS ຂອງທ່ານ
                        </div>
                        <p class="text-sm text-slate-800">
                            ແຜນ Pro ເພື່ອຜົນໄດ້ຮັບທີ່ດີກວ່າ
                        </p>
                    </div>
                    <div class="absolute top-1/2 -translate-y-1/2 ltr:right-6 rtl:left-6 mt-2 h-12 w-12 bg-white rounded-full text-xs font-medium
                            flex flex-col items-center justify-center">
                        ດຽວນີ້
                    </div>
                </div>
            </div>
            <div class="2xl:col-span-9 lg:col-span-8 col-span-12">
                <div class="p-4 card">
                    <div class="grid md:grid-cols-3 col-span-1 gap-4">
                        <!-- BEGIN: Group Chart2 -->
                        <div class="py-[18px] px-4 rounded-[6px] bg-[#E5F9FF] dark:bg-slate-900	 ">
                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                <div class="flex-none">
                                    <div id="wline1"></div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                        ລາຍຮັບທັງໝົດ
                                    </div>
                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                        3,564
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-[18px] px-4 rounded-[6px] bg-[#FFEDE5] dark:bg-slate-900	 ">
                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                <div class="flex-none">
                                    <div id="wline2"></div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                        ສິນຄ້າທີ່ຂາຍໄດ້
                                    </div>
                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                        564
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-[18px] px-4 rounded-[6px] bg-[#EAE5FF] dark:bg-slate-900	 ">
                            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                                <div class="flex-none">
                                    <div id="wline3"></div>
                                </div>
                                <div class="flex-1">
                                    <div class="text-slate-800 dark:text-slate-300 text-sm mb-1 font-medium">
                                        ການເຕີບໂຕ
                                    </div>
                                    <div class="text-slate-900 dark:text-white text-lg font-medium">
                                        +5.0%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Group Chart2 -->
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-5">
            <div class="lg:col-span-8 col-span-12">
                <div class="card">
                    <div class="card-body p-6">
                        <div class="flex justify-between mb-4">
                            <h4 class="card-title">ລາຍງານການຂາຍ</h4>
                            <div class="md:flex md:space-x-4 md:rtl:space-x-reverse">
                                <button class="btn-outline text-slate-600 dark:text-slate-300 btn-sm bg-white dark:bg-slate-900 font-normal font-Inter
                                                text-sm leading-4 mb-4 md:mb-0">
                                    ສົ່ງອອກ
                                </button>
                                <button class="btn-outline text-slate-600 dark:text-slate-300 btn-sm bg-white dark:bg-slate-900 font-normal font-Inter
                                                text-sm leading-4 mb-4 md:mb-0">
                                    ລາຍອາທິດ
                                </button>
                                <button class="btn-outline text-slate-600 dark:text-slate-300 btn-sm bg-white dark:bg-slate-900 font-normal font-Inter
                                                text-sm leading-4">
                                    ລາຍເດືອນ
                                </button>
                            </div>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ສິນຄ້າຂາຍດີທີ່ສຸດ</h4>
                    </div>
                    <div class="card-body p-6">
                        <div class="overflow-x-auto -mx-6">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                        <thead class="bg-slate-200 dark:bg-slate-700">
                                            <tr>
                                                <th scope="col" class="table-th">
                                                    ສິນຄ້າ
                                                </th>
                                                <th scope="col" class="table-th">
                                                    ລາຄາ
                                                </th>
                                                <th scope="col" class="table-th">
                                                    ຂາຍແລ້ວ
                                                </th>
                                                <th scope="col" class="table-th">
                                                    ກຳໄລ
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                            <tr>
                                                <td class="table-td">
                                                    <div class="flex items-center">
                                                        <div class="flex-none">
                                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-2 rtl:ml-2 flex items-center justify-center bg-slate-100 dark:bg-slate-700">
                                                                <iconify-icon icon="heroicons-outline:photograph" class="text-xl text-slate-500 dark:text-slate-300"></iconify-icon>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                            ຫູຟັງ
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-td">
                                                    $100
                                                </td>
                                                <td class="table-td">
                                                    80
                                                </td>
                                                <td class="table-td">
                                                    $1000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-td">
                                                    <div class="flex items-center">
                                                        <div class="flex-none">
                                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-2 rtl:ml-2 flex items-center justify-center bg-slate-100 dark:bg-slate-700">
                                                                <iconify-icon icon="heroicons-outline:photograph" class="text-xl text-slate-500 dark:text-slate-300"></iconify-icon>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                            ໂມງຂໍ້ມື
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-td">
                                                    $200
                                                </td>
                                                <td class="table-td">
                                                    100
                                                </td>
                                                <td class="table-td">
                                                    $2000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-td">
                                                    <div class="flex items-center">
                                                        <div class="flex-none">
                                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-2 rtl:ml-2 flex items-center justify-center bg-slate-100 dark:bg-slate-700">
                                                                <iconify-icon icon="heroicons-outline:photograph" class="text-xl text-slate-500 dark:text-slate-300"></iconify-icon>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                            ໄອໂຟນ
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-td">
                                                    $300
                                                </td>
                                                <td class="table-td">
                                                    150
                                                </td>
                                                <td class="table-td">
                                                    $3000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-td">
                                                    <div class="flex items-center">
                                                        <div class="flex-none">
                                                            <div class="w-8 h-8 rounded-[100%] ltr:mr-2 rtl:ml-2 flex items-center justify-center bg-slate-100 dark:bg-slate-700">
                                                                <iconify-icon icon="heroicons-outline:photograph" class="text-xl text-slate-500 dark:text-slate-300"></iconify-icon>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 text-sm text-slate-600 dark:text-slate-300">
                                                            ກະເປົາເດີນທາງ
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="table-td">
                                                    $400
                                                </td>
                                                <td class="table-td">
                                                    200
                                                </td>
                                                <td class="table-td">
                                                    $4000
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
const url = window.location.origin;
const getImageUrl = (imageName) => {
  return `${url}/template_assets/images/all-img/${imageName}`;
};

onMounted(() => {
  const chartOptions = {
    chart: {
      type: 'bar',
      height: 350
    },
    series: [{
      name: 'ການຂາຍ',
      data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
    }],
    xaxis: {
      categories: ['ມ.ກ.', 'ກ.ພ.', 'ມີ.ນ.', 'ເມ.ສ.', 'ພ.ຄ.', 'ມິ.ຖ.', 'ກ.ລ.', 'ສ.ຫ.', 'ກ.ຍ.']
    }
  };

  if (typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.querySelector("#chart1"), chartOptions);
    chart.render();
  } else {
    console.warn("ApexCharts ບໍ່ຖືກກຳນົດ. ຕາຕະລາງຈະບໍ່ສະແດງຜົນ.");
    document.querySelector("#chart1").innerHTML = "<p>ບ່ອນວາງຕາຕະລາງ (ບໍ່ໄດ້ໂຫຼດ ApexCharts)</p>";
  }
});</script>
