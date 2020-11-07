<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<style type="text/css">
		.izmenIMG{
			height: 200px;
			width: 350px;
			background: black;
			position: absolute;
			left: 80px;
			top: 100px;
			display: none;
		}
	</style>
  </head>
  <body>
  	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','instagram');
		$query = mysqli_query($con, "SELECT * FROM posts");
		$zapros = "SELECT * FROM posts";
		$tabl = mysqli_query($con, $zapros);
	 ?>
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

	<div class="col-6 mx-auto">
		
	</div>

	<div class="col-6 mx-auto pt-4" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="col-2 px-0 pl-2 mx-auto mt-4">
			<a class="mt-4" href="dobavit.php" >
				<img src="img/plus.png" class="w-25">
			</a>
		</div>
		<div class="row"> 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->

			<div class="col-8 px-0 my-1"> 
				
				<?php
					for ($i=0; $i <$tabl->num_rows ; $i++) { 
						$stroka = $query->fetch_assoc();
					
				 ?>			
				<!--САМ ПОСТ-->
				<div class="mt-5 border rounded">  
				 


					<div class="col-12 px-1">
						<div class="row">
							<div class="col-1 text-right pb-4 pt-2 px-0 ml-4">
								<img src="img/icon.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 pb-4 pt-3 text-left">
								<h6 class="mb-0"><?php echo $stroka["users"] ?></h6>
								<p class="mb-0">Якутск</p>	
							</div>													
						</div>
					</div>
					<div class="col-12 img" style="height: 400px; background-image: url(<?php echo $stroka["img"] ?>); background-size: 100% 100%"> <!--картинка поста-->
						<div class="izmenIMG" >
							<form method="GET" action="update2.php" class="text-center">
								<input type="" name="id" class="col-12" style="display: none;" value=<?php echo $stroka["id"] ?>>
								<p><input type="file" name="img" multiple accept="image/*,image/jpeg" class="bg-white mt-4"></p>
								
								<h5 class="font-weight-bold text-white">Изменить изображение</h5>
								<div class="row ">
									<div class="text-center col-12">
									<button class="btn btn-success da">Да</button>
									<button type="button" class="btn btn-danger no">Нет</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-12 py-2">  <!--текстовые элементы поста-->
						<div>
							<p>Lol, KEK еще 13</p>
						</div>
						<div>
							<p class="textt"><?php echo $stroka["text"] ?></p>
						</div>


						<div class="col-12 py-2">
							<form method="GET" action="update.php">
								<input type="" name="id" class="col-12" style="display: none;" value=<?php echo $stroka["id"] ?>>
								<input type="" name="text" class="col-12 inputTEXT" style="display: none;" value="<?php echo $stroka["text"] ?>">
								<div class="row">
									<button class="btn btn-primary btnredact" style="display: none;">Редактировать</button>
									<button class="btn btn-danger otmena" style="display: none;">Отмена</button>
								</div>
							</form>
						</div>

						<div>
							<p>5 недель назад</p>
						</div>	
						<form method="GET" action="delete.php">
							<input type="" name="id" class="col-12" style="display: none;" value=<?php echo $stroka["id"] ?>>
							<button class="btn btn-danger">Удалить</button>
						</form>				
					</div>
					
				</div>
				<!-- ПОСТ ЗАКРЫЛСЯ-->
				<?php 
					}
				 ?>
			
			</div> 
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->


			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-2 px-0">
								<img src="img/3.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10">
								<h6 class="mb-0">Nickname</h6>
								<p class="text-secondary mb-0">Name</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="img/JF.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>jimmyfallon</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="img/pew.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>PewDiePie</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="img/kodz.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>Hideo Kojima</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="img/mbn.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">mbn360</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="img/9gag.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">9gag</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="img/groot.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">groot</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		let textt = document.querySelectorAll(".textt");
		let img = document.querySelectorAll(".img");
		let inputTEXT = document.querySelectorAll(".inputTEXT");
		let izmenIMG = document.querySelectorAll(".izmenIMG");
		let btn = document.querySelectorAll(".btnredact");
		let otmena = document.querySelectorAll(".otmena");
		let no = document.querySelectorAll(".no");
		for (let i = 0; i < btn.length; i++) {
			textt[i].onclick = function(){
				textt[i].style.display = "none";
				inputTEXT[i].style.display = "block";
				btn[i].style.display = "block";
				otmena[i].style.display = "block";
				otmena[i].onclick = function(){ 
					inputTEXT[i].style.display = "none";
					btn[i].style.display = "none";
					otmena[i].style.display = "none";
					textt[i].style.display = "block";
				}
			};

			img[i].onclick = function(){
				izmenIMG[i].style.display = "block";
			};
			no[i].onclick = function(){ 
				izmenIMG[i].style.display = "none";
			}
		}
		
	</script>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>