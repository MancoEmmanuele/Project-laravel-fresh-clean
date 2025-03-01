<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    
    @vite (['resources/css/app.css','resources/js/app.js'])



  <body class="bg-dark-subtle">


<div class="min-vh-100">
<x-navbar></x-navbar>
<x-header headerTitle={{$headerTitle}}></x-header>
{{$slot}}

</div>

<x-footer></x-footer>

    </body>
  </html>