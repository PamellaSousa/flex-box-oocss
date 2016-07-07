<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <title>Contato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/base/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/layout/structure.css" rel="stylesheet" type="text/css">
        <link href="css/module/mods.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/base/my-rules.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-contato.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-menu.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-footer.css" rel="stylesheet" type="text/css">
        <link media="all" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="o-masterContainer c-overflowY">
            <div class="l-siteNav c-bgSiteNav--1">
                <?php include 'menu.php'; ?>
            </div>
            <div class="l-contentContainer c-bgContentContainer--1">
                <div class="o-formContact">
                    <form class="o-formContact__form">
                        <div class="col c-inputName">
                            <label class="o-formContact__label">Nome</label>
                            <input class="o-formContact__input" type="text" value="">
                        </div>
                        <div class="col c-inputEmail">
                            <label class="o-formContact__label">E-mail</label>
                            <input class="o-formContact__input" type="email" value="">
                        </div>
                        <div class="col">
                            <label class="o-formContact__label">Assunto</label>
                            <input class="o-formContact__input" type="text" value="">
                        </div>
                        <div class="col">
                            <label class="o-formContact__label">Mensagem</label>
                            <textarea class="o-formContact__textarea" style="margin-bottom: 15px;" rows="10" cols="40"></textarea>
                            <a class="o-sliderBtn__qodef-btn c-qodef-btn-solid c-sliderBtn__qodef-btn--transition c-bgGraphiteTransition">Dui ipsum dolor</a>
                        </div>
                    </form>
                </div>
                <div class="o-txtContact">
                    <h1 class="o-contentTxt__title">Ut sit amet volutpat erat. Nam in molestie ante.</h1>
                    <p class="o-contentTxt__paragraph">
                        <i class="fa fa-map-marker u-iMarginFix" aria-hidden="true"></i>XXXXX 111 Bloco Y Sala 111 - XXXXXX - XXXXXX <br>
                        <i class="fa fa-phone u-iMarginFix" aria-hidden="true"></i>Telefone/Fax: 0XX 00 0000-0000<br>
                        <i class="fa fa-envelope u-iMarginFix" aria-hidden="true"></i>CEP: 88.888-888</p>
                </div>
            </div>
            <footer class="l-footer c-bgFooter--1">
                <?php include 'footer.php'; ?>
                <div class="o-footer__copyright">Copyright &copy;.Todos os direitos reservados.</div>
            </footer>
        </div>
    </body>
</html>
