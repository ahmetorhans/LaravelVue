<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width">
    <title>Wmatik</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link href="css/quasar.css" rel="stylesheet" type="text/css">


 </head>
  <body>
    <div id="qapp">
      <q-layout >
        <q-layout-header class="no-shadow">
          <q-toolbar style="height: 80px;border-bottom:1px solid #ddd;background-color:#0078d7">
            <q-btn flat round dense @click="drawerState = !drawerState" icon="menu"></q-btn>
            <q-toolbar-title>
              Laravel Vue 
              <div slot="subtitle">wmatik </div>
            </q-toolbar-title>
          </q-toolbar>
        </q-layout-header>

        <q-layout-drawer v-model="drawerState" content-class="bg-grey-1">
          <q-list no-border link inset-delimiter>
            <q-list-header>Menu</q-list-header>
            <q-item @click.native="gez('ayarlar')">
              <q-item-side icon="settings"></q-item-side><q-item-main label="Ayarlar" ></q-item-main>
            </q-item>
            <q-item @click.native="gez('yazi')">
              <q-item-side icon="title"></q-item-side><q-item-main label="Yazı" ></q-item-main>
            </q-item>

          </q-list>
        </q-layout-drawer>

        <q-page-container>
        <div id="app" v-pre>
             @yield('content')
        </div>

        </q-page-container>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.min.js"></script>
    <script src="js/quasar.js"></script>
    <script>

        new Vue({
        el: '#qapp',
        data: function () {
          return {
            drawerState: true,
            opened:false
         }  
        },
        methods : {
          gez : function (url){
            window.location.href= url;
          }
        }
      })
    </script>
    @yield('footer')
  </body>
</html>
