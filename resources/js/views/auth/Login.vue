<template>
    <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
          <router-link to="/">
            <img :src="'/template_assets/images/logo/logo.svg'" alt="" class="mb-10 dark_logo inline-block dark:hidden">
            <img :src="'/template_assets/images/logo/logo-white.svg'" alt="" class="mb-10 white_logo hidden dark:inline-block">
          </router-link>
          <h4>
            ປົດລັອກປະສິດທິພາບ
            <span class="text-slate-800 dark:text-slate-400 font-bold">
                ໃນການເຮັດວຽກ
            </span>
          </h4>
        </div>
        <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
          <img :src="'/template_assets/images/auth/ils1.svg'" alt="" class="h-full w-full object-contain">
        </div>
      </div>
      <div class="right-column relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <router-link to="/">
                <img :src="'/template_assets/images/logo/logo.svg'" alt="" class="mb-10 dark_logo">
                <img :src="'/template_assets/images/logo/logo-white.svg'" alt="" class="mb-10 white_logo">
              </router-link>
            </div>
            <div class="text-center 2xl:mb-10 mb-4">
              <h4 class="font-medium">ເຂົ້າສູ່ລະບົບ</h4>
              <div class="text-slate-500 text-base">
                ເຂົ້າສູ່ລະບົບເພື່ອເລີ່ມຕົ້ນໃຊ້ງານ MsPOS
              </div>
            </div>
            <!-- BEGIN: Login Form -->
            <form class="space-y-4" @submit.prevent="">
              <div class="fromGroup">
                <label class="block capitalize form-label">ອີເມວ</label>
                <div class="relative ">
                  <input type="email" name="email" class="form-control py-2" placeholder="ອີເມວ">
                </div>
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">ລະຫັດຜ່ານ</label>
                <div class="relative "><input type="password" name="password" class="form-control py-2" placeholder="ລະຫັດຜ່ານ">
                </div>
              </div>
              <div class="flex justify-between">
                <div class="checkbox-area">
                  <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden" name="checkbox">
                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img :src="'/template_assets/images/icon/ck-white.svg'" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">ຈື່ຂ້ອຍໄວ້ໃນລະບົບ</span>
                  </label>
                </div>
                <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="#">ລືມລະຫັດຜ່ານ?</a>
              </div>
              <button class="btn btn-dark block w-full text-center">ເຂົ້າສູ່ລະບົບ</button>
            </form>
            <!-- END: Login Form -->
            
            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">
              ຍັງບໍ່ມີບັນຊີ? 
              <a href="#" class="text-slate-900 dark:text-white font-medium hover:underline">
                ລົງທະບຽນ
              </a>
            </div>
          </div>
          <div class="auth-footer text-center">
            ສະຫງວນລິຂະສິດ © {{ new Date().getFullYear() }}, MsPOS.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>