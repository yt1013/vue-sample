<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- ←① -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- ←② -->
    <title>Laravel-Vue-todo</title>
</head>

<body>
<div id="app">@yield('content')</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script src="https://unpkg.com/vuex@3.5.1/dist/vuex.js"></script>
<script src="{{ asset('js/app.js') }}"></script> <!-- ←④ -->
</body>

</html>
