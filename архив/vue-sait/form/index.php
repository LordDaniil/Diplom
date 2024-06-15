<script setup>
import { ref, computed, inject } from 'vue'
import axios from 'axios'


</script>

<form v-if="!isCreatingOrder" action="send.php" method="Post">
          <input
            type="text"
            name = "FIO"
            v-model="customerName1"
            placeholder="Имя получателя"
            class="input-field w-64"
          />
          <input
            type="tel"
            name = "tel"
            v-model="customerNumber1"
            placeholder="Ваш телефон"
            class="input-field w-64"
          />

          <input
            type="email"
            name = "email"
            v-model="customerNumber2"
            placeholder="Ваша почта"
            class="input-field w-64"
          />

        </form>