
@extends('layouts.app')
@section('content')
 
  <div class="q-pa-sm">
    <h1>Home Page </h1>
     <component-a></component-a>
  </div>
@endsection
@section('footer')
    <script type="text/javascript" src="{{ URL::asset('js/Modules/Home.js') }}"></script>
@endsection
