<script setup>
defineProps({
  totalPrice: Number
})

const emit = defineEmits(['openDrawer'])
</script>

<template>
  <header class="flex justify-between border-b border-slate-300">
    <router-link to="/">
      <div class="flex items-center">
        <img src="/logo.png" alt="logo" class="relative" />
      </div>
    </router-link>

    <div class="text-xl font-vold text-wrap left-80 pt-7">
      <h1>Режим работы:</h1>
      <p>Ежедневно</p>
      <p>С 8:00 до 18:00</p>
    </div>
    <article class="text-xl font-vold gap-x-1 text-wrap pt-7">
      <h1>Номера телефонов:</h1>
      <p>+7-995-208-44-74</p>
      <p>+7-861-205-00-91</p>
    </article>

    <div class="ps-5 pe-5">
      <ul class="frex items-center pt-8">
        <li
          @click="() => emit('openDrawer')"
          class="flex items-center cursor-pointer text-grey-500 hover:text-black pb-3"
        >
          <img src="/cart.svg" alt="Cart" class="w-px-20 h-px-20" />
          <span class="text-xl px-2">Корзина</span>
        </li>

        <router-link to="/favorites">
          <li class="flex items-center cursor-pointer text-grey-500 hover:text-black">
            <img src="/heart.svg" alt="Cart" class="w-5 h-5" />
            <span class="text-xl px-2">Избранное</span>
          </li>
        </router-link>
      </ul>
    </div>
    <div class="ps-5 pe-5">
      <ul class="frex items-center pt-8">
        <router-link to="/profile">
          <li class="flex items-center cursor-pointer text-grey-500 hover:text-black pb-3">
            <img src="/profile.svg" alt="Cart" class="w-5 h-5" />
            <span class="text-xl px-2">О нас</span>
          </li>
        </router-link>

        <router-link to="/conf">
          <li class="flex items-center cursor-pointer text-grey-500 hover:text-black">
            <img
              src="\product\password_protect_secure_security_privacy_lock_padlock_icon_219328.svg"
              alt="confi"
              class="w-5 h-5"
            />
            <span class="text-xl px-2">Конфиденциальность</span>
          </li>
        </router-link>
      </ul>
    </div>
  </header>
</template>
