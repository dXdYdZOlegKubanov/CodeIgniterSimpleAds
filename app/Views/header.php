<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Учебная доска объявлений</title>
	<style>
		.tp {background-color:#eeeeee;}
		.sc {border:1px solid gray;}
		.ad {border-top:1px solid gray;}
	</style>
  </head>
  <body>
   <!--nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Учебная доска объявлений</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="nav-item active"><a href="#">Home</a></li>
		  <li class="nav-item"><a class="nav-link" href="#">Page 1</a></li>
		  <li class="nav-item"><a class="nav-link" href="#">Page 2</a></li>
		  <li class="nav-item"><a class="nav-link" href="#">Page 3</a></li>
		</ul>
	  </div>
	</nav-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
	
	<div class="container">
		<div class="navbar navbar-brand tp">Учебная доска объявлений</div>
		<div class="row">
			<div class="col-sm-2">
			  <?php /* var_dump($categories);*/ ?>
			  Категории:
			  <ul class="nav flex-column">
			  <?php foreach($categories as $category): ?>
				<li class="nav-item"><a class="nav-link<?php if($category['id']==$category_id):?> disabled<?php endif; ?>" href='/ads/index/<?=$category['id']?>'><?=$category['name']?></a></li>
			  <?php endforeach; ?>
			  </ul>
			</div>
			<div class="col">		