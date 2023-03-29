const menuItems = document.querySelectorAll('.navigation a[href^="#"]');
const navItens = document.querySelectorAll(".navigation ul li.list");

var i = 2;
const card2 = document.getElementById("card2");
card2.addEventListener("click", (e) => {
  i = 2;
  selectItem(i);
  goToAnchor("pg" + (i - 1));
});

const card3 = document.getElementById("card3");
card3.addEventListener("click", (e) => {
  i = 3;
  selectItem(i);
  goToAnchor("pg" + (i - 1));
});

const card4 = document.getElementById("card4");
card4.addEventListener("click", (e) => {
  i = 4;
  selectItem(i);
  goToAnchor("pg" + (i - 1));
});

const card5 = document.getElementById("card5");
card5.addEventListener("click", (e) => {
  i = 5;
  selectItem(i);
  goToAnchor("pg" + (i - 1));
});

const card6 = document.getElementById("card6");
card6.addEventListener("click", (e) => {
  i = 6;
  selectItem(i);
  goToAnchor("pg" + (i - 1));
});

const card7 = document.getElementById("card7");
card7.addEventListener("click", (e) => {
  i = 7;
  selectItem(i);
  goToAnchor("pg" + (i - 1));
});

function goToAnchor(anchor) {
  var loc = document.location.toString().split("#")[0];
  document.location = loc + "#" + anchor;
  return false;
}
function selectItem(i) {
  let j = 0;
  while (j < navItens.length) {
    navItens[j++].className = "list";
  }
  navItens[i - 1].className = "list active";
}

function reiniciaPagina() {
  goToAnchor("pgInicio");
}
