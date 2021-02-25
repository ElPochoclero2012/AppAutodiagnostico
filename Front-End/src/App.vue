<template>
    <div id="app">
        <router-view />
    </div>
</template>

<script src="./src/resources/notificationConfig.js"></script>
<script src="./src/resources/notificationConfirmation.js"></script>
<script src="./src/resources/notificationList.js"></script>
<script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>

<script>
  const beamsClient = new PusherPushNotifications.Client({
    instanceId: '8f1649b4-9b49-4f0a-b12b-f7f6548622a4',
  });

  beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('hello'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error);
</script>


<script>

export default {
    name: "App",
};
</script>


<style>
#app {
    font-family: "Avenir", Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 0px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: "montserrat", sans-serif;
}
header {
    width: 100vw;
    background-color: #222;
    padding: 15px;
}
</style>
