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
    class="relative bg-white border border-slate-300 rounded-3xl p-8 cursor-pointer transition hover:-translate-y-2 hover:shadow-2xl"
  >
    <img
      v-if="onClickFavorite"
      @click="onClickFavorite"
      :src="isFavorite ? '/like-1.svg' : '/like-2.svg'"
      alt="like 1"
      class="absolute top-8 left-8"
    />

    <img :src="imageUrl" alt="Услуга" />

    <p class="mt-2 text-lg pt-6 pb-6">{{ title }}</p>
    <b class="text-state-400">Описание:</b>

    <p class="overflow-y-auto max-h-64">{{ text }}</p>
    <div class="flex justify-between mt-3">
      <div class="flex flex-col">
        <span class="text-state-400">Цена:</span>
        <b>{{ price }} руб.</b>
      </div>

      <img
        v-if="onClickAdd"
        @click="onClickAdd"
        :src="!isAdded ? '/plus.svg' : '/checked.svg'"
        alt="Plus"
      />
    </div>
  </div>
</template>
