<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title> Assessment | {{ Request::segment(1)?Request::segment(1):"Orders"; }} </title>
	<link rel="shortcut icon" href="{{ url('storage/images/favicon.png') }}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/vendors.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/plugins/calendars/fullcalendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/calendars/fullcalendar.min.css') }}">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/jquery.mCustomScrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/CustomScrollbar.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/circle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/style.css') }}">
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
