<script setup>
import Card from './Card.vue'

defineProps({
  items: Array,
  isFavorites: Boolean
})

const emit = defineEmits(['addToFavorite', 'addToCart'])
</script>

<template>
  <div class="grid-container" v-auto-animate>
    <Card
      v-for="item in items"
      :key="item.id"
      :id="item.id"
      :imageUrl="item.imageUrl"
      :title="item.title"
      :price="item.price"
      :text="item.text"
      :onClickFavorite="isFavorites ? null : () => emit('addToFavorite', item)"
      :onClickAdd="isFavorites ? null : () => emit('addToCart', item)"
      :isFavorite="item.isFavorite"
      :isAdded="item.isAdded"
    />
  </div>
</template>
<style scoped>
@media (min-width: 1020px) {
  .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.25rem; /* 5 (gap-5) in Tailwind CSS is 1.25rem */
  }
}
@media (min-width: 750px) and (max-width: 1020px) {
  .grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.25rem; /* 5 (gap-5) in Tailwind CSS is 1.25rem */
  }
}
@media (max-width: 750px) {
  .grid-container {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1.25rem; /* 5 (gap-5) in Tailwind CSS is 1.25rem */
  }
}
</style>
