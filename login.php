<?php 
include 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = readOne(
        $pdo,
        'administrador',
        "email = '$email'"
    );

    if($email == $usuario['email'] && $senha == $usuario['senha']){
        header("Location: aaa.php");
        exit;
    }
    else{
        echo 'Email ou senha incorretos.';
    }



}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <main class="container">
        <section class="lado-esquerdo">
            <div class="pontos"></div>
        </section>

        <section class="lado-direito">

            <div class="login">
                <h1>Bem-<span>vindo!</span></h1>
                <p>Faça login para acessar sua conta</p>

                <form>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="nome.sobrenome@gmail.com" required>

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="Digite sua senha" required>

                    <div class="b">
                        <button type="submit">Entrar</button>
                    </div>
                    
                </form>

            </div>

        </section>
    </main>
</body>
</html>