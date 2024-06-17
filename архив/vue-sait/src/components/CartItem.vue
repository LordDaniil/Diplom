<script setup>
const emit = defineEmits(['onClickRemove'])
defineProps({
  id: Number,
  title: String,
  imageUrl: String,
  price: Number,
  isFavorite: Boolean,
  isAdded: Boolean,
  onClickFavorite: Function,
  onClickAdd: Function
})
</script>

<template>
  <div class="flex cart-item items-center border border-slate-200 p-4 rounded-xl">
    <img class="usl-ga" :src="imageUrl" :alt="title" />

    <div class="flex flex-col flex-1">
      <p class="text-sm">{{ title }}</p>
      <div class="flex justify-between mt-2">
        <b class="flex-1">{{ price }} руб.</b>
        <img
          @click="emit('onClickRemove')"
          class="opacity-40 hover:opacity-100 cursor-pointer close-ico transition"
          src="/close.svg"
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
@media (min-width: 1340px) {
  .cart-item {
    font-size: 1rem;
  }
  .close-ico {
    width: 10px;
    height: 10px;
  }
  .usl-ga {
    width: 100px;
    height: 100px;
  }
  .text-sm {
    font-size: 1.09rem;
  }
}
@media (min-width: 1280px) and (max-width: 1339px) {
  .cart-item {
    font-size: 0.9rem;
  }
  .close-ico {
    width: 35px;
    height: 35px;
  }
  .usl-ga {
    width: 80px;
    height: 80px;
  }
  .text-sm {
    font-size: 0.9rem;
  }
}
@media (min-width: 1035px) and (max-width: 1280px) {
  .cart-item {
    font-size: 0.9rem;
  }
  .close-ico {
    width: 30px;
    height: 30px;
  }
  .usl-ga {
    width: 60px;
    height: 60px;
  }
  .text-sm {
    font-size: 0.9rem;
  }
}
@media (min-width: 1023px) and (max-width: 1035px) {
  .cart-item {
    font-size: 0.8rem;
  }
  .close-ico {
    width: 30px;
    height: 30px;
  }
  .usl-ga {
    width: 55px;
    height: 50px;
  }
  .text-sm {
    font-size: 0.8rem;
  }
}
@media (max-width: 1035px) {
  .cart-item {
    font-size: 0.9rem;
  }
  .close-ico {
    width: 30px;
    height: 30px;
  }
  .usl-ga {
    width: 55px;
    height: 50px;
  }
  .text-sm {
    font-size: 0.9rem;
  }
}
</style>
