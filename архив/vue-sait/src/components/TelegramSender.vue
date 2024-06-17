<script>
const sendMessage = () => {
  const botToken = '7127579133:AAHPIijQ_iSz__5OGjUBks-gVcKtIGtXWuA'
  const chatId = 'JackP1888'
  const id = '1' // Пример значения ID полученного от mokky.dev

  const message = `Новое сообщение:\nID: ${id}`

  fetch(`https://api.telegram.org/bot${botToken}/sendMessage`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      chat_id: chatId,
      text: message
    })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Network response was not ok')
      }
      return response.json()
    })
    .then((data) => {
      console.log('Message sent:', data)
      alert('Сообщение успешно отправлено в Telegram!')
    })
    .catch((error) => {
      console.error('Error sending message:', error)
      alert('Произошла ошибка при отправке сообщения в Telegram.')
    })
}

export default {
  sendMessage
}
</script>

<template>
  <div>
    <button @click="sendMessage">Отправить сообщение в Telegram</button>
  </div>
</template>
