<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <title>{{ $title }} - Dr Michel Augusti</title>
    <meta name="description" content="{!! $description !!}">

    <meta name="author" content="Michel Augusti"/>

    <!-- Google verification -->
    <meta name="google-site-verification" content="yIrmHc13V2t9G-Boeq4ES83JmLnUFGugld0I8KjIFRA" />
    <link href="https://plus.google.com/113939250764481617219" rel="publisher" />

    <!-- DNS prefetch -->
    <link href='//fonts.googleapis.com' rel="dns-prefetch">
    <link href='//fonts.gstatic.com' rel="dns-prefetch">

    <!-- Assets -->
    <link rel="stylesheet" href="{{ elixir('assets/css/all.css') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-12045924-33', 'auto');
      ga('send', 'pageview');
    </script>
</head>

<body>
    @include('partials.nav')

    <div class="container">
