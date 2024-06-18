<script setup>
defineProps({
  totalPrice: Number
})

const emit = defineEmits(['openDrawer'])
</script>

<template>
  <header class="header flex justify-between border-b border-slate-300">
    <router-link to="/" class="flex items-center">
      <img src="/logo.png" alt="logo" class="relative logo" />
    </router-link>

    <div class="text-container flex gap-x-5">
      <div class="text-xl ptext text-wrap">
        <h1>Режим работы:</h1>
        <p>Ежедневно</p>
        <p>С 8:00 до 18:00</p>
      </div>
      <div class="text-xl text-wrap">
        <h1>Номера телефонов:</h1>
        <p>+7-995-208-44-74</p>
        <p>+7-861-205-00-91</p>
      </div>
    </div>

    <div class="ps-5 pe-5 cart-container">
      <ul class="flex flex-col">
        <router-link to="/profile">
          <li class="flex cursor-pointer text-grey-500 hover:text-black">
            <img src="/profile.svg" alt="Profile" class="w-6 h-6" />
            <span class="text-xl ptext px-2">О нас</span>
          </li>
        </router-link>
        <li
          @click="() => emit('openDrawer')"
          class="flex items-center cursor-pointer text-grey-500 hover:text-black"
        >
          <img src="/cart.svg" alt="Cart" class="w-6 h-6" />
          <span class="text-xl ptext px-2">Корзина</span>
        </li>
      </ul>
    </div>

    <div class="ps-5 pe-5 cart-container">
      <ul class="flex flex-col">
        <router-link to="/favorites">
          <li class="flex items-center cursor-pointer text-grey-500 hover:text-black">
            <img src="/heart.svg" alt="Favorites" class="w-6 h-6" />
            <span class="text-xl ptext px-2">Избранное</span>
          </li>
        </router-link>
        <router-link to="/conf">
          <li class="flex items-center cursor-pointer text-grey-500 hover:text-black">
            <img
              src="/password_protect_secure_security_privacy_lock_padlock_icon_219328.svg"
              alt="Confidentiality"
              class="w-6 h-6"
            />
            <span class="text-xl ptext px-2">Конфиденциальность</span>
          </li>
        </router-link>
      </ul>
    </div>
  </header>
</template>

<style scoped>
.header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

.text-container {
  text-align: center;
  margin-bottom: 1rem;
  margin: 0;
  /* Отступ между текстовыми блоками */
}

.text-xl {
  font-size: 1.2rem; /* Основной размер текста */
}
.cart-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  float: left;
}

@media (max-width: 980px) {
  .header {
    flex-direction: column;
    align-items: center;
  }

  .text-xl {
    font-size: 1rem; /* Уменьшенный размер текста на маленьких экранах */
  }

  .text-container {
    margin-bottom: 0; /* Убираем отступ между текстовыми блоками */
    text-align: center;
    flex-direction: column;
    justify-content: space-around;
  }
  .cart-container ul {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .ps-5,
  .pe-5 {
    width: 100%;
    max-width: 100%;
    text-align: center;
  }
}
</style>
