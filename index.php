<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <header>
        <div>
            <h1 class="logo" style="color:white"><?php echo htmlentities("<")?>VACANT.INDIE<?php echo htmlentities(">")?> </h1>
            <nav class="desktop">
                <ul>
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        <a href="/">Sobre</a>
                    </li>
                    <li>
                        <a href="/">Serviços</a>
                    </li>
                    <li>
                        <a href="/">Contato
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="mobile right">
                <ul>
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        <a href="/">Sobre</a>
                    </li>
                    <li>
                        <a href="/">Serviços</a>
                    </li>
                    <li>
                        <a href="/">Contato
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>

    </header>
    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form action="post">
                <h2>Qual o seu melhor email??</h2>
                <input type="email" nama="email" required>
                <input type="submit" name="acao" value="Enviar">
            </form>
        </div>
    </section>
    <section class="descricao">
        <div class="w50 left">
            <h2>Jamerson Wesley</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, corporis maxime id sint delectus doloribus hic quia repellat itaque provident voluptas laboriosam culpa, beatae dicta voluptatem iure blanditiis pariatur minima!</p>
        </div>

        <div class="w50 left">
            <img src="./images/logo.jpg" width="500px" height="500px" alt="">
        </div>
        <div class="clear"></div>
    </section>
    <section class="descricao">
        <h2 class="titulo">Descrição</h2>
        <div class="center">
            <div class="especialidades w33 left ">
                <h3><i class="fab fa-css3"></i></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptatibus! Id odit animi eligendi, reiciendis numquam natus facilis nostrum laboriosam dolor minus cum necessitatibus ullam velit debitis quam? Rerum, in.</p>
            </div>
           
            <div class="especialidades w33 left ">
                <h3><i class="fab fa-php"></i></h3>
                <h3>PHP</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptatibus! Id odit animi eligendi, reiciendis numquam natus facilis nostrum laboriosam dolor minus cum necessitatibus ullam velit debitis quam? Rerum, in.</p>
            </div>
            <div class="especialidades w33 left">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, voluptatibus! Id odit animi eligendi, reiciendis numquam natus facilis nostrum laboriosam dolor minus cum necessitatibus ullam velit debitis quam? Rerum, in.</p>
            </div>
            <div class="clear"></div>
        </div>

    </section>
    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="titulo">Depoimentos</h2>
                <div class="depoimento1">
                    <p class="depoimento-decricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil optio debitis repellat dolores doloremque ex magni distinctio enim provident molestiae eum fugit magnam facilis in, amet explicabo laudantium quas maxime?</p>
                </div>
                <div class="depoimento1">
                    <p class="depoimento-decricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil optio debitis repellat dolores doloremque ex magni distinctio enim provident molestiae eum fugit magnam facilis in, amet explicabo laudantium quas maxime?</p>
                </div>
                <div class="depoimento1">
                    <p class="depoimento-decricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil optio debitis repellat dolores doloremque ex magni distinctio enim provident molestiae eum fugit magnam facilis in, amet explicabo laudantium quas maxime?</p>
                </div>
            </div>
        </div>
     
        <div class="w50 left">
            <h2>Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, possimus nemo maiores quas ex minima deleniti commodi eius! Voluptas, numquam reprehenderit. Magnam dolorem, eos cum at reiciendis odit corporis distinctio.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minima corrupti mollitia quisquam iure, sunt aliquam ducimus cumque debitis vero totam vitae suscipit odit eveniet, quibusdam error dolore ad recusandae.

                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dolore quas et provident, ab ipsa aliquid iste sunt quis culpa vel beatae magni amet, quisquam nam eius, perspiciatis dolorum eum.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="center">
            <p>Todos direitos reservados</p>
        </div>
        <div class="clear"></div>
    </footer>

</body>

</html>