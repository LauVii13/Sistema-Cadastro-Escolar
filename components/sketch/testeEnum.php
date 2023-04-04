<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  function criarSelectEnum($coluna)
  {
    // Conexão com o banco de dados
    $conn = new mysqli("186.202.152.106", "gestaoescolar", "Thro1213@bc", "gestaoescolar");

    // Consulta SQL para obter informações sobre o tipo ENUM da coluna
    $sql = "SHOW COLUMNS FROM Usuario WHERE Field = 'ADMINISTRADOR'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // Analisa a string retornada para obter as opções
    $options = explode("','", substr($row['Type'], 6, -2));

    /*
str_replace('termo do texto', 'novo termo', texto);
str_replace('_', ' ', $lista);
strtolower($str) -> td minusculo
ucfirst($str) -> 1º em maiusculo
*/

    // Exibe o array de opções
    $str = str_replace('_', ' ', $options);

    $html = '<select name="' . $coluna . '">';
    foreach ($str as $str) {
      $html .= '<option value="' . $str . '">' . ucfirst(strtolower($str)) . '</option>';
    }

    $html .= '</select>';

    return $html;
  }
  ?>
</head>

<body>
  <?php echo criarSelectEnum('ADMIN'); ?>
</body>

</html>