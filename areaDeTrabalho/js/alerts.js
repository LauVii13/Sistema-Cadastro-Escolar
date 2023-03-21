function validateForm() {
  let nome = document.forms["formLogin"]["login"].value;
  let senha = document.forms["formLogin"]["senha"].value;
  if (nome == "") {
    alert("Nome deve ser preenchido");
    return false;
  }
  if (senha == "") {
    alert("Senha deve ser preenchida");
    return false;
  }
}
