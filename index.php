<?php
	mysql_connect('127.0.0.1', 'root', '') or die(mysql_error());
	mysql_select_db('VK');
	
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$login = $_POST['login'];
		$password = $_POST['password'];
		$r_password = $_POST['r_password'];
		$dob = $_POST['dob'];
		$mob = $_POST['mob'];
		$yob = $_POST['yob'];
		$sex = $_POST['sex'];
				
	if ($password == $r_password){
		$password = md5($password);
		$query = mysql_query("INSERT INTO users VALUES('',
														'$email',
														'$login',
														'$password',
														'$dob.$mob.$yob',
														'$sex')") or die(mysql_error());
		}
		else{	
			die('password must match!');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Регистрация</title>
		<link rel="stylesheet" href="/style.css" type="text/css">
		<link rel="shortcut icon" href="images/ico1.ico"/>
		<meta name="keywords" charset="utf-8">
		</head>
	<body>
		<div class="container">
				<div id="01"><h1>Регистрация нового аккаунта </h1></div>
				<hr>		
				<img src="images/social_0.png" id="img1" width="698"><hr>	
				<form method="post">
					<label for="insert_email">Введите адрес электронной почты: </label><input type="text" method="post" name="email" class="class1" id="insert_email" placeholder="Enter your email" required>
					<hr>
					<label for="insert_login">Введите логин входа на сайт: </label> <input type="text" method="post" name="login" class="class1" id="insert_login" placeholder="Enter your username" required>
					<hr>
					<label for="insert_password">Введите пароль:</label> <input type="password" method="post" name="password" class="class1" id="insert_password" required>
					<br>
					<label for="repeat_password">Повторите пароль:</label> <input type="password" method="post" name="r_password" class="class1" id="repeat_password" required>
					<hr>
					<label>Ваш пол:</label> <label for="select_male"> Мужской<input type="radio" id="select_male" class="class1" value="male" name="sex" method="post"> 
					| 						<label for="select_female"> Женский<input type="radio" id="select_female" class="class1" value="female" name="sex" method="post"> 
					<br>
						Дата рождения:
						<select name="dob"  method="post" class="dayOB" placeholder="day" required>
							<option value="" disabled selected>День</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="30">31</option>
						</select>
						<select name="mob" method="post" class="monthOB" required>
							<option value="" disabled selected>Месяц</option>
							<option value="01">Январь</option>
							<option value="02">Февраль</option>
							<option value="03">Март</option>
							<option value="04">Апрель</option>
							<option value="05">Май</option>
							<option value="06">Июнь</option>
							<option value="07">Июль</option>
							<option value="08">Август</option>
							<option value="09">Сентябрь</option>
							<option value="10">Октябрь</option>
							<option value="11">Ноябрь</option>
							<option value="12">Декабрь</option> 
						</select>
						<select name="yob" method="post" class="yearOB" required>
							<option value="" disabled selected>Год</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>  
						</select>		
					<hr>	
					<label for="button">Согласен с условиями сайта </label><input type="checkbox" id="button" required>
					<br>
					<input  type="submit" id="button" name="submit" value="Зарегистрироваться">
				</form>
				<hr>
				<a id="vk" href="/vk.loc.php">VK.LOC </a>
				<br>
		</div>		
	</body>
</html>