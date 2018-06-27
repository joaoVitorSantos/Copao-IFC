<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Copão IFC
            <br>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <a class="btn navbar-btn ml-2 text-white btn-secondary">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
        </div>
    </div>
</nav>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Número da camisa</th>
                        <th>Gols</th>
                        <th>Id Time</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($jogadores as $jogador): ?>
                    <tr>

                        <td><?= $jogador->getIdJogador() ?></td>
                        <td><?=$jogador->getNome() ?></td>
                        <td><?=$jogador->getNumeroCamisa() ?></td>
                        <td><?=$jogador->getGols() ?></td>
                        <td><?=$jogador->getIdTime() ?></td>
                        <td><a class="btn btn-primary" href="JogadorController.php?acao=editar&id=<?=$jogador->getIdJogador();?>">Editar</a>
                        <a class="btn btn-primary" href="JogadorController.php?acao=excluir&id=<?=$jogador->getIdJogador();?>">Excluir</a></td>

                    </tr>
                    <?php endforeach;?>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>