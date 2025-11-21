<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Generar Certificado con QR</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0ff;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    input, button {
      margin: 10px;
      padding: 10px;
      font-size: 16px;
    }
    button {
      background: #6a0dad;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
    button:hover {
      background: #8a2be2;
    }
  </style>
</head>
<body>
  <h2>Generar Certificado con Código QR</h2>
  <form action="generar_certificado.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre completo" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <button type="submit">Generar Certificado</button>
  </form>
</body>
</html>