<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="img/logo.png" class="w-100">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="img/line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<img src="img/logo2.png" class="w-100">
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6"></div>
						<div class="col-2 px-0 pl-2">
							<img src="img/1.png" class="w-50">
						</div>
						<div class="col-2 px-0 pl-2">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="img/2.png" class="w-50">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="img/3.png" class="w-50">
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6 mx-auto text-center mt-4">
		<form method="GET" action="insert.php">
			<input type="" name="user" placeholder="имя" class="col-12">
			<input type="" name="img" placeholder="картинка" class="col-12 mt-2">
			<input type="" name="text" placeholder="текст" class="col-12 mt-2">
			<button class="btn btn-success mt-2">Добавить</button>
		</form>
	</div>
</body>
</html>