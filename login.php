	<?php 
	session_start();
	include 'conn.php';
				    $login = $_POST['login'];
					$entrar = $_POST['entrar'];
					$key	=	$_POST['senha'];
					$passget = mysql_query("SELECT password FROM user WHERE login = '$login'", $conn) or die("Erro ao Selecionar");
					$passget2 = mysql_query("SELECT password FROM adm WHERE login = '$login'", $conn) or die("Erro ao Selecionar");
        if (isset($entrar)) {
								                if (mysql_num_rows($passget)<=0){
													if (mysql_num_rows($passget2)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login incorreto');window.location.href='index.php';</script>";
                    die();
					                }else{
					while($row = mysql_fetch_array($passget2)){
					$_SESSION['passwordselected'] = $row['password'];
					$passwordselected = $_SESSION['passwordselected'];
				$password = crypt($key, $passwordselected);
				}}
                }else{
					while($row = mysql_fetch_array($passget)){
					$_SESSION['passwordselected'] = $row['password'];
					$passwordselected = $_SESSION['passwordselected'];
		$password = crypt($key, $passwordselected);
		}}}
if (empty($_POST['login']) || empty($_POST['senha'])) {
$error = "Insira Login e/ou Senha corretamente.";
}
else
{
                     
            $verifica = mysql_query("SELECT * FROM user WHERE login = '$login' AND password = '$password'", $conn) or die("Erro ao Selecionar");
			$verifica2 = mysql_query("SELECT * FROM adm WHERE login = '$login' AND password = '$password'", $conn) or die("Erro ao Selecionar");
			$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);
                if (mysql_num_rows($verifica)<=0){
					if (mysql_num_rows($verifica2)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
                    die();
                }else{
					while($row = mysql_fetch_array($verifica2)){
					$_SESSION['login'] = $login; 
					$_SESSION['tel'] = $row['tel']; 
					$_SESSION['perm'] = $row['perm']; 
					$_SESSION['email'] = $row['email']; 
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['sobrenome'] = null; 
					echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');window.location.href='index.php';</script>";
				}}}
					else{
					while($row = mysql_fetch_array($verifica)){ 
					$_SESSION['login'] = $login; 
					$_SESSION['idade'] = $row['age']; 
					$_SESSION['perm'] = $row['perm']; 
					$_SESSION['email'] = $row['email']; 
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['sobrenome'] = $row['sobrenome']; 
					echo"<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');window.location.href='index.php';</script>";
				}}
				mysql_close($connect);
}
?>
