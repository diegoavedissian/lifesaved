<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/clinics.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type=text/css>
        <link rel="stylesheet" href="css/contact.css">

        <title> Clínicas </title>
    </head>
    <body>

        <div class="margin-content">
            <figure>
                <a href="index.php">
                    <img src="images/back/flecha.png" alt="">
                </a>
            </figure>

            <div class="content-heading content">
                <h3> Clínicas </h3>
<<<<<<< HEAD
                <h4>Clique na clínica para saber mais</h4>
=======
                <h4>Clique na clínica para saber mais!</h4>
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
            </div>
        </div>

        <div class="clinics-box-content">
            <?php
                require_once './backend/conecta.php';
<<<<<<< HEAD
                $clinicas = "SELECT * FROM clinica ORDER BY nome ASC";
                $executa = mysqli_query($conexao, $clinicas);
                while($dados = mysqli_fetch_array($executa)){
            ?>
                <div>
                    <a href="clinica.php?id='<?php echo $dados['id_clinica'] ?>'" name="nome">
=======
                $nomes = "SELECT * FROM clinica ORDER BY nome ASC";
                $executa = mysqli_query($conexao, $nomes);
                while($dados = mysqli_fetch_array($executa)){
            ?>
                <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
                <div>
                    <a href="dados-clinica.php?id='<?php echo $dados['id_clinica'] ?>'" name="nome">
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
                        <font color="black"><?php echo $dados['nome'] ?></font>
                    </a><br>
                </div>
            <?php
            }
            ?> 
        </div>
    </body>
</html>