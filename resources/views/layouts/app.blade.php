<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoftCom - Softwares Made In Nigeria</title>
    <link rel="stylesheet" type="text/css" href={{asset( 'css/app.css')}}>
</head>

<body class= 'bg-light pb-5'>
       @include('layouts.navbar')
       @include('layouts.filter-bar')

    <div id='app'>
      @yield('content')
    </div>
    
    <script src={{asset( 'js/app.js')}}></script>
</body>
</html>