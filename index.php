<?php
require 'db.php'
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Likar Services</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link rel="stylesheet" href="./styles/main.css">
    <link href="путь_до/jquery.fancybox.min.css" rel="stylesheet">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="module">
  import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
</script>
   
    
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="color1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md color1 navbar-dark nav">
                        <!-- Brand -->
                        <a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="logo" class="logo"></a>
                    
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="./news.php">Новини</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="rosklad.php">Розклад</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active_nav" href="index.php">Про нас</a>
                                </li>
                                <li class="nav-item">
                                <?php
                                    if( isset($_SESSION['logged_user'])) : ?>
                                    <a class="nav-link login" href="logout.php">Вийти</a>
                                    <?php else : ?>
                                    <a class="nav-link login" href="signup.php">Зареєструватись/Увійти</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    
    </div>
    <div class="under_header">
        <div class="likar container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-header">Likar Services</h1>
                </div>
            </div>
        </div>
    </div>

    <main>
        <section class="container">
            <div class="row">
                <div class="col-12 likar_info">
                    <p><strong>Likar Services</strong> - Це сучасна, зручна та надійна електронна медична система, створена для пацієнтів, лікарів, державних та приватних медичних закладів. 
                </p>
                <p>З Likar Services у вас є : <br>- Можливість легко знайти та обрати свого лікаря;
<br>- Швидкий запис на прийом on-line себе та членів своєї родини;
<br>- Доступ до своєї електронної медичної картки (ЕМК);
<br>- Миттєві результати аналізів та діагностики в кабінеті пацієнта;
<br>- Доступ до призначень лікаря та плану лікування.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <img class="likar2"src="./img/secondimg.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 nsk_info">
                    <h2>Наші лікарі </h2>
                <p>Наші лікарі найкращі... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus suscipit sed, ratione amet eius sit autem aliquam assumenda reiciendis explicabo illum eveniet, tempora nihil animi praesentium dolore obcaecati reprehenderit eos?
                Libero veniam in sequi aut porro corrupti laborum. Provident voluptate magni quidem quod necessitatibus excepturi ex odit praesentium placeat blanditiis unde, sapiente accusantium asperiores numquam et, aut aperiam quia deleniti.
                Sapiente impedit neque soluta reprehenderit amet laboriosam provident fugiat similique totam, eum incidunt iure quo velit odio, ratione ea maiores, debitis non exercitationem laborum. Ipsa autem veniam voluptatum asperiores perspiciatis!
                Velit possimus quibusdam qui vero nemo delectus, tempore nam. Est dolor asperiores molestiae at. Corporis modi recusandae perspiciatis animi eum quibusdam, molestiae asperiores nisi, iste nesciunt voluptatem nulla dolor pariatur.
                Dolor quasi exercitationem dolores nam recusandae ab neque obcaecati laborum eligendi! Amet inventore accusantium iusto quam? Ex doloribus, odit alias animi placeat voluptates, sapiente maiores blanditiis iure, nihil eos! Enim!</p>
                </div>
            </div>
            <div class="row gallary">
                 
                    <div class="col-lg-3 col-md-4 col-6 thumb">
                        <a href="./img/likar1.jpg"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/likar1.jpg" alt="">
                        </a>
                    </div>
                
                
                    <div class="col-lg-3 col-md-4 col-6 thumb">
                        <a href="./img/likar2.png"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/likar2.png" alt="">
                        </a>
                    </div>
                
                
                    <div class="col-lg-3 col-md-4 col-6 thumb">
                        <a href="./img/likar3.jpg"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/likar3.jpg" alt="">
                        </a>
                    </div>
                
                
                    <div class="col-lg-3 col-md-4 col-6 thumb">
                        <a href="./img/likar4.png"data-fancybox="gallery">
                            <img class="img-fluid" src="./img/likar4.png" alt="">
                        </a>
                    </div>
                
            </div>
        </section>
    </main>
    <footer class="mt-auto container d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-white">© 2022 Limbo</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><img src="./img/facebook.png" alt="facebook" width="25px"></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><img src="./img/instagram.png" alt="instagram" width="25px"></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><img src="./img/youtube.png" alt="youtube" width="25px"></a></li>
    </ul>
  </footer>


</body>
</html>