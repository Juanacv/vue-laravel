<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
    </head>
    <body>
      <div id="root">
        <li v-for="skill in skills" v-text="skill"></li>
      </div>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
       <script src="https://unpkg.com/vue@2.3.4"></script>
       <script src="/vue-app/public/js/app.js"></script>
    </body>
</html>
