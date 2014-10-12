<?php

session_start();

if(!$_SESSION["lang"]){
	$_SESSION["lang"] = "en";
}



$a8 = "Login";
$a9 = "Register";
if(isset($_GET["ru"])){
    $a8 = "Войти";
    $a9 = "Зарегестрироваться";
    $_SESSION["lang"] = "ru";
}
if(isset($_GET["ua"])){
    $a8 = "Увiйти";
    $_SESSION["lang"] = "ua";
    $a9 = "Зареєструватися";
}
if(isset($_GET["en"])){
    $_SESSION["lang"] = "";
}

$user_start_form = "
<li><a href='?attempt_login'>$a8</a></li>
<li><a href='?attempt_register'>$a9</a></li>
";

$backform = '
<form method="post">
	<input hidden id="backset" name="backset" type="text"></input>
	<input id="login-submit" type="submit" value="Back"></input>
</form>';

$first_attempt = '
<form style="display: none" method="post">
	<input hidden id="first_attempt" name="first_attempt" type="text"></input>
	<input id="login-submit" type="submit" value=""></input>
</form>';

if($_POST["login_name"] != "" && $_POST["login_pw"] != ""){
	echo $_POST["login_name"];
}else if($_POST["first_attempt"]){
	echo $first_attempt;
	if(isset($_POST["login_name"]) && !isset($_POST["login_pw"])){
		echo "Please insert a password";
	}else if(!isset($_POST["login_name"]) && isset($_POST["login_pw"])){
		echo "Please insert a name";
	}else{
		echo "Please insert a name and a password.";
	}
}

if($_POST["register_name"] != "" && $_POST["register_pw"] != ""){
	Validation::validate("reg", $_POST["regis_name"], $_POST["regis_pw"]);
}else if($_POST["first_attempt"]){
	if(isset($_POST["register_name"]) && !isset($_POST["register_pw"])){
		echo "Please insert a password";
	}else if(!isset($_POST["register_name"]) && isset($_POST["register_pw"])){
		echo "Please insert a name";
	}else{
		echo "Please insert a name and a password.";
	}
}

if(isset($_POST["backset"])){
	$enable = 1;
}else if(isset($_GET["attempt_login"])){
	echo '<form method="post">
		<input hidden id="attempt" name="attempt" type="text"></input>
		<input id="name" type="text" name="login_name" placeholder="name"></input>
		<input id="password" type="password" name="login_pw" placeholder="password"></input>
		<input id="login-submit" type="submit" value="Login"></input>
	</form>'.$backform;
}else if(isset($_GET["attempt_register"])){
	echo '<form method="post">
		<input hidden id="attempt" name="attempt" type="text"></input>
		<input id="name" name="regis_name" type="text" placeholder="name"></input>
		<input id="password" name="regis_pw" type="password" placeholder="password"></input>
		<input id="login-submit" type="submit" value="Register"></input>
	</form>'.$backform;
}else{
	$enable = 1;
}

// if($_GET["login"] == "" && $_GET["register"] == "" && $_POST["attempt"] == "1"){
// 	echo "Sorry you didn't enter any data.";
// }else{
// 	switch($_GET["login"]){
// 		case: ""
// 	}
// }

$a1 = "Home";
$a2 = "Help";
$a3 = "Language";
$a4 = "English";
$a5 = "Russian";
$a6 = "Ukrainian";
$a8 = "Sign in";
$a9 = "Register";
$a10 = "Developed and designed at the Hackaton event. Zurich, October 2014";
$a11 = "Log Out";
$a12 = "Account";
$a13 = "Settings";
$a14 = "Our team, comprising three programmers: Ilia Ryzhov (RUS), Vassili Echser (CH) and Jan Fischer (GER), got inspired by the workshop Hack4Good by Impact Hub Zurich.<br><br> In the ongoing crisis in Ukraine media is dominating with the images of war: bombings, soldiers, victims and so on. What we do not see is how many people from conflicting parties are related to each other, how many people from both countries know each other, and are friends or family members despite of the existing crisis. To change the narrative of the war and establish a long-time peace, it is crucial to shed light on these relations to demonstrate the whole world that people relationships are above any political ambitions.<br><br>Within the BigData4Peace project, we develop a platform that exposes the relationships between people from Russia and Ukraine. The app shows links between people who are in good relations with each other across the border, based on the open information from Twitter. The Data is presented on a map and in some cases the short story behind it is available.<br><br> Users can register on the website and add their connections with people from a neighboring country (Russia or Ukraine) and a brief history of this relation, or they can use a special hashtag #RUSUA_INLOVE on Twitter, so that their location as well as the location of their friends on Twitter from the other side of the border will be added to the existing map.";

$b1 = "index.php";
$b2 = "help.php";

if($_SESSION["lang"] == "ru"){
    $a1 = "Домой";
    $a2 = "Помощь";
    $a3 = "Язык";
    $a4 = "Английский";
    $a5 = "Русский";
    $a6 = "Украинский";
    $a8 = "Войти";
    $a9 = "Зарегестрироваться";
    $a10 = "Разработка и дизайн в рамках конкурса Hackaton. Цюрих, октябрь 2014г.";
    $a11 = "Выйти";
    $a12 = "Аккаунт";
    $a13 = "Настройки";
    $a14 = "Наша команда, состоящая из трёх программистов, - Ильи Рыжова (Россия), Вассили Эшера (Швейцария) и Яна Фишера (Германия), решили воплотить в жизнь идею, предложенную ими во время тренинга Hack4Good от организации Impact Hub Zurich.<br><br>В условиях кризиса на востоке Украины мировые СМИ заполнены кадрами взрывов, жертв и войск. Но чего мы никогда не сможем увидеть в новостях - это настоящих отношений между людьми, которых разделает условная линия, которые имеют место несмотря на кризис. Для изменения сценария событий и установления продолжительного перемирия, необходимо пролить свет на то, что близкие люди по обе стороны от границы по-прежнему любят друг друга и сохраняют тёплые отношения.<br><br>В рамках работы над проектом мы разработали веб-платформу, которая показывает взаимосвязи людей из России и Украины. Работа приложения основана на открытых данных, предоставленных интерфейсом Твиттер. Информация представленна на веб сайте и сопровождается небольшой сопроводительной историей в некоторых случаях.<br><br>Пользователи могут регистрироваться на этом сайте и добавлять визуализацию своих отношений с близкими людьми из соседней страны. Также они могут пользоваться хэштэгом #RUSUA_INLOVE в Твиттере, чтобы связь была добавлена на общую карту автоматически.";

    $b1 = "index.php?ru";
    $b2 = "help.php?ru";

}



if($_SESSION["lang"] == "ua"){
    $a1 = "Додому";
    $a2 = "Допомога";
    $a3 = "Мова";
    $a4 = "Англiйська";
    $a5 = "Росiйська";
    $a6 = "Украïнська";
    $a8 = "Увiйти";
    $a9 = "Зареєструватися";
    $a10 = "Розробка та дизайн у рамках конкурсу Hackaton. Цюрiх, жовтень 2014 р.";
    $a11 = "Вийти";
    $a12 = "Аккаунт";
    $a13 = "Налаштування";
    $a14 = "Наша команда, що складається з трьох програмістів, - Іллі Рижова (Росія), Вассілі Ешера (Швейцарія) і Яна Фішера (Німеччина), вирішили втілити в життя ідею, запропоновану ними під час тренінгу Hack4Good від організаціï Impact Hub Zurich.<br><br>В умовах кризи на сході України світові ЗМІ заповнені кадрами вибухів, жертв і військ. Але чого ми ніколи не зможемо побачити в новинах - це справжніх відносин між людьми, яких розділяє умовна лінія, які мають місце незважаючи на кризу. Для зміни сценарію подій і встановлення тривалого перемир'я, необхідно пролити світло на те, що близькі люди по обидві сторони від кордону як і раніше люблять один одного та зберігають теплі стосунки.<br><br>В рамках роботи над проектом ми розробили веб-платформу, яка демонструє взаємозв'язок між людьми з Росії та України. Oбота програми заснована на відкритих даних наданих інтерфейсів Twitter. Інформація відображена на веб-сайті і супроводжується описом деяких випадків. <br><br>Користувачі можуть реєструватися на цьому сайті і додавати візуалізацію своїх відносин з близькими людьми з сусідньої країни. Також вони можуть користуватися хештегом #RUSUA_INLOVE в Твіттері для того, щоб зв'язок був доданий на загальну карту автоматично.";

    $b1 = "index.php?ua";
    $b2 = "help.php?ua";


}

class Validation {
	public static function validate($task, $name, $pw){
		if($task == "reg"){
			if(strlen($name) <= 4){
				echo "Too short username. Please insert more than 4 characters.";
				return false;
			}
			if(strlen($pw) <= 4){
				echo "Too short password. Please insert more than 4 characters.";	
				return false;
			}

			require_once '../lib/medoo.min.php';
			$pw_hashed = password_hash($pw, PASSWORD_BCRYPT);
			$database = new medoo();
			$database->insert("user", [
				"user_name" => $name,
				"user_pw" => $pw_hashed,
				"date_created" => date("Y-m-d H:i:s", time())
			]);
			echo "You registered successfully!";
			exit();
		}
	}
	public static function loginin($name, $pw){
		require_once '../lib/medoo.min.php';
		$database = new medoo();
		$db_pw = $database->get("user", "user_pw", [
			"user_name" => $name
		]);

		$pw_hashed = password_hash($pw, PASSWORD_BCRYPT);
		if(password_verify($pw, $db_pw)){
			echo "its you!";
			
			$session = session_id();
			if(empty($session)) session_start();

			$user_id = $database->get("user", "id", [
				"user_name" => $name
			]);

			$database->insert("user_has_session", [
				"fid" => $user_id,
				"session_string" => $_COOKIE['PHPSESSID'],
				"date_created" => date("Y-m-d H:i:s", time())
			]);

			exit();
		}else{
			echo "Sorry. This username doesn't exist or your password is wrong.";
			exit();
		}
	}
}

class Connections {
	public static function get_users_data(){
		require_once '../phpdev/lib/medoo.min.php';
		$database = new medoo();
		$data = $database->select("user", [
			"twitter_name",
			"coordinates",
			"story"
		]);

		$len = count($data);
		$output = "data = [";
		for($i=0; $i<$len; $i++){
			$output .= "{cord:'".$data[$i]["coordinates"]."', namer:'".$data[$i]["twitter_name"]."', story:'".$data[$i]["story"]."'}, ";
		}
		$output .= "{}]";
		

		return $output;

	}

	public static function get_connections(){
		require_once '../phpdev/lib/medoo.min.php';
		$database = new medoo();
		$connections = $database->select("user_has_connection", [
			"first_fid",
			"second_fid"
		]);

		// foreach connections get geolocation data of user

		$len = count($connections);
		for($i=0; $i<$len; $i++){

			$first_user_coordinates = $database->get("user", "coordinates", [
			  "id" => $connections[$i]["first_fid"]
			]);

			$second_user_coordinates = $database->get("user", "coordinates", [
			  "id" => $connections[$i]["second_fid"]
			]);

			$js .= "var lineCoordinates$i = [\n";
			$js .= "new google.maps.LatLng($first_user_coordinates),\n";
			$js .= "new google.maps.LatLng($second_user_coordinates)];\n\n";

			$js .= "var line = new google.maps.Polyline({\n";
			$js .= "path: lineCoordinates$i,\n";
			$js .= "strokeColor: '#105379',\n";
			$js .= "strokeOpacity: 1,\n";
			$js .= "strokeWeight: 2,\n";
			$js .= "map: map\n";
			$js .= "});\n";
			// $connection_arr = array(
			// 	"first" => $first_user_coordinates,
			// 	"second" => $second_user_coordinates
			// );
			// array_push($processed_connec_arr, $connection_arr);
		}
		return $js;
		
		// new google.maps.LatLng(48.428605, 35.063790),
		// new google.maps.LatLng(55.684821, 37.703256)];
	}


}

if($enable){
?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>BigData4Peace</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="main.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<style>
		html {
			margin: 0;
		}
		body {

		}
		#myNavbar {
			margin-bottom: 0;
		}
		#map-canvas {
			width: 100%;
			margin: 0;
		}	      
    #panel {
      position: absolute;
      top: 90px;
      left: 50%;
      margin-left: -270px;
      z-index: 5;
      background-color: #fff;
      padding: 5px;
      border: 1px solid #999;
    }
  </style>

	    <script type="text/javascript"
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCX2jdQziD66E0xFwtAFaXwxyT62u7GPts">
	    </script>
	    <script type="text/javascript">

  		function initialize() {
  			markers = [];
  			var data = 0;
  			<?php
  				echo Connections::get_users_data();
  			?> // data = [stuff]
  			data.pop();

  			var myLatlng = new google.maps.LatLng(49.333007, 37.654072);
			  var mapOptions = {
			    zoom: 5,
			    center: myLatlng
			  }

			  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			  map.set('styles', [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]);
			  map.setOptions({ minZoom: 2, maxZoom: 100 });

  			for(var i=0, len = data.length; i<len; i++){
  				var cord = data[i].cord;
  				cord = cord.split(',');
  				// var lat = cord[0];
  				cord[0] = parseFloat(cord[0]);
  				cord[1] = parseFloat(cord[1]);
  				data[i].cord = new google.maps.LatLng(cord[0], cord[1]);

  		  	data[i].marker = new google.maps.Marker({
		        position: data[i].cord,
		        icon: "http://thisandy.hamal.uberspace.de/marker-icon.png",
		        map: map,
		        title: 'Hello World!'
  		    });

        	data[i].contentString = '<div id="content">'+
    	    '<div id="siteNotice">'+
    	    '</div>'+
    	    '<div id="bodyContent">' +
    	    '<p><h3>'+data[i].namer+'</h3></p><p><b>Story: </b>'+data[i].story+'</p>'+
    	    '</div></div>';

        	data[i].infowindow = new google.maps.InfoWindow({
        		content: data[i].contentString,
        		maxWidth: 500
        	});

        	markers.push(data[i].marker);

        	// google.maps.event.addListener(data[i].marker, 'click', function() {
        	//   data[i].infowindow.open(map, data[i].marker);
        	// });
        	
        	var marker = data[i].marker;
        	var infowindow = data[i].infowindow;
        	contentString = data[i].contentString;
					google.maps.event.addListener(marker, 'click', function(content) {
					    return function(){
					        infowindow.setContent(content);//set the content
					        infowindow.open(map,this);
					    }		
					}(contentString));

  			}

	      // set up the lines
    		<?php
    		echo Connections::get_connections();
    		// var lineCoordinates = [
        // new google.maps.LatLng(48.428605, 35.063790),
        // new google.maps.LatLng(55.684821, 37.703256)];
        ?>
	    }
	    google.maps.event.addDomListener(window, 'load', initialize);


			
	    window.onload = function(){
	    	var avaiableHeight = screen.height-197;
	    	document.getElementById('map-canvas').style.height = avaiableHeight+"px";
 			}
	    </script>

	</head>
	<body>
	<div class="bs-example">
	    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a style="text-decoration: underline" class="navbar-brand">BigData4Peace</a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                            <ul class="nav navbar-nav">
	                                
	                                <!--home button:-->
	                                <li><a href="?home"><?php echo $a1; ?></a></li>
	                                <!--help button:-->
	                                <li><a href="?help"><?php echo $a2; ?></a></li>
	                                <li class="dropdown">
	                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $a3; ?><b class="caret"></b></a>
	                                    <ul class="dropdown-menu">
	                                        <li><a href="?en"><?php echo $a4; ?></a></li>
	                                        <li><a href="?ru"><?php echo $a5; ?></a></li>
	                                        <li><a href="?ua"><?php echo $a6; ?></a></li>
	                                    </ul>
	                                </li>
	                            </ul>
	                            <ul id="login-form" class="nav navbar-nav navbar-right">
	                                <li><a id="login-btn" onclick="Onuser.loginShow()"><?php echo $a8; ?></a></li>
	                                <li><a id="regis-btn" onclick="Onuser.registerShow()"><?php echo $a9; ?></a></li>
	                            </ul>
	                            
	                            
	                        </div><!-- /.navbar-collapse -->
	        </div>

	    </nav>
	</div>
	<div class="bs-example">
	
	<?php
			if(isset($_GET["home"])){
				echo '<div id="map-canvas"></div>';
			}else if(isset($_GET["help"])){
				echo '</div style="width: 1200px;"><p class="plaintext" style="margin: 30px 250px 30px 50px; width=1200px">'.$a14.'</p></div>';
			}else{
				echo '<div id="map-canvas"></div>';
			}

	?>
	        <nav id="myNavbar" class="navbar navbar-default" role="navigation">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="container">
	           
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav">
	                    <p class="navbar-text navbar-right"><?php echo $a10; ?></p>
	                    
	                </ul>
	                
	            </div><!-- /.lowerbar-collapse -->
	        </div>

	    </nav>
	    </div>
	</body>
	</html>
<?php

}