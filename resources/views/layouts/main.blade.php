<!-- Main Layout with the Header Big Image -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{@$company}}</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::asset("asset/css/bootstrap.min.css")}}">

    <!-- Custom CSS -->
    <link  rel="stylesheet" href="{{URL::asset("asset/css/agency.css")}}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{URL::asset("asset/font-awesome/css/font-awesome.min.css")}}" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap DataTable -->
    <link href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    
        @include('layouts.navblack')
    
        @yield('content')
    
        @include('layouts.footer')
    
    </body>
</html>