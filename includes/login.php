<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/index.css">

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="../libs/fontawesome/css/fontawesome.css">
        <link 
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" 
            integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni"
            crossorigin="anonymous"
        >
        <script src="../libs/bootstrap.min.js"></script>
        <script src="../libs/jquery.js"></script>
    </head>

    <body>
        <div class="page-container">
            <div class="form-container">
                <div class="form-content">    
                    <div class="form form-login" >
                        <form method="POST" action="https://projetoescolaveiculos.000webhostapp.com/includes/login.php">
                            <input class="form-control" required name="email" type="email" placeholder="Email">
                            <input class="form-control" required name="password" type="password" placeholder="Senha">
                            <button type="submit" class="form-control mt-4 btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../scripts/login.js"></script>
    </body>
</html>