<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
        <style>body { padding-top: 40px; }</style>
    </head>
    <body>
      <div id="app">
        <example></example>
        @include('projects.list')
        <form method="POST" action="/vue-app/public/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
          <div class="control">
            <label for="name" class="label">Project Name:</label>
            <input type="text" id="name" name="name" class="input" v-model="form.name">
            <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
          </div>
          <div class="control">
            <label for="description" class="label">Project Description:</label>
            <input type="text" id="description" name="description" class="input" v-model="form.description">
            <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
          </div>
          <div class="control">
            <button class="button is-primary" :disabled="form.errors.any()">Create</button>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
      </div>
      <script src="/vue-app/public/js/vendor.js"></script>
       <script src="/vue-app/public/js/app.js"></script>
    </body>
</html>
