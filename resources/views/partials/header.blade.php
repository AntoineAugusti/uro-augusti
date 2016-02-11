<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Michel Augusti"/>
    <meta name="publisher" content="Michel Augusti"/>
    <meta name="google-site-verification" content="yIrmHc13V2t9G-Boeq4ES83JmLnUFGugld0I8KjIFRA" />
    @if (isset($title))
        <title>{{ $title }} - Dr Michel Augusti</title>
    @else
        <title>Docteur Michel Augusti</title>
    @endif

    <link rel="stylesheet" href="{{ elixir('assets/css/all.css') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
</head>

<body>
    @include('partials.nav')

    <div class="container">
