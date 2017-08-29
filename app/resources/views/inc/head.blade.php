<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@if(isset( $title ))  {{$title}} @endif</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="/mage/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ url('/iconfont/material-icons.css') }}">
    <link href="{{ url('/css/roboto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <link href="{{ url('/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <link href="{{ url('/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <!-- You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>