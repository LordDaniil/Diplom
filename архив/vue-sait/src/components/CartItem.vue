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
  <div class="flex items-center border border-slate-200 p-4 rounded-xl">
    <img class="w-28 h-28" :src="imageUrl" :alt="title" />

    <div class="flex flex-col flex-1">
      <p class="text-sm">{{ title }}</p>
      <div class="flex justify-between mt-2">
        <b class="flex-1">{{ price }}</b>
        <img
          @click="emit('onClickRemove')"
          class="opacity-40 hover:opacity-100 cursor-pointer transition"
          src="C:\close.svg"
        />
      </div>
    </div>
  </div>
</template>
