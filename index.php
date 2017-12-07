<!DOCTYPE html>
<html>
<head>
	<title>Cursos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--	<style>
	html,body{
		min-height: 200vh;
		position: relative;
	}
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		padding-bottom:200px;
	}
	/*topnav*/
	.topnav{

		background-color:  #111111;
		overflow: hidden;
		color: white;
		width: 100%;
		position: fixed;
		top: 0;
		left: 0;
	}
	.topnav a {

		color: white;
		padding: 20px 10%;
		text-decoration: none;
		display: inline-block;
	}
	.topnav a:hover {
		background-color: #333333; 
	}
	/*fim do topnav*/
	/*lista de cursos*/
	.cursos {
		width: 200px;
		list-style: none;
		display: flex;
	}
	.mini{
		width: 200px;
		height: 136px;
		padding: 0px 0px 0px ;
	}
	/*fim da lista de cursos*/
	/*footer*/
	.footer{
		background-color: #000;
		bottom: 0;
		left: 0;
		width: 100%;
		position: absolute;
	}
	.fa{
		font-size: 30px;
		width: 75px;
		text-decoration: none;
		text-align: center;
		margin: 5px 2px;
	}
	.fa:hover{
		opacity: 0.7;
	}
	.fa-facebook{
		background-color: #3B5998; 
		color: white;
	}
	.fa-twitter{
		color: white;
	}
	.fa-linkedin{
		background-color: #007bb5;
		color: white;
	}
	.fa-youtube{
		background-color: #bb0000;
		color: white;
	}
	/*fim do footer*/
</style> -->
</head>
<body>
	<!-- topnav -->
	<nav class="topnav">
		<div><img src=""></div>
		<div>
			<ul>
				<li><a href="">Inicial</a></li>
				<li><a href="">Cursos</a></li>
				<li><a href="contato.php">Contatos</a></li>
			</ul>
			<div>
				<form id="form" action="" method="post">                       
					<input type="text" name="busca" placeholder="buscar">
					<button type="submit" class="btn">Pesquisar</button>
				</form>
			</div>
		</div>
	</nav>
	<!-- fim do topnav -->
	<!-- lista de cursos -->
	<div class="cursos">
		<figure>
			<a href="" target="_blank">
				<div>
					<img src="" alt="imagem do curso">
				</div>
				<figcaption>
					<h4>Título curso</h4>
					<p>Descrição curta</p>
					<span>Preço</span>
					<a href="https://google.com">Página do instrutor</a>
				</figcaption>
			</a>
		</figure>
	</div>
	<!-- fim da lista de cursos -->
	<!-- footer -->
	<div class="footer">
		<p>Desenvolvido por Marco Neiva</p>
		<a href="" class="fa fa-facebook"></a>
		<a href="" class="fa fa-twitter"></a>
		<a href="" class="fa fa-linkedin"></a>
		<a href="" class="fa fa-youtube"></a>
	</div>
	<!-- fim do footer -->
</body>
</html>