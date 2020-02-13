<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript1.2">
var howOften = 5;
var current = 0;
var ns6 = document.getElementById&&!document.all;
var items = new Array();
    items[0]="<a href='#' ><img  src='images/banner2.jpg' class='banner'/></a>";
    items[1]="<a href='#'><img  src='images/banner3.jpg' class='banner'/></a>";
    items[2]="<a href='#'><img  src='images/banner1.jpg' class='banner'/></a>";
function rotater() {
document.getElementById("placeholder").innerHTML = items[current];
current = (current==items.length-1) ? 0 : current + 1;
setTimeout("rotater()",howOften*1000);
}

function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("banners").innerHTML=items[current]
        if(document.all)
            banners.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1;
    setTimeout("rotater()",howOften*1000);
}
function myFunction() {
    document.getElementById("hiddendiv").classList.toggle("show");
}

function myFunctionp() {
    document.getElementById("hiddendivp").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('#menuicon4') && !event.target.matches('.hiddendiv') && !event.target.matches('.hiddendivp') && !event.target.matches('.llabel') && !event.target.matches('.inputt')) {

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
	var dropdowns = document.getElementsByClassName("hiddendivp");
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
<?php 
session_start();
if (empty($_SESSION['login'])){
$namett = "login";
$myfunc = "myFunction";
$menuicon4 = "menuicon4";
}
else {
$namett = "perfil";
$myfunc = "myFunctionp";
$menuicon4 = "menuicon4";
}
?>
<meta charset="utf-8">
<title>Eddlos - Always Better</title>
</head>
<div id="leftblank"></div>
<div id="rightblank"></div>
<div id="bodydiv">
	<nav id="menu">
    	<ul>
        	<li><a href="index.php"><img src="images/eddlosbg.png" id="eddloslogo"></a></li>
        	<li><a href="index.php" class="menulinks"><img src="images/homebg.png" onmouseover="this.src='images/homebghover.png'" onmouseout="this.src='images/homebg.png'" class="menuicon"></a></li>
            <li><a href="#" class="menulinks"><img src="images/festasbg.png" onmouseover="this.src='images/festasbghover.png'" onmouseout="this.src='images/festasbg.png'" id="menuicon2"></a></li>
            <li><a href="#" class="menulinks"><img src="images/divulguebg.png" onmouseover="this.src='images/divulguebghover.png'" onmouseout="this.src='images/divulguebg.png'" class="menuicon3"></a></li>
            <li><a href='#' class='menulinks'><img src='images/<?php echo $namett ?>bg.png' id="<?php echo $menuicon4 ?>" onmouseover="this.src='images/<?php echo $namett ?>bghover.png'" onmouseout="this.src='images/<?php echo $namett ?>bg.png'" onclick='<?php echo $myfunc ?>()'></a></li>
            <div id="hiddendiv" class="hiddendiv">
            	<form name="login" action="login.php"  method="post">
                <table id="logintable">
            		<tr><td><label class="llabel">Login:</label></td><td><input type="text" id="login" name="login" class="inputt" required></td></tr>
                    <tr><td><label class="llabel">Senha:</label></td><td><input type="password" id="senha" name="senha" class="inputt" required></td></tr>
                    <tr><td><input type="submit" name="entrar" value="Entrar!" class="inputt" id="entrarbt"></td>
                <td><a href="register.php"><button type="button" class="inputt" id="registrarbt">Registrar-se</button></a></td></tr></table>
                </form>
            </div>
            <div id="hiddendivp" class="hiddendivp">
            <table id="perfilmn">
            <tr><td align="center"><label class="llabel"><?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'] ?></label></td></tr>
            <?php 
			if ($_SESSION['perm'] == 1){
				echo "<tr><td><a href='#' class='llabel'>• Ingressos</a><br></td></tr>";}
			else{
				echo "<tr><td><a href='#' class='llabel'>• Meus Eventos</a><br></td></tr>";
			}
			?>
			<tr><td><a href="#" class="llabel">• Informações</a><br></td></tr>
            <tr><td><a href="#" class="llabel">• Favoritos</a><br></td></tr>
            <tr><td><a href="#" class="llabel">• Contato/Ajuda</a><br></td></tr>
            <tr><td><a href="logout.php" class="llabel">• LogOut</a><br></td></tr></table>
            </div>
        </ul>
    </nav> 
    <layer id="placeholderlayer"></layer><div id="banners"></div>   
    <div id="menubg"></div>
    <div id="bottomdivisor"></div>
    <a href="#"><img src="images/facebook.png" onmouseover="this.src='images/facebookhover.png'" onmouseout="this.src='images/facebook.png'" class="ficons"></a>
    <a href="#"><img src="images/twitter.png" onmouseover="this.src='images/twitterhover.png'" onmouseout="this.src='images/twitter.png'" class="ficons"></a>
    <a href="#"><img src="images/googleplus.png" onmouseover="this.src='images/googleplushover.png'" onmouseout="this.src='images/googleplus.png'" class="ficons"></a>
    <a href="#"><img src="images/youtube.png" onmouseover="this.src='images/youtubehover.png'" onmouseout="this.src='images/youtube.png'" class="ficons"></a>
</div>
<body>
</body>
</html>
