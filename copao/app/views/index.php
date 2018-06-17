<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/index.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Copão IF</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 text-white btn-secondary">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Login</a>
        <a class="btn navbar-btn ml-2 text-white btn-secondary">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Cadastrar</a>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <?php foreach ($times as $time): ?>
        <div class="col-md-2">
          <img class="d-block mx-auto img-fluid rounded-circle" src="<?= $time->getLogo(); ?>">
          <a class="btn btn-primary btn-lg
btn-circle" href="TimeController.php?rota=verTime&id=<?= $time->getIdTime()?>">+ </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="lead">Classificação</p>
          <table class="table">
            <thead>
              <tr>
                <th>Posição</th>
                <th>Time</th>
                <th>Pontos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><?= $timesP[0]->getNomeTime();?></td>
                <td><?= $timesP[0]->getPontos();?></td>
              </tr>
              <tr>
                <td>2</td>
                  <td><?= $timesP[1]->getNomeTime();?></td>
                  <td><?= $timesP[1]->getPontos();?></td>
              </tr>
              <tr>
                <td>3</td>
                  <td><?= $timesP[2]->getNomeTime();?></td>
                  <td><?= $timesP[2]->getPontos();?></td>
              </tr>
              <tr>
                  <td>4</td>
                  <td><?= $timesP[3]->getNomeTime();?></td>
                  <td><?= $timesP[3]->getPontos();?></td>
              </tr>
              <tr>
                  <td>5</td>
                  <td><?= $timesP[4]->getNomeTime();?></td>
                  <td><?= $timesP[4]->getPontos();?></td>
              </tr>
              <tr>
                  <td>6</td>
                  <td><?= $timesP[5]->getNomeTime();?></td>
                  <td><?= $timesP[5]->getPontos();?></td>
              </tr>
              <tr>
                  <td>7</td>
                  <td><?= $timesP[6]->getNomeTime();?></td>
                  <td><?= $timesP[6]->getPontos();?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <p class="lead">Artilheiros
            <br> </p>
          <table class="table">
            <thead>
              <tr>
                <th contenteditable="true">Posição</th>
                <th>Gols</th>
                <th>Artilheiro</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><?= $artilheiros[0]->getGols() ?></td>
                <td><?= $artilheiros[0]->getNome() ?></td>
                <td><?= $arrayTimes[0]->getNomeTime()?></td>
              </tr>
              <tr>
                  <td>2</td>
                  <td><?= $artilheiros[1]->getGols() ?></td>
                  <td><?= $artilheiros[1]->getNome() ?></td>
                  <td><?= $arrayTimes[1]->getNomeTime()?></td>
              </tr>
              <tr>
                  <td>3</td>
                  <td><?= $artilheiros[2]->getGols() ?></td>
                  <td><?= $artilheiros[2]->getNome() ?></td>
                  <td><?= $arrayTimes[2]->getNomeTime()?></td>
              </tr>
              <tr>
                  <td>4</td>
                  <td><?= $artilheiros[3]->getGols() ?></td>
                  <td><?= $artilheiros[3]->getNome() ?></td>
                  <td><?= $arrayTimes[3]->getNomeTime()?></td>
              </tr>
              <tr>
                  <td>5</td>
                  <td><?= $artilheiros[4]->getGols() ?></td>
                  <td><?= $artilheiros[4]->getNome() ?></td>
                  <td><?= $arrayTimes[4]->getNomeTime()?></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">Sign up to our newsletter for the latest news</p>
          <form class="form-inline">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your e-mail here"> </div>
            <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
          </form>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com" target="_blank">
            <i class="fa fa-fw fa-facebook fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://twitter.com" target="_blank">
            <i class="fa fa-fw fa-twitter fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.instagram.com" target="_blank">
            <i class="fa fa-fw fa-instagram text-white fa-3x"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2017 Pingendo - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>

