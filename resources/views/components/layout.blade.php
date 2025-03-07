<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabriela&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    @vite (['resources/css/app.css','resources/js/app.js'])



  <body class="bg-dark-subtle">


<div class="min-vh-100">
<x-navbar></x-navbar>
@if(session('message'))
<div class="alert alert-success text-center">
  {{session("message")}}
</div>
   @endif 

<x-header  headerTitle={{$headerTitle}} />
{{$slot}}

</div>

<x-footer></x-footer>

    </body>
  </html>