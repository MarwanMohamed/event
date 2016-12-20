<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>

      <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
      <script>
          (function() {

            var pusher = new Pusher('dfa31f9342a5431a5927', {
                encrypted: true
            });

            var channel = pusher.subscribe('test');

            channel.bind('App\\Events\\UserHasRegister', function(data) {
             alert(data.message);
           });

          })();
      </script>
    </body>
</html>
