export class PWButton extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
    this.shadowRoot.innerHTML = `
    <style>
      button{
        background:green;
      }
    </style>  
    <button><slot></slot></button>
    `;
  }
}
