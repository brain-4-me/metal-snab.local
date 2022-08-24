<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title ?? 'Catalog'}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style>
          .pagination{
            justify-content: center;
          }
          .header{
            height:70px;
          }
          .content{
            display:flex;
          }
          .right_memu{
            width: 70px;
            border-right: 1px solid;
          }
        </style>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    </head>
    <body>
      @yield('content')
    </body>
</html>
