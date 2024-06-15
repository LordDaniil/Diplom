<script setup>
import { ref, getCurrentInstance } from 'vue'

const userData = ref({
  name: '',
  email: '',
  password: ''
})

const registerUser = () => {
  const { emitter } = getCurrentInstance()
  // Получаем данные пользователя из формы
  const { name, email, password } = userData.value

  // Сохраняем данные пользователя в Local Storage
  const newUser = {
    name,
    email,
    password
  }
  localStorage.setItem('user', JSON.stringify(newUser))

  // Очищаем форму после регистрации
  userData.value = {
    name: '',
    email: '',
    password: ''
  }
  emitter.emit('registration-success')
}
</script>

<template>
  <form @submit.prevent="registerUser">
    <input type="text" v-model="userData.name" placeholder="Имя" required />
    <input type="email" v-model="userData.email" placeholder="Электронная почта" required />
    <input type="password" v-model="userData.password" placeholder="Пароль" required />
    <button type="submit">Зарегистрироваться</button>
  </form>
</template>
