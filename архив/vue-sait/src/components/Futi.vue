<template>
  <footer class="footer-container">
    <div class="footer-left">
      <ul>
        <router-link to="/rabota"><li class="footer-link">Работа в фирме "1С"</li></router-link>
        <router-link to="/vacansii"><li class="footer-link">Вакансии в фирме "1С"</li></router-link>
        <p class="footer-text">ООО "АРКИС" © 2018 - 2024</p>
      </ul>
    </div>
    <img height="100" width="250" src="/trace.svg" alt="1C" class="footer-logo" />
    <div class="footer-right">
      <a href="https://wa.me/++79064347021" target="_blank">
        <img height="50" width="50" src="/whatsapp-whats-app-svgrepo-com.svg" alt="whatsapp" />
      </a>
      <a href="https://t.me/+79064347021" target="_blank" rel="noopener noreferrer">
        <img height="50" width="50" src="/telegram-svgrepo-com.svg" alt="Telegram" />
      </a>
      <a href="https://vk.com/id421064756" target="_blank" rel="noopener noreferrer">
        <img src="/vk-1-logo-svgrepo-com.svg" alt="ВКонтакте" height="50" width="50" />
      </a>
    </div>
  </footer>
</template>

<style scoped>
.footer-container {
  display: flex;
  justify-content: space-between;
  margin: 0 auto;
  align-items: center;
  width: 80%;

  /* Добавим внутренние отступы для улучшения отображения */
  /* Добавим фоновый цвет для контейнера футера */
}

.footer-left,
.footer-right {
  display: flex;
  flex-direction: row;
}

.footer-link {
  list-style-type: none;
  font-size: 1.2rem;
  /* Отступ между ссылками в списке */
}

.footer-text {
  font-size: 0.8rem;
  margin-top: 10px; /* Отступ сверху для текста в подвале */
}

@media (max-width: 790px) {
  .footer-container {
    flex-direction: row;
    text-align: left;
  }
  .footer-left,
  .footer-right {
    text-align: left;
    flex-direction: row;
    align-items: center;
  }

  .footer-link {
    font-size: 0.9rem; /* Уменьшим размер текста для маленьких экранов */
  }

  .footer-text {
    font-size: 0.6rem; /* Уменьшим размер текста в подвале для маленьких экранов */
  }

  .footer-logo {
    width: 150px;
    height: 200px;
  }

  .footer-right a img {
    width: 40px;
    height: 40px;
  }
}
</style>
