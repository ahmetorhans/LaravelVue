@extends('layouts.app')
@section('content')
<q-modal v-model="opened">
    <h4>Basic Modal</h4>
    <q-btn
      color="primary"
      @click="opened = false"
      label="Close"
    />
  </q-modal>
<div class="q-pa-sm">

<q-toolbar slot="header" color="light" text-color="primary" >
    <q-toolbar-title>Cari Bilgileriss</q-toolbar-title>
     <q-btn icon="add" @click="opened=true"/>
</q-toolbar>
@{{ opened }}asd
  <my-comp></my-comp>
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
            opened: 'false',
            appData,
            text : 'asd'
          }
        },
        methods: {
          launch: function (url) {
            Quasar.utils.openURL(url)
          }
        }
      })

    </script>
@endsection
