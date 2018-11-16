
@extends('layouts.app')
@section('content')

    <div class="q-pa-sm">
         {{$data}}
         <component-a></component-a>
    </div>
@endsection
@section('footer')
    <script type="text/javascript" src="{{ URL::asset('js/Modules/Ayarlar.js') }}"></script>
@endsection
