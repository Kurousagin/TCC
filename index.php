<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logmain.css">
    <title>login/ConStu</title>


</head>

<body>

   

    <div class="login-box">
        <h2>Connect Student</h2>
        <form action="log/login.php" method="POST">

            <div class="user-box">

                <input type="text" name="login" required="">
                <label> Usuário </label>

            </div>
            
            <div class="user-box">

                <input type="password" name="senha" required="">
                <label> Senha </label>
                
            </div>
           <button type="submit">

           <span></span>
           <span></span>
           <span></span>
           <span></span>
            ENTRAR


           </button>

        </form>
    </div>















</body>

</html>