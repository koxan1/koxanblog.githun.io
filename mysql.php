<?
$login = $_POST['login'];
$password = $_POST['pass'];
$dbc = mysqli_connect('localhost', 'koxan', '123', 'mydatabase');
$query = "INSERT INTO nado (login, password)
    VALUES ('$login', '$password')";
 $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
 	mysqli_close($dbc);
 echo 'Вы успешно авторизировались.<br />';
 echo "$password";
 echo "$login";
 echo "12";