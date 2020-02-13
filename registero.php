<?php
session_start();
include 'conn.php';
$nomed = $_POST['organi'];
$nome = ucfirst(strtolower($nomed));
$login	=	$_POST['loginnew'];
$email	=	$_POST['email'];
$tel	=	$_POST['tel'];
$hash	=	$_POST['senhanew'];
$salt = openssl_random_pseudo_bytes(22);
$salt = '$2a$%13$' . strtr(base64_encode($salt), array('_' => '.', '~' => '/'));
$password = crypt($hash, $salt);


 if (!$conn) {
     die("Falha ao se conectar ao banco de dados");
} 
$sql = "INSERT INTO adm (nome, login, password, email, tel) VALUES ('$nome', '$login', '$password', '$email', '$tel')";
$result = mysql_query("SELECT * FROM adm WHERE login = '$login';");
$result2 = mysql_query("SELECT * FROM user WHERE login = '$login';");
$result3 = mysql_query("SELECT * FROM user WHERE email = '$email';");
$result4 = mysql_query("SELECT * FROM adm WHERE email = '$email';");
if(!$result)
{
    die(mysql_error());
}
if(mysql_num_rows($result) > 0)
{
    die("<script language='javascript' type='text/javascript'>alert('Usuário já registrado!');window.location.href='register.php';</script>");
}
if(mysql_num_rows($result2) > 0)
{
    die("<script language='javascript' type='text/javascript'>alert('Usuário já registrado!');window.location.href='register.php';</script>");
}
if(mysql_num_rows($result3) > 0)
{
    die("<script language='javascript' type='text/javascript'>alert('E-mail já registrado!');window.location.href='register.php';</script>");
}
if(mysql_num_rows($result4) > 0)
{
    die("<script language='javascript' type='text/javascript'>alert('E-mail já registrado!');window.location.href='register.php';</script>");
}
if (!mysql_query($sql,$conn)) {
	die ('Erro');
					}     
            $verifica = mysql_query("SELECT * FROM adm WHERE login = '$login' AND password = '$password'", $conn) or die("Erro ao selecionar");
			$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);
					while($row = mysql_fetch_array($verifica)){
					$_SESSION['login'] = $login; 
					$_SESSION['tel'] = $row['tel']; 
					$_SESSION['perm'] = $row['perm']; 
					$_SESSION['email'] = $row['email']; 
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['sobrenome'] = null; 
				mysql_close($conn);
    echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='index.php';</script>";
                    die();
				 }

 ?> 