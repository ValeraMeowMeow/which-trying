<!DOCTYPE html>
<html>

	<head>
		<!-- /// -->
		<meta charset="utf-8">
		
		<!-- Название страницы -->
		<title>Фан-сайт | Noize MC | О группе</title>
		
		<!-- Подключаемые файлы -->
		<link href="Styles-горизонт.css" rel="stylesheet" type="text/css" media="all and (orientation:landscape)">
		<link href="Styles-вертикаль.css" rel="stylesheet" type="text/css" media="all and (orientation:portrait)">
		<link rel="shortcut icon" href="Файлы/Иконка.png" type="image/png"> 
		
		<!-- Скрипты -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#button-up').fadeIn();
				} 
				else {
				$('#button-up').fadeOut();
				}
			});
			$('#button-up').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 500);
			return false;
			});
		});
		</script>
		
	</head>

	<body class="margin_body">
	
		<!-- ГЛАВНАЯ -->
		<span class="position_noize">
			<a href="main.php" title="Фан-сайт | Noize MC">
				<img src="Файлы/NoizeMC.png" alt="Noize MC">
			</a>
		</span>
		
		<!-- МЕНЮ -->
		<header class="menu">
			<div class="button">
				<a href="poster.php" title="Фан-сайт | Noize MC | Афиша">
					<img src="Файлы/афишаМ.png" title="Афиша">
				</a>
				<a href="media.php" title="Фан-сайт | Noize MC | Медиа">
					<img src="Файлы/медиаМ.png" title="Медиа">
				</a>
				<a href="shop.php" title="Фан-сайт | Noize MC | Магазин">
					<img src="Файлы/магазМ.png" title="Магазин">
				</a>
				<a href="forum.php" title="Фан-сайт | Noize MC | Форум">
					<img src="Файлы/форумМ.png" title="Форум">
				</a>
				<a href="news.php" title="Фан-сайт | Noize MC | Новости">
					<img src="Файлы/новостиМ.png" title="Новости">
				</a>
				<a href="aboutthegroup.php" title="Фан-сайт | Noize MC | О группе">
					<img src="Файлы/группаМ.png" title="О группе">
				</a>
				<?php
    			/* Проверяем авторизован ли пользователь */
    			if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        		/* Если нет -> Вход */
				?>
        		<a href="login.php" title="Вход">
					<img src="Файлы/вход.png" title="Вход">
				</a>
				<?php
    				} else {
        		/* Если авторизован -> Выход */
				?> 
        		<a href="out.php" title="Выйти">
					<img src="Файлы/выйти.png" title="Выйти">
				</a>
				<?php
   					}
				?>
			</div>
		</header>
		
		<div class="atg">
			<h1>Биография Noize MC</h1>
			<img align="left" src="Файлы/atg1.jpg" alt="Noize MC">
			<p>Иван Александрович Алексеев (род. 9 марта 1985, Ярцево, Смоленская область), более известный под сценическим псевдонимом Noize MС — российский музыкант и актёр. Музыка Noize MC совмещает в себе черты нескольких жанров и стилей. В своих треках музыкант совмещает речитатив с рок-композициями.</p>
			<h2>Псевдоним</h2>
			<p>Как утверждает сам музыкант, псевдоним он выбрал во время выступлений на школьных дискотеках, где дешёвая аппаратура всегда «фонила» и «хрипела», отсюда и происходит «MC Noize» (англ. noise — шум). Впоследствии приставка «MC» ушла в конец, придав псевдониму индивидуальность.</p>
			<h2>Музыка</h2>
			<img align="right" src="Файлы/atg2.jpg" alt="Noize MC">
			<p>В 2007 году музыкант подписывает контракт с Respect Production и российским подразделением Universal Music Group, что расценивается поклонниками российского рэпа как беспрецедентное событие. В этом же году Алексеев становится победителем крупного интернет-баттла русскоязычных рэперов. Песня «За закрытой дверью» вошла в первую десятку рейтинга «100 лучших песен MTV-2007».</p>
			<p>В 2007 году кинорежиссер Андрей Кудиненко приглашает харизматичного лидера рэп-группы на главную роль в фильме «Розыгрыш», ремейке фильма 1976 года. Иван Алексеев справился с актерской задачей, а также написал к картине несколько музыкальных композиций: «Лето в Столице», «Деньги», «Это был дождь», «Выдыхай», «Какая жалость», «Я не могу тебя найти». На песню «Мое море» в 2008 году музыкант снял клип, который транслировался на музыкальном канале A-ONE.</p>
			<p>В конце весны 2008 года Алексеев объявляет об уходе из Universal Music и на студии звукозаписи «Мистерия звука» выпускает первый альбом «The Greatest Hits vol. 1», в который вошло 20 треков, в том числе «За закрытой дверью», «Из окна», «Кантемировская», «Девочка-скинхед». Помимо сольных выступлений рэпер участвует в совместных записях песен с певицей Таней Терешиной, группами «Тараканы!» и «Ляпис Трубецкой». В 2009 году Алексееву присуждаются премии телеканала A-One RAMP в номинации «Респект Рунета» и «Степной Волк» в номинации «Лирика»</p>
			<img align="left" src="Файлы/atg3.jpg" alt="Noize MC">
			<p>В 2010 году музыкант создает песню «Мерседес S666», которая привлекла внимание к громкому делу о ДТП, произошедшем по вине вице-президента «Лукойла» Анатолия Баркова. После скандального клипа творческой биографией исполнителя заинтересовалось и старшее поколение слушателей. Певца начинают приглашать в эфир общественных программ «Эха Москвы», радио «Свобода». На концертах музыкант нередко ведет себя провокационно, что приводит в конечном итоге к аресту на 10 суток за хулиганство.</p>
			<p>В конце мая 2010 года в московском клубе «Б1 Maximum» состоялась презентация второго диска Noize MC «Последний альбом», в который вошли музыкальные композиции «Устрой дестрой», «Певец и актриса», «На Марсе классно», «Красный октябрь». Интерес поклонников вызвал не только альбом, но и книга с одноименным названием, написанная участником группы Пашей Тетериным, а также ролевая аудиокнига «Underground», созданная на сюжет произведения барабанщика.</p>
			<p>Noize MC получает премии от газеты «Московский Комсомолец», телеканала «Муз-ТВ», радио «Серебряный Дождь», портала InDaRnB.ru и очередную награду Артемия Троицкого «Степной Волк». В 2010 году певец попадает на 41 место в рейтинг Forbes раздела «Звезды и деньги». По подсчетам аналитиков, заработок рэпера за 2009 год составил $ 0,9 млн.</p>
			<img align="right" src="Файлы/atg4.jpg" alt="Noize MC">
			<p>В 2011 году музыкант работает над записью треков к следующему диску, а также снимает клипы на песни «Ругань Из-за Стены», «Сам», «Брынь-Брынь-Брынь», «Пушкинский Рэп», «ШлакваШаклассика!» и «Гимн Понаехавших Провинциалов». 30 марта состоялся релиз «Нового альбома», в который вошли треки, анонсированные ранее на музыкальных каналах. В 2012 году снимаются клипы на песни «Бассейн» и «Вселенная бесконечна».</p>
			<p>В 2013 году группа Protivo Gunz отметила 10-летие творческой деятельности выпуском двух альбомов – одноименным диском, на песню из которого «Жвачка» был снят видеоклип, и диском «Неразбериха». 13 апреля 2013 года состоялся юбилейный концерт команды Noize MC в московском концертном зале Stadium Live, трансляция которого прошла в ночь на 1 января 2014 года на канале MTV.</p>
			<p>В 2014 году дискография Noize MC пополняется шестым альбомом «Hard Reboot», многие треки которого были созданы в содружестве с другими исполнителями: «Иордан» feat Аtlantida project, «абв&эюя» совместно с поэтессой Верой Полозковой, «Ne2Da?» в соавторстве с Mewark. Кроме того, в альбом вошли сольные композиции Noize MC «Сгораю», «Говорящие головы», «Хозяин леса», авторство которых принадлежало музыканту Александру Петрунину. В 2014 году Иван Алексеев исполнил роль наркоторговца в 3D-постановке мюзикла «Ромео и Джульетта» в XXII веке.</p>
			<img align="left" src="Файлы/atg5.jpg" alt="Noize MC">
			<p>2015 год начался для артиста с выступления на международном музыкальном фестивале в Норвегии Barents Spektakel. В середине марта состоялось два сольных концерта музыканта в клубах А2 (Санкт-Петербург) и Stadium Live (Москва), посвященных 30-летию Noize MC. В апреле рэпер презентовал первый русскоязычный клип «Yes Future!» на канале YouTube, снятый в технике «360-градусов». В ноябре состоялась премьера сингла «Make some noise» в сопровождении оркестра на концертных площадках Москвы и Санкт-Петербурга.</p>
			<img align="right" src="Файлы/atg6.jpg" alt="Noize MC">
			<p>Музыкант участвует не только в коммерческих проектах. Иван сотрудничает с благотворительным фондом «Подсолнух», куда регулярно перечисляет гонорары от продажи дисков или синглов в Сети. В апреле 2015 Noize MC пригласили диктором на ежегодную акцию «Тотальный диктант». В октябре певец подготовил музыкальную композицию «Сохрани мою речь», которая была включена в биографическую киноленту об Осипе Мандельштаме «Сохрани мою речь навсегда». В середине ноября Noize MC получил главную награду Music Box 2015 в номинации «Hip-Hop года» на церемонии награждения, проходившей в Государственном Кремлевском Дворце.</p>
			<h2>Концертная группа</h2>
			<p>В настоящее время группа имеет следующий состав:
			<ul>
				<li>Иван «Noize MC» Алексеев — вокал, гитара, клавишные (2003 — настоящее время)</li>
				<li>Александр «Кислый» Кислинский — бас-гитара, бэк-вокал (2003 — настоящее время)</li>
				<li>Шот aka «DJ Stufford» — скрэтчинг, сэмплинг, битбокс, бэк-вокал (2013 — настоящее время)</li>
				<li>Владимир Зиновьев — барабаны, перкуссия (2017 — настоящее время)</li>
			</ul></p>
		</div>
		
		<!-- КНОПКА -->
		<div id="button-up">
			<span>Наверх</span>
		</div>
		
		<!-- ПОДВАЛ -->
		<footer class="black_block">
			<section class="right">
				<p class="text_black_block">По всем вопросам пишите на адрес lera.lobanova.01@mail.ru</p>
			</section>
			<section>
				<p class="text_black_block">©2018г. Лобанова Валерия</p>
			</section>
		</footer>
		
	</body>
	
</html>