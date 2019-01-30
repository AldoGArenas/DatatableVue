<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<script src="{{asset('js/app.js')}}"></script>

    </head>
    <body>

            <div id="datos">
         <b-container>
           {{-- <b-jumbotron header="Bootstrap Vue"
                        lead="Bootstrap 4 Components for Vue.js 2"
            >
            <p>For more information visit our website</p>
            <b-btn variant="primary" href="https://bootstrap-vue.js.org/">More Info</b-btn>
            </b-jumbotron>

        <b-form-group horizontal
                      :label-cols="4"
                      description="Let us know your name."
                      label="Enter your name"
        >
        <b-form-input v-model.trim="name"></b-form-input>
        </b-form-group>
        <b-alert variant="success" :show="showAlert">
          Hello @{{name}}
        </b-alert> --}}
        <tablacomponent/>

      </b-container>
    </div>




    <!-- Start running your app -->
    <script>
       new Vue({
        el: "#datos",
        data: {
          name: 'Chirrion'
        },
        components:{
           'tablacomponent': tablacomponent
        },
        computed: {
          showAlert() {
            return this.name.length > 4 ? true : false;
          }
        }
      })
    </script>
    </body>
</html>
