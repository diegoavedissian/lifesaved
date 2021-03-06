<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Configurações da página -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Pagamento </title>
        <link rel="icon" href="images/logo/logo.png" type="text/image">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/card.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    </head>
    <body>

        <!-- Conteúdo principal -->
        <main>
            <div class="margin-content">
                <figure>
                        <a href="index.html">
                            <img src="images/back/flecha.png" alt="Flecha de ir para a Home" title="Voltar para Home">
                        </a>
                </figure>
                

            <!-- Formulário -->
            <form action="" method=""> 

                <fieldset>
                    <legend hidden> Contato </legend>

                    <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>

                            <div class="paragraph">
                                <label for="nome"> Nome Titular </label><br/>
                            </div>
                        </div>

                        <input type="name" name="nome" id="nome" size"70">
                    </div>
    
                    <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>
    
                            <div class="paragraph">
                                <label for="email"> Número do cartão </label><br/>
                            </div>
                        </div>

                        <input type="text" name="numero" id="numero"  >
                    </div>

                      <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>
    
                            <div class="paragraph">
                                <label for="email"> Mês de validade </label><br/>
								

                            </div>
                        </div>

                         <input type="number" min="1" max="12" step="1"  />
                    </div>                 

                      <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>
    
                            <div class="paragraph">
                                <label for="email"> Ano de validade </label><br/>
                            </div>
                        </div>

                        <input type="number" min="1900" max="2099" step="1" value="2016" />
                    </div>                 

                      <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>
    
                            <div class="paragraph">
                                <label for="email"> Código de segurança </label><br/>
                            </div>
                        </div>

                        <input type="password" name="codigo" id="codigo"  >
                    </div>                 

                      <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>
    
                            <div class="paragraph">
                                <label for="email"> Número de parcela </label><br/>
                            </div>
                        </div>

                        <input type="text" name="email" id="email"  >
                    </div>                 

	
                    <div class="button-style">
                        <button type="submit" autofocus> Finalizar Compra </button>
                    </div>
                </fieldset>
            </form>
        </main>
    </body>
</html>