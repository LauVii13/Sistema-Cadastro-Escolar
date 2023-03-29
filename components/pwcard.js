export class PWCard extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
    this.shadowRoot.innerHTML = `
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background-color: #e7e7e7;
    font-family: "Roboto", sans-serif;
  }
  .card {
    border: 1px solid #00071d75;
    /*border: 1px solid #ffffff10;*/
    border-radius: 25px;
    margin: 10px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);

    width: 24%;

    padding: 10px;
    min-width: 200px;
    background-color: #00071d09;
  }

  .divTittle {
    color: #00071d;
    text-align: left;
    padding: 10%;
    font-weight: 600;
  }
  
  .divList {
    margin-left: 20px;
    color: #28324d;
  }

  .divIcon {
    color: #00071d;
    font-size: 50px;
    text-align: right;
  }

  div {
    border: 1px solid black;
  }
    </style>
    <head><script src="https://kit.fontawesome.com/9c3a1d7dec.js" crossorigin="anonymous"></script></head>
    <div class="card">
      <div class="divTittle"><p class="cardTittle">Aluno</p></div>
      <div class="divIcon"><i class="fa-solid fa-children"></i></div>
      <div class="divList">
        <ul class="cardList">
          <li>Cadastro Aluno</li>
          <?php echo("teste");?>
        </ul>
      </div>
    </div>
    `;
  }
}