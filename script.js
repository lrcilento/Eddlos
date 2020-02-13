var howOften = 5;
var current = 0;
var ns6 = document.getElementById&&!document.all;
var items = new Array();
    items[0]="<a href='#' ><img  src='images/banner2.jpg' class='banner'/></a>";
    items[1]="<a href='#'><img  src='images/banner3.jpg' class='banner'/></a>";
    items[2]="<a href='#'><img  src='images/banner.jpg' class='banner'/></a>";
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
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);
}
window.onload=rotater;