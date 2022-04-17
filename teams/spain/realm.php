<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/team.css">
	<title>footballsite</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>


<body>
	<?php

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://v3.football.api-sports.io/players/squads?team=541',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'x-rapidapi-key: 06e579cb3495c840201e0e7869b648b7'
		),
	));
	$response = curl_exec($curl);
	curl_close($curl);
	$jsonData = $response;
	file_put_contents('t.json', $jsonData);
	?>
	<script>

	</script>
	<div class="container">

		<div class="main">
			<div class="nav">
				<div class="logo">
					<a href="barca.php"><img src="../../img/teams_logo/barca.png" alt="#" id="img" class="nav__logo"></a>
				</div>
				<div class="listing">
					<ul class="list">
						<li class="nav__list"><a href="../../index.html" class="nav__link">Главная</a></li>
						<li class="nav__list"><a href="#match" class="nav__link"> Расписание</a></li>
						<li class="nav__list"><a href="#sostav" class="nav__link"> Состав</a></li>
						<li class="nav__list"><a href="#Dost" class="nav__link"> Достижения</a></li>
						<li class="nav__list"><a href="#Stadion" class="nav__link"> Стадион</a></li>
					</ul>
				</div>
			</div>

			<section id=match>
				<div class="shedule" id="wg-api-football-fixtures" data-host="v3.football.api-sports.io" data-refresh="60" data-date="" data-league="" data-team="541" data-season="2021" data-last="" data-next="2" data-key="06e579cb3495c840201e0e7869b648b7" data-theme="" data-show-errors="false" class="api_football_loader">
				</div>
				<script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js">
				</script>
			</section>

			<section id="sostav">
				<div class="titles__title">Состав</div>
				<table class="response">
					<div class="content"></div>
					<tr>
					</tr>
				</table>
				<script type="text/javascript">
					$(function() {
						$.getJSON('t.json', function(data) {
							document.querySelector('.content').innerHTML = `<table class ="sostav"></table>`;
							for (var i = 0; i < data.response[0].players.length; i++) {
								let row = document.createElement('tr')
								row.innerHTML = `<img class=table__photo src= ${data.response[0].players[i].photo}></td ><td class=squads__table> ${data.response[0].players[i].number}</td ><td class=squads__table> ${data.response[0].players[i].name}</td >`
								document.querySelector(".sostav").appendChild(row);
							}
						});
					});
				</script>
			</section>

			<section id="Stadion">
				<div class="stadium">
					<h1 class="title__stadium">Стадион</h1>
					<div class="photo__stadium">
						<img alt="#" class="stadium__img" src="../../img/stadium/emirates.jpg">
					</div>
					<div class="about__stadium">
						<h1 class="stadium-info__title">Информация о стадионе</h1>
						<div class="stadium-info__text">
							<p class="stadium__text">Название: <span>Estadio Santiago Bernabéu</span></p>
							<p class="stadium__text">Местоположение: <span>Мадрид, Испания</span></p>
							<p class="stadium__text">Построен: <span>1947</span></p>
							<p class="stadium__text">Категория УЕФА: <span>4</span></p>
							<p class="stadium__text">Стоимость: <span>£ 289 млн </span></p>
							<p class="stadium__text">Вместимость: <span>81 044</span></p>
							<p class="stadium__text">Размеры поля: <span>105 * 68 м</span></p>
						</div>
					</div>
				</div>
			</section>

			<section id="Dost">
				<h1 class="titles__title">Достижения</h1>
				<div class="titles">
					<div class="apl">
						<div class="titles__photo spainlig_logo"><img src="../../img/tour__logo/la liga.jpeg" alt="#" width="" height="140px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">34</p>
						</div>
						<div class="titles__name spaincup_logo">Испанская Ла Лига</div>
					</div>
					<div class="titles__ka">
						<div class="titles__photo spaincup__logo"><img src="../../img/tour__logo/kubok-ispanii.png" alt="#" width="50%" height="120px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">19</p>
						</div>
						<div class="titles__name">Кубок Испании</div>
					</div>
					<div class="titles__sa">
						<div class="titles__photo"><img src="../../img/tour__logo/supercup spain.png" alt="#" width="150px" height="140px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">12</p>
						</div>
						<div class="titles__name">Суперкубок Испании</div>
					</div>
					<div class="ligue-champions">
						<div class="titles__photo"><img src="../../img/lc.png" alt="#" width="150px" height="140px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">13</p>
						</div>
						<div class="titles__name">Лига Чемпионов</div>
					</div>
					<div class="ligue-europe">
						<div class="titles__photo"><img src="../../img/le.png" alt="#" width="100px" height="140px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">2</p>
						</div>
						<div class="titles__name">Лига Европы</div>
					</div>
					<div class="se">
						<div class="titles__photo"><img src="../../img/se.jpg" alt="#" width="200px" height="140px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">4</p>
						</div>
						<div class="titles__name">Суперкубок Европы</div>
					</div>
					<div class="int-cw">
						<div class="titles__photo"><img src="../../img/cw.png" alt="#" width="90px" height="140px"></div>
						<div class="titles__win">
							<p class="titles__win-text"> Обладатели:</p>
							<p class="titles__number">4</p>
						</div>
						<div class="titles__name">Международный Клубный Чемпионат Мира</div>
					</div>
				</div>
			</section>
		</div>
	</div>

</body>

</html>