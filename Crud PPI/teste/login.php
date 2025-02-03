<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    /*Parte feita com auxilio de IA como Deep Seek, Co-Pilot e Chat Gpt*/
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    fieldset {
      background: rgba(255, 255, 255, 0.95);
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      padding: 40px 30px;
      width: 90%;
      max-width: 400px;
    }
    form {
      display: flex;
      flex-direction: column;
      width: 100%;
    }
    label {
      font-size: 18pt;
      font-weight: 600;
      margin-bottom: 8px;
      color: #333;
      text-align: left;
    }
    input[type="text"],
    input[type="password"] {
      font-size: 16pt;
      padding: 10px;
      margin-bottom: 20px;
      width: 100%;
      border: 2px solid #ddd;
      border-radius: 8px;
      outline: none;
      transition: border-color 0.3s;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #667eea;
    }
    input[type="submit"] {
      font-size: 16pt;
      background: #667eea;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 10px;
      cursor: pointer;
      transition: background 0.3s;
      width: 100%;
    }
    input[type="submit"]:hover {
      background: #556cd6;
    }
    p {
      font-size: 16pt;
      margin-top: 20px;
      text-align: center;
      color: #e74c3c;
    }
  </style>
</head>
<body>
  <fieldset>
    <form action="LoginController.php" method="post">
      <label for="usuario">Insira seu usuário:</label>
      <input type="text" name="usuario" id="usuario">
      <label for="senha">Insira sua senha:</label>
      <input type="password" name="senha" id="senha">
      <input type="submit" value="Login">
    </form>
  </fieldset>

  <?php
  /*catei partes do Rovani*/
  session_start();
  if (isset($_SESSION['logado'])) {
      if ($_SESSION['logado'] == true) {
          header("location:Menu.php"); /*Aqui vai redirecionar ele para a tela desejada*/
          exit();
      }
  }
  if (isset($_REQUEST['login'])) {
      if ($_REQUEST['login'] == 0) {
          echo "<p>Usuário ou senha inválidos</p>"; /*Mensagem de erro*/
      }
  }
  ?>
</body>
</html>
