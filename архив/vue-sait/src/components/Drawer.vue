<script setup>
import { ref, computed, inject } from 'vue'
import axios from 'axios'

import DrawerHead from './DrawerHead.vue'
import CartItemlist from './CartItemlist.vue'
import infoBlock from './infoBlock.vue'

const props = defineProps({
  totalPrice: Number
})

const customerName1 = ref('')
const customerNumber1 = ref('')
const customerNumber2 = ref('')

const { cart } = inject('cart')

const isCreating = ref(false)
const orderId = ref(null)

const createOrder = async () => {
  try {
    isCreating.value = true
    const { data } = await axios.post(`https://cfefbe51b5eb09b2.mokky.dev/orders`, {
      items: cart.value,
      totalPrice: props.totalPrice.value,
      customer: {
        name1: customerName1.value,
        number1: customerNumber1.value,
        number2: customerNumber2.value
      }
    })

    cart.value = []
    orderId.value = data.id
  } catch (err) {
    console.log(err)
  } finally {
    isCreating.value = false
  }
}

const cartIsEmpty = computed(() => cart.value.length === 0)

const isFormFilled = computed(() => {
  return (
    isValidName.value &&
    isValidPhoneNumber.value &&
    isValidEmail.value &&
    isNameValidLength.value &&
    isPhoneNumberValidLength.value &&
    isEmailValidLength.value
  )
})

const createOrderIfFormFilled = () => {
  if (isFormFilled.value) {
    createOrder()
  } else {
    console.log('Please fill in all fields before placing the order.')
  }
}

const canPlaceOrder = computed(() => !cartIsEmpty.value && isFormFilled.value && !isCreating.value)

const isNameValidLength = computed(() => {
  return customerName1.value.length <= 40
})

const isValidName = computed(() => {
  const regex = /^[а-яА-Я ]+$/
  return regex.test(customerName1.value) && customerName1.value.trim().split(' ').length === 3
})

const isPhoneNumberValidLength = computed(() => {
  return customerNumber1.value.length <= 11
})

const isValidPhoneNumber = computed(() => {
  const regex = /^[0-9]+$/
  return regex.test(customerNumber1.value)
})

const isEmailValidLength = computed(() => {
  return customerNumber2.value.length <= 64
})

const isValidEmail = computed(() => {
  const regex = /\S+@\S+\.\S+/
  return regex.test(customerNumber2.value)
})
</script>

<template>
  <div class="fixed top-0 left-0 h-full w-full bg-black z-10 opacity-80"></div>
  <div class="bg-white w-1/3 h-full fixed left-0 top-0 z-20 p-8">
    <DrawerHead />
    <Login />
    <div v-if="!totalPrice || orderId" class="flex h-full items-center">
      <infoBlock
        v-if="!totalPrice && !orderId"
        title="Корзина пустая"
        description="Добавьте хотя бы одну услугу, чтобы сделать заказ"
        image-url="/package-icon.png"
      />

      <infoBlock
        v-if="orderId"
        title="Заказ оформлен"
        :description="`Ваш заказ (#${orderId}) оформлен`"
        image-url="/order-success-icon.png"
      />
    </div>

    <div action="send.php" method="post" v-else class="h-full p-10 overflow-y-auto">
      <CartItemlist />

      <div class="flex flex-col gap-4 mt-7">
        <div class="flex gap-2">
          <span>Итого:</span>
          <div class="flex-1 border-b border-dashed"></div>
          <b>{{ totalPrice }} руб</b>
        </div>

        <div v-if="!isCreatingOrder" action="" method="">
          <input
            type="text"
            name="FIO"
            v-model="customerName1"
            placeholder="Имя получателя"
            class="input-field w-64"
          />
          <input
            type="tel"
            name="tel"
            v-model="customerNumber1"
            placeholder="Ваш телефон"
            class="input-field w-64"
          />

          <input
            type="email"
            name="email"
            v-model="customerNumber2"
            placeholder="Ваша почта"
            class="input-field w-64"
          />
        </div>
      </div>

      <button
        :disabled="!canPlaceOrder"
        @click="createOrderIfFormFilled()"
        class="mt-4 transition bg-lime-500 w-full rounded-xl py-3 text-white disabled: bg-slate-300 hover:bg-lime-600 active:bg-lime-700 cursor-pointer"
      >
        Оформить заказ
      </button>
    </div>
  </div>
</template>
