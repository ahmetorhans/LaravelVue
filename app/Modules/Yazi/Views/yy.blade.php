@extends('layouts.app')
@section('content')

<div id="app">

  <q-toolbar slot="header" color="light" text-color="primary" >
      <q-toolbar-title>Cari Bilgileri</q-toolbar-title>
      <q-btn label="New item" />
  </q-toolbar>

  <q-btn label="New item" />
</div>
@endsection
@section('footer')

   <script type="text/javascript" src="{{ URL::asset('js/Modules/Yazi.js') }}"></script> 
   <script src="https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.min.js"></script>
    <script src="js/quasar.js"></script>
    
@endsection
