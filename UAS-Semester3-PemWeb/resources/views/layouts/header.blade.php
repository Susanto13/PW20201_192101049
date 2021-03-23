<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UAS Semester 3 Pemrogaraman Web | Susanto 192101049</title>
		<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
		<link  rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('iziToast-master/dist/css/iziToast.min.css') }}">
	</head>
	<body>
	<?php 
    	$route = Route::currentRouteName();
	?>

	<div class="container">
		<div class="row justify-content-center" style="padding: 30px 0px;">
			<div class="col-md-8" >
				<div class="card">
					<div class="card-body">
						<h3 style="text-align: center;">Data Logistik Lembar Kerja Siswa</h3>
						<div style="text-align: center;">Programmer: Susanto</div>

						<hr>

						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link {{ $route == 'stock.index' || $route == 'stock.edit' ? 'active' : '' }}" href="{{ route('stock.index') }}">Input Stock</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ $route == 'distribusi.index' || $route == 'distribusi.edit' ? 'active' : '' }}" href="{{ route('distribusi.index') }}">Distribusi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ $route == 'checkStock.index' ? 'active' : '' }}" href="{{ route('checkStock.index') }}">Check Stock</a>
							</li>
						</ul>
						<br>



					