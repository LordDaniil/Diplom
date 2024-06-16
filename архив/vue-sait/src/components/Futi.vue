<template>
  <footer
    class="h-44 pt-10 w-4/5 mx-auto content-center auto-rows-auto pb-10 flex flex-row items-center justify-between"
  >
    <div class="flex flex-col items-start">
      <ul class="">
        <router-link to="/rabota"
          ><li class="pt-4 text-xl max-w-xs border-solid">Работа в фирме "1С"</li></router-link
        >
        <router-link to="/vacansii"
          ><li class="pb-4 text-xl max-w-xs border-solid">Вакансии в фирме "1С"</li></router-link
        >
        <p class="text-xs">ООО "АРКИС" © 2018 - 2024</p>
      </ul>
    </div>
    <img height="100" width="250" src="/trace.svg" alt="1C" />
    <div class="flex flex-row space-x-3 pt-5">
      <a href="https://api.whatsapp.com/send?phone=89054012969" target="_blank"
        ><img height="50" width="50" src="/whatsapp-whats-app-svgrepo-com.svg" alt="whatsapp"
      /></a>

      <a href="https://t.me/JackP1888" target="_blank" rel="noopener noreferrer"
        ><img height="50" width="50" src="/telegram-svgrepo-com.svg" alt="Telegram"
      /></a>
      <a href="https://vk.com/prostoghora" target="_blank" rel="noopener noreferrer">
        <img src="/vk-1-logo-svgrepo-com.svg" alt="ВКонтакте" height="50" width="50" />
      </a>
    </div>
  </footer>
</template>
