<?php 
session_start(); 

var_dump($_SESSION);

// Verifique se a sessão do usuário está ativa
if (!isset($_SESSION['user_name'])) {
    // Caso o usuário não esteja logado, redirecione para a página de login
    header("Location: ./Loginusuario.php");
    exit();
}

$user_name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <!--CSS BOODSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--CSS-->
  <link rel="stylesheet" href="./CSS/index.css">

  <link rel="stylesheet" href="styleblogansiedade.css">

  <!--IMAGEM NA ABA DO NAVEGADOR-->
  <link rel="icon" href="./IMG/SerenusLetra.ico" type="image/x-icon">
  <style>
    #bordas{
      border: 5px solid purple;
      border-radius: 5px;
      height: 130%;
      
    }

    #roupa{
      background-color: darkblue; /* Green */
  border: solid 3px;
  border-color: black;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
    }

    #roupa:hover{
      background-color: white;
      color: black;
      font-size: 20px;
    }

    #mudarpersonagem{
      background-color: darkblue; /* Green */
  border: solid 3px;
  border-color: black;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
    }

    #mudarpersonagem:hover{
      background-color: white;
      color: black;
      font-size: 20px;
    }
  </style>
</head>
<body>
    <header>
        <nav class="navbar navbar fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="./IMG/serenus.png" alt="Logo do Serenus">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="./IMG/serenus.png" alt="Logo da Serenus"></h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Exercicios</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mais Opções
                      </a>
                      <ul class="dropdown-menu dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sobre o Serenus</a></li>
                        <li><a class="dropdown-item" href="#">Profissionais</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Avaliações e Ajudas</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Psicologo..." aria-label="Search">
                    <button class="btn btn-success" type="submit">Buscar</button>
                  </form>
                </div>
              </div>
            </div>
        </nav>
    </header>
    <main>
      <div class="row" style="margin-top: 10%">
            <div class="col-sm-1"></div>
            <div class="col-sm-4"><h1>Pagina usuario</h1></div>
            <div class="col-sm-1"></div>
      </div>
      
        <div class="row">
            <div class="col-sm-3"><img style="width: 100%" src="https://icons.iconarchive.com/icons/tonev/windows-7/256/windows-7-user-icon.png" alt=""></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6"><h2 style="color: black"><?php echo $user_name; ?></h2><h3>Email</h3><h4>senha</h4></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5"><h6 style="font-size: 45px">Minha biografia...</h6></div>
            <div class="col-sm-1"></div>
        </div>
            <div class="row">
              <div class="col-sm-1"></div>
              <div id="bordas" class="col-sm-7">Sou um epico e incrivel heroi de um reino magico...</div>
              <div class="col-sm-1"></div>
            </div>
        
            <div class="row" style="margin-top: 10%">
               <div class="col-sm-3">
                 <h2>Meu personagem!!</h2>
                 <p style="font-size: 20px">Ele tem essa idade...</p>
                 <p style="font-size: 20px">Ele anda muuuito rapido vrumm!</p>
                 <p style="font-size: 20px">Ele tem super poderes!</p>
              </div>
              <div class="col-sm-5"></div>
              <div class="col-sm-4"><img style="width: 100%" src="C:\Users\0220832311006\Desktop\Serenus projeto\SerenusNovo melhorado demais 222222222\Sprites\flatboy\png\Idle (4).png" alt=""></div>
            </div>
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-3"><button onclick="abrepagina()" id="roupa">Deseja mudar a roupa dele?</button></div>
              <div class="col-sm-3"><button onclick="mudapersonagem()" id="roupa">Deseja mudar o personagem</button></div>
              <div class="col-sm-3"><button onclick="abrepagina()" id="roupa">Mudar a altura do pesonagem</button></div>
            </div>

           
            <div class="row" style="margin-top: 10%">
            <div class="col-sm-4"></div>
            <div class="col-sm-5"><h3>Minhas estatisticas no site</h3></div>
            <div class="col-sm-1"></div>
            </div>



            
            <div class="row">
            <div class="col-sm-5"><img style="width: 100%" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/5f3cebf4-b034-4723-b759-973588834730/d2rad7p-38ba70f3-da9c-4b23-a0a1-abada3428b45.png" alt=""></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
              <h4>Meu tempo de uso</h4>
              <h4>Minha musica favorita no lofi</h4>
              <h4>Quantas vezes eu ja pedi conselho para a Zoe...</h4>
              <h4>Meu nivel de conta nas lives</h4>
            </div>
          </div>
           
            <div class="row">
              <div class="col-sm-3"><img style="width: 100%" src="C:\Users\0220832311006\Desktop\Serenus projeto\SerenusNovo melhorado demais 222222222\IMG\mulher1.png" alt=""></div>
            <div class="col-sm-3"></div>

            <div class="col-sm-3"><img style="width: 100%" src="C:\Users\0220832311006\Desktop\Serenus projeto\SerenusNovo melhorado demais 222222222\IMG\mulher1.png" alt=""></div>
            <div class="col-sm-1"></div>
            </div>
            
            <div class="row">
              <div class="col-sm-3"></div>
            <div class="col-sm-3"><img style="width: 100%"  src="C:\Users\0220832311006\Desktop\Serenus projeto\SerenusNovo melhorado demais 222222222\IMG\mulher1.png" alt=""></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"><img style="width: 100%"  src="C:\Users\0220832311006\Desktop\Serenus projeto\SerenusNovo melhorado demais 222222222\IMG\mulher1.png" alt=""></div>
            </div>
            
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-3"></div>
              <div class="col-sm-3"></div>
            </div>
            
        </div>
    </main>
    <footer>
        <div class="container text-center">
            <div class="row" id="rowPrimary">
               <div class="col" id="colFooter">
                 <img src="./IMG/LogoBranca2.png">
                 <p class="footerP">Sua Paz, Nossa Missão, <br> Cuidando da sua Mente, <br> Transformando Vidas.</p>
            
               </div>
               <div class="col" id="menuFooter">
                <h4>Páginas</h4><br>
                <a href="#">Inicio</a>
                    <div class="spaceAdoFooter"></div>
                <a href="#">Sobre Nós</a>
                    <div class="spaceAdoFooter"></div>
                <a href="#">Sintomas</a>
            
               </div>
               <div class="col" id="contatoFooter">
                <h4>Contato</h4>
                <br>
                <div class="enviarMsg">
                    <label>
                        <img src="./IMG/setaDireita.svg" alt="iconeSvg">
                    </label>
                    <input placeholder="   Envie uma mensagem">
                </div>
            
               </div>
            </div>
            <div class="card text-center" id="cardTextPrimaryFooter">
              <div class="card-header">
                <div class="ligueFooter">
                  <h3>Por favor Ligue para:</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col" id="sobreCol1Footer">
                        <h4>CVV</h4>
                        <h4>LIGUE : 188</h4>
                        <p>Caso você precise de apoio Emocional e ajuda contra a prevenção de suicidio. oferecido por vonlutarios.</p>
                    </div>
                    <div class="col" id="sobreCol2Footer">
                        <h4>Samu</h4>
                        <h4>LIGUE : 192</h4>
                        <p>Caso seja Urgente e tenha No caso de urgências e emergências de vários tipos, como traumática, pediátrica, psiquiátrica, entre outras.ocorrido algo</p>
                    </div>
                    <div class="col" id="sobreCol3Footer">
                        <h4>Polícia</h4>
                        <h4>LIGUE : 190</h4>
                        <p>Caso você esteja sendo ameaçado ou uma pessoa agressiva esteja te machucando </p>
                    </div>
                    <div class="col" id="sobreCol4Footer">
                        <h4>Bombeiros</h4>
                        <h4>LIGUE : 193</h4>
                        <p>Resgate para tentativa de suicidio,acidentes e incêndio e outros tipos de apoio emocional</p>
                    </div>
    
                </div>
              </div>
            </div>
        </div>
        <div class="card text-center" id="cardTextSecondFooter">
          <div class="card-footer text-body-secondary">
            <a href="#" class="ahrefIcons">
              <img src="./IMG/whatsapp.png" alt="icone do whatsapp" class="imagemIcon">
              <img src="./IMG/linkedin.png" alt="icone do linkedin" class="imagemIcon">
              <img src="./IMG/instagram.png" alt="icone do instagram" class="imagemIcon">
              <img src="./IMG/github.png" alt="icone do github" class="imagemIcon">
            </a>
              <p>Copyright© 2023 - Fatec Taquaritinga</p>
          </div>
        </div>
    </footer>
</body>
</html>