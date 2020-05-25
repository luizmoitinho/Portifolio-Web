<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Luiz Moitinho | Portifólio</title>
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web,FullStack, Desenvolvedor, Sistemas, HTMl, CSS,JS,PHP,API">
    <meta name="description" content="Site pessoal do programdor full-stack Luiz Moitinho">
</head>

<body>

    <header>
        <div class="center">
            <div class="logo left">Luiz Moitinho</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="#">Home<a></li>
                    <li><a href="#">Sobre<a></li>
                    <li><a href="#">Serviços<a></li>
                    <li><a href="#">Depoimentos<a></li> 
                    <li><a href="#">Contato<a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="btn-menu-collapse">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#">Home<a></li>
                    <li><a href="#">Sobre<a></li>
                    <li><a href="#">Serviços<a></li>
                    <li><a href="#">Depoimentos<a></li>
                    <li><a href="#">Contato<a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail</h2>
                <input type="email" name="email" placeholder="Digite aqui seu email!" required>
                <button name="acao">Cadastrar</button>
            </form>
        </div>
    </section>

    <section class="desc-author">
        <div class="center">
            <div class="w50 left">
                <h2>Luiz Carlos Costa Moitinho</h2>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
            </div>
            <div class="w50 left">
                <img src="assets/img/img-author.jpg" class="img-profile right">
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="habilidades">
        <div class="center">
            <h2 class='title'>Habilidades</h2>
            <div class="w33 left box-habilidade">
                <h3>
                    <i class="fab fa-js fa-3x"></i>
                </h3>
                <h4>Java Script</h4>
                <div class="desc-habilidade">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                </div>
            </div>
            <div class="w33 left box-habilidade">
                <h3>
                    <i class="fab fa-html5 fa-3x"> </i>
                </h3>
                <h4>HTML5</h4>
                <div class="desc-habilidade">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                </div>
            </div>
            <div class="w33 left box-habilidade">
                <h3>
                    <i class="fab fa-php fa-3x"></i>
                </h3>
                <h4>PHP</h4>
                <div class="desc-habilidade">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                </div>
            </div>
            <div class="w33 left box-habilidade">
                <h3>
                    <i class="fab fa-css3-alt fa-3x"></i>
                </h3>
                <h4>CSS</h4>
                <div class="desc-habilidade">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="depoimentos-container">
        <div class="center ">
            <h2 class="title">O que nossos clientes dizem</h2>
            <div class="desc-depoimento w33 left">
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                <p class="name-author">Lorem Ipsum</p>
            </div>
            <div class="desc-depoimento w33 left">
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                <p class="name-author">Lorem Ipsum</p>
            </div>
            <div class="desc-depoimento w33 left">
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                <p class="name-author">Lorem Ipsum</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section class="servicos-container">
        <div class="center">
            <h2 class="title">Nossos Serviços</h2>
            <ul class="servicos">
                <li class="w33 left">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                </li>
                <li class="w33 left">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.

                </li>
                <li class="w33 left">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </section>

    <footer>
        <div class="center">
            <div class="w33 left">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Depoimentos</a></li>
                    <a><li>Contato</li></a>
                </ul>
            </div>
            <div class="w33 left">
                <h4>Redes sociais</h4>
                <ul class="midias-sociais" >
                    <a href="#">
                        <li>
                            <i class="fab fa-facebook 7X"></i>
                        </li>
                    </a>
                    <a href="">
                        <li>
                            <i class="fab fa-instagram 7X"></i>
                        </li>
                    </a>
                    <a href="">
                        <li>
                            <i class="fab fa-github 7X"></i>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="w33 left">
                <h4>Contato</h4>
                <ul>
                    <a ><li>E-mail: luizcarlos_costam@hotmail.com</li></a>
                    <a ><li>Celular: (11) 98123-1233</li></a>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="direitos left">
            MTI Solutions - 2020&copy; Todos os direitos reservados
        </div> 
</footer>
</body>

</html>