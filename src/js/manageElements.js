function ManageElements() {
  var body = document.getElementsByTagName("body");
  var admin = body[0].getAttribute("id");

  var listaGeral = [
    "card7",
    "card8",
    "card9",
    "card10",
    "nav7",
    "nav8",
    "nav9",
    "nav10",
    "pg6",
    "pg7",
    "pg8",
    "pg9",
    "pg10",
  ];

  listaGeral.forEach((element) => {
    MudarEstado(element);
  });

  var listaTeste1 = ["nav10", "nav11", "nav2"];

  switch (admin) {
    case "teste_1":
      /*  
      listaTeste1.forEach((element) => {
        MudarEstado(element);
      });*/

      //MudarEstado(ID que deseja ocultar);
      break;
    case "teste_2":
      MudarEstado("nav3");
      MudarEstado("pg2");
      break;
    case "teste_3":
      MudarEstado("logo");
      break;
  }
}

function MudarEstado(el) {
  if (document.getElementById(el)) {
    var display = document.getElementById(el).style.display;
    if (display == "none") document.getElementById(el).style.display = "block";
    else document.getElementById(el).style.display = "none";
  }
}
