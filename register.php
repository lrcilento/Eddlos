<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript1.2">
function myFunction() {
    document.getElementById("hiddendiv").classList.toggle("show");
}

function myFunction2() {
    document.getElementById("hiddendiv2").classList.toggle("show");
}
function cliente() {
	document.getElementById("regisbts").classList.toggle("none");
    document.getElementById("clienteregister").classList.toggle("show");
}
function organizador() {
	document.getElementById("regisbts").classList.toggle("none");
    document.getElementById("organizadorregister").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('#menuicon4') && !event.target.matches('.hiddendiv') && !event.target.matches('.hiddendiv2') && !event.target.matches('.llabel') && !event.target.matches('.inputt') && !event.target.matches('#menuicon2')) {

    var dropdowns = document.getElementsByClassName("hiddendiv");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
	var dropdowns = document.getElementsByClassName("hiddendiv2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
  }
}
  }}
window.onload=rotater;
</script>
<title>Eddlos - Registering</title>
</head>
<div id="leftblank"></div>
<div id="rightblank"></div>
<div id="bodydiv">
	<nav id="menu">
    	<ul>
        	<li><a href="index.php"><img src="images/eddlosbg.png" id="eddloslogo"></a></li>
        	<li><a href="index.php" class="menulinks"><img src="images/homebg.png" onmouseover="this.src='images/homebghover.png'" onmouseout="this.src='images/homebg.png'" class="menuicon"></a></li>
            <li><a href="#" class="menulinks"><img src="images/festasbg.png" onmouseover="this.src='images/festasbghover.png'" onmouseout="this.src='images/festasbg.png'" id="menuicon2" onclick="myFunction2()"></a></li>
            <li><a href="#" class="menulinks"><img src="images/divulguebg.png" onmouseover="this.src='images/divulguebghover.png'" onmouseout="this.src='images/divulguebg.png'" class="menuicon3"></a></li>
            <li><a href='#' class='menulinks'><img src='images/loginbg.png' id="menuicon4" onmouseover="this.src='images/loginbghover.png'" onmouseout="this.src='images/loginbg.png'" onclick="myFunction()"></a></li>
            <div id="hiddendiv" class="hiddendiv">
            	<form name="login" action="login.php" method="post">
                <table id="logintable">
            		<tr><td><label class="llabel">Login:</label></td><td><input type="text" id="login" name="login" class="inputt" required></td></tr>
                    <tr><td><label class="llabel">Senha:</label></td><td><input type="password" id="senha" name="senha" class="inputt" required></td></tr>
                    <tr><td><input type="submit" name="entrar" value="Entrar!" class="inputt" id="entrarbt"></td>
                <td><a href="register.php"><button type="button" class="inputt" id="registrarbt">Registrar-se</button></a></td></tr></table>
                </form>
            </div>
            <div id="hiddendiv2" class="hiddendiv2">
            <a href="#"><img src="images/sp.png" onmouseover="this.src='images/sphover.png'" onmouseout="this.src='images/sp.png'" class="ufimg"></a>	
            </div>
        </ul>
    </nav> 
    <div id="menubg2"></div>
    <div id="bodybuilder">
     	<div id="regisbts">
    		<img src="images/cliente button.png" id="clientebt" class="regisbts">
            <img src="images/fleur.png" class="fleur">
        	<img src="images/organizador button.png" class="regisbts">
        </div>
		<table class="registerctable">
        <form name="registerc" action="registerc.php" method="post">
        	<tr><td><label class="llabel">Nome:</label></td><td><input type="text" id="nome" name="nome" class="inputt" required></td></tr>
        	<tr><td><label class="llabel">Sobrenome:</label></td><td><input type="text" id="sobrenome" name="sobrenome" class="inputt" required></td></tr>
        	<tr><td><label class="llabel">Login:</label></td><td><input type="text" id="loginnew" name="loginnew" class="inputt" required></td></tr>
            <tr><td><label class="llabel">E-mail:</label></td><td><input type="email" id="email" name="email" class="inputt" required></td></tr>
            <tr><td><label class="llabel">Idade:</label></td><td><input type="number" id="bday" name="bday" min="16" max="100" class="inputt" required></td></tr>
            <tr><td><label class="llabel">Senha:</label></td><td><input type="password" id="senhanew" name="senhanew" class="inputt" required></td></tr>
            <tr><td><input type="submit" value="Registrar!" name="submit" class="inputt" id="entrarbt2"></td></tr>
        </form>
        </table>
        <table class="registerotable">
        <form name="registero" action="registero.php" method="post">
        	<tr><td><label class="llabel">Organização:</label></td><td><input type="text" id="organi" name="organi" class="inputt" required></td></tr>
        	<tr><td><label class="llabel">Login:</label></td><td><input type="text" id="loginnew" name="loginnew" class="inputt" required></td></tr>
            <tr><td><label class="llabel">E-mail:</label></td><td><input type="email" id="email" name="email" class="inputt" required></td></tr>
            <tr><td><label class="llabel">Telefone:</label></td><td><input type="tel" id="tel" name="tel" min-lenght="8" max-lenght="11" class="inputt" required></td></tr>
            <tr><td><label class="llabel">Senha:</label></td><td><input type="password" id="senhanew" name="senhanew" class="inputt" required></td></tr>
            <tr><td><input type="submit" value="Registrar!" name="submit" class="inputt" id="entrarbt2"></td></tr>
        </form>
        </table>
    </div>
<body>
</body>
</html>