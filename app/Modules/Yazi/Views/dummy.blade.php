
@extends('layouts.app')
@section('content')

  <q-modal v-model="opened">
      <h4>Basic Modal</h4>
      <q-btn
        color="primary"
        v-on:click="opened = false"
        label="Close"
      />
    </q-modal>
  <div class="q-pa-sm">
  @{{sx}}
  
    <component-a></component-a>
  </div>
@endsection
@section('footer')
    <script type="text/javascript" src="{{ URL::asset('js/Modules/Yazi.js') }}"></script>
@endsection
