<script setup>
defineProps({
  id: Number,
  title: String,
  imageUrl: String,
  price: Number,
  text: String,
  isFavorite: Boolean,
  isAdded: Boolean,
  onClickFavorite: Function,
  onClickAdd: Function
})
</script>
<template>
  <div
    class="relative bg-white border border-slate-300 rounded-3xl p-4 sm:p-6 md:p-8 cursor-pointer transition hover:-translate-y-2 hover:shadow-2xl"
  >
    <img
      v-if="onClickFavorite"
      @click="onClickFavorite"
      :src="isFavorite ? '/like-1.svg' : '/like-2.svg'"
      alt="like 1"
      class="absolute top-4 left-4 sm:top-6 sm:left-6 md:top-8 md:left-8"
    />

    <img :src="imageUrl" alt="Услуга" class="w-full max-h" />

    <p class="mt-2 text-base sm:text-lg pt-10 pb-10w-full h-h">{{ title }}</p>
    <b class="text-slate-400">Описание:</b>

    <p class="overflow-y-auto max-h-32 sm:max-h-48 md:max-h-64">{{ text }}</p>
    <div class="flex justify-between mt-3">
      <div class="flex flex-col">
        <span class="text-slate-400">Цена:</span>
        <b>{{ price }} руб.</b>
      </div>

      <img
        v-if="onClickAdd"
        @click="onClickAdd"
        :src="!isAdded ? '/plus.svg' : '/checked.svg'"
        alt="Plus"
        class="w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10"
      />
    </div>
  </div>
</template>

<style scoped>
.h-h {
  height: 10%;
}
</style>
