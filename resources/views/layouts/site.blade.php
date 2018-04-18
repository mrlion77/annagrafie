<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-26923468-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-26923468-1');
    </script>

    <title>annagrafie de votre vie</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="{{ trans('descriptions.descriptions') }}"/>
    <meta name="keywords" content="{{ trans('descriptions.keywords') }}"/>
    <meta name="author" content="mrlion"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href='/css/clear.css'/>
    <link rel="stylesheet" type="text/css" href='/css/common.css'/>
    <link rel="stylesheet" type="text/css" href='/css/font-awesome.min.css'/>
    <link rel="stylesheet" type="text/css" href='/css/carouFredSel.css'/>
    <link rel="stylesheet" type="text/css" href='/css/prettyPhoto.css'/>
    <link rel="stylesheet" type="text/css" href='/css/sm-clean.css'/>
    <link rel="stylesheet" type="text/css" href='/css/style.css'/>

    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

</head>
<body>

@yield('content')

@yield('footer_scripts')

</body>
</html>
