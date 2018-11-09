@extends('layouts.app')
@section('content')

<div class="q-pa-sm">

<q-list highlight>
  <q-list-header>Recent chats</q-list-header>
  <q-item>
    <q-item-side>
      <q-item-tile avatar>
        <img src="statics/boy-avatar.png">
      </q-item-tile>
    </q-item-side>
    <q-item-main label="John Doe" />
    <q-item-side right>
      <q-item-tile icon="chat_bubble" color="green" />
    </q-item-side>
  </q-item>
  <q-item>
    <q-item-side avatar="statics/linux-avatar.png" />
    <q-item-main label="Jim Doe" />
    <q-item-side right icon="chat_bubble" />
  </q-item>
  <q-item-separator />
  <q-list-header>Previous chats</q-list-header>
  <q-item>
    <q-item-side avatar="statics/guy-avatar.png" />
    <q-item-main label="Jack Doe" />
  </q-item>
</q-list>
<q-field
  icon="cloud"
  label="Your Gmail"
  helper="Helper"
  error-label="We need a valid email"
  
>
  <q-input suffix="@gmail.com" v-model="text" />
</q-field>

<q-modal v-model="opened" :content-css="{minWidth: '80vw', minHeight: '80vh'}">
    <h4>Basic Modal</h4>
    <q-btn
      color="primary"
      @click="opened = false"
      label="Close"
    />
  </q-modal>
<q-toolbar slot="header" color="light" text-color="primary" >
    <q-toolbar-title>Cari Bilgileri</q-toolbar-title>
     <q-btn icon="add" @click="opened=true" />
</q-toolbar>
  <my-comp>
  
  </my-comp>
</div>
@endsection
@section('footer')

    <script type="text/x-template" id="myComp">
      <q-page padding>
        <div class="row flex-center absolute-full">
         My Components
        </div>
      </q-page>
    </script>
    
    <script>
    Vue.component('my-comp', {
        template: '#myComp'
    })
     var vm =  new Vue({
        el: '#q-app',
        data: function () {
          return {
            appData,
            opened: false,
            text : 'asd'
          }
        },
        methods: {
          launch: function (url) {
            this.$q.notify('Message')
            
          }
        }
      })

    </script>
@endsection
