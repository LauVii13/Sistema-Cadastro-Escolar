let menuToggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");

let pgInicio = document.querySelector("#pgInicio");
let pg1 = document.querySelector("#pg1");
let pg2 = document.querySelector("#pg2");
let pg3 = document.querySelector("#pg3");
let pg4 = document.querySelector("#pg4");
let pg5 = document.querySelector("#pg5");
let pg6 = document.querySelector("#pg6");
let pg7 = document.querySelector("#pg7");
let pg8 = document.querySelector("#pg8");
let pg9 = document.querySelector("#pg9");
let pgConfig = document.querySelector("#pgConfig");

menuToggle.onclick = function () {
  menuToggle.classList.toggle("active");
  navigation.classList.toggle("active");

  pgInicio.classList.toggle("active");
  pg1.classList.toggle("active");
  pg2.classList.toggle("active");
  pg3.classList.toggle("active");
  pg4.classList.toggle("active");
  pg5.classList.toggle("active");
  pg6.classList.toggle("active");
  pg7.classList.toggle("active");
  pg8.classList.toggle("active");
  pg9.classList.toggle("active");
  pgConfig.classList.toggle("active");
};

let list = document.querySelectorAll(".list");
for (let i = 0; i < list.length; i++) {
  list[i].onclick = function () {
    let j = 0;
    while (j < list.length) {
      list[j++].className = "list";
    }
    list[i].className = "list active";
  };
}
