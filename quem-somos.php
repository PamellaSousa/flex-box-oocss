<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <title>Quem Somos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/base/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/layout/structure.css" rel="stylesheet" type="text/css">
        <link href="css/module/mods.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/base/my-rules.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-quemsomos.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-menu.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-footer.css" rel="stylesheet" type="text/css">
        <link media="all" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="o-masterContainer c-overflowY">
            <div class="l-siteNav c-bgSiteNav--1">
                <?php include 'menu.php'; ?>
            </div>
            <article class="l-contentContainer c-bgContentContainer--plexus">
                <div class="o-contentTxt">
                    <h1 class="o-contentTxt__title">Lorem Ipsum</h1>
                    <p class="o-contentTxt__paragraph"> Mauris fringilla facilisis volutpat. Duis lacinia finibus nisi vel blandit. Curabitur elementum feugiat justo. Donec egestas leo auctor eros sollicitudin mattis. Morbi eget tellus sit amet urna vulputate egestas ut sit amet diam. Pellentesque lacus ipsum, dignissim posuere purus vel, tristique placerat nulla. Vivamus mattis augue vel facilisis hendrerit.</p>
                    <p class="o-contentTxt__paragraph">Nullam sagittis nunc vitae dui ultricies, in vehicula lorem aliquam. Nam posuere elit ac dapibus iaculis. Mauris egestas dictum venenatis.</p>
                </div>
                <div class="o-contentTxt">
                    <div class="o-holder">
                        <div class="o-holder__holderSec">
                            <input class="o-holder__input" type="checkbox" name="holder-btn" id="missao">
                            <label class="o-holder__label" for="missao">
                                <a class="o-holder__btn">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <h2 class="o-holder__title">sociosqu</h2>
                            </label>
                            <p class="o-holder__txt">
                                "Nulla tristique lectus eget sem placerat laoreet. Donec ultricies elit ut bibendum ullamcorper."
                            </p>
                        </div>
                        <div class="o-holder__holderSec">
                            <input class="o-holder__input" type="checkbox" name="holder-btn" id="visao">
                            <label class="o-holder__label" for="visao">
                                <a class="o-holder__btn">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <h2 class="o-holder__title">consequat</h2>
                            </label>
                            <p class="o-holder__txt">
                                "Aliquam molestie consectetur consectetur. In efficitur."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="l-callAction c-bgCallAction">
                    <aside class="o-callAction">
                        <h1 class="o-callAction__title">Pellentesque interdum lacus fermentum</h1>
                        <p class="o-callAction__subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                        <a href="produtos.php" class="o-sliderBtn__qodef-btn c-qodef-btn-solid c-sliderBtn__qodef-btn--transition c-bgGraphiteTransition">dui ipsum dolor</a>
                    </aside>
                </div>
            </article>
            <footer class="l-footer c-bgFooter--1">
                <?php include 'footer.php'; ?>
                <div class="o-footer__copyright">Copyright &copy;.Todos os direitos reservados.</div>
            </footer>
        </div>
    </body>
</html>
