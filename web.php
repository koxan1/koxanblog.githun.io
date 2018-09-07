
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script>src="java.js"</script>
	<title>Учу Java</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div id="main">
	 <div class=title>
		 <h1>Блог Коханского</h1>
	 </div>
	 <div class=photo>
		 <img src="лицо.png" />
	 </div>
	</div>
	<div id="sidebar">
		<div class=toggle-btn onclick="openMenu()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul>
			<li>Информация</li>
			<li><a href="/">Главная</a></li>
			<li><a href="https:vk.com/donilkomameprivet" target="_blank">Контакты</a></li>
			<li><a href="/">Обо мне</a></li>
		</ul>
	</div>
	<div id="blog">
		<div class="inside">
			<p>Привет! Хочу рассказать о себе. Меня зовут Донилко Дубощит сын Торина, внук Траина, правнук Трора, наследник рода Дурина.
			Как вам всем известно, мой отец погиб в битве пяти воинст, и я унаследовал гору. Но к сожалению, я был мал и правителем
			Эребора стал Дайн, нынишний король трех королевст. По прошествию нескольких лет орки Гундабада напали на Эребор и в этой
	 	битве погиб Дайн. Его место должен был занять я, но его сын устроил государственный переворот и я остался ни с чем.</p>
		</div>
	</div>
	<div id="today">
		<div class="whattoday">
			<h3>08.09.18</h3>
			<p>Очередной раз я проснулся в 6 утра, собрал портфель, умылся, поел.</p>
			<h3>07.09.18</h3>
			<p>Пацаны, держу в курсе. Встретил я значит в таверне 'Горцующий пони' Саске Серого. Ну, мы разговорились
			и решили идти войной на Торина III, гору мне возвращать. Пока думаем че да как.</p>


		</div>


		</div>

	</div>
</body>
<script>
function openMenu() {
	document.getElementById('sidebar').classList.toggle('active');
}


</script>

</html>
