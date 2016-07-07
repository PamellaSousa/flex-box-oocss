<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/base/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/layout/structure.css" rel="stylesheet" type="text/css">
        <link href="css/module/mods.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/base/my-rules.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-servicos.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-menu.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-footer.css" rel="stylesheet" type="text/css">
        <link media="all" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="o-masterContainer c-overflowY">
            <div class="l-siteNav c-bgSiteNav--1">
                <?php include 'menu.php'; ?>
            </div>
            <article class="l-contentContainer c-bgContentContainer--white">
                <div class="o-contentTxt">
                    <h1 class="o-contentTxt__title">Proin facilisis</h1>
                    <p class="o-contentTxt__paragraph">Ut at justo sed tellus volutpat laoreet. Proin nisl est, gravida vitae libero a, pulvinar sollicitudin enim. Mauris efficitur, velit quis blandit mattis, nulla velit dictum lorem, non efficitur nisi velit eget mauris. Cras rutrum, mi eget ultrices finibus, metus odio vulputate lacus, sed convallis magna libero quis erat. Suspendisse cursus purus arcu, in luctus magna facilisis sit amet. Quisque molestie dapibus facilisis.</p>
                    <p class="o-contentTxt__paragraph">Morbi malesuada fringilla sem, non consequat erat lacinia quis. Cras eu hendrerit leo. Sed tincidunt quam at metus vehicula, vel auctor dui sagittis.</p>
                </div>
                <div class="o-contentAnim">
                    <div class="o-bgFix c-bgFix--1"></div>
                </div>
                <div class="l-contentShower">
                    <div class="o-shower">
                        <input class="o-shower__input" type="checkbox" id="shower1" name="shower-btn">
                        <label for="shower1" class="o-showerSec">
                            <a class="o-shower__icon">
                                <span class="o-spanShower">
                                    <i class="fa fa-users fa-2x"></i>
                                </span>
                            </a>
                            <a class="o-shower__title">Proin laoreet tellus</a>
                            <a class="o-shower__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</a>
                        </label>
                        <input class="o-shower__input" type="checkbox" id="shower2" name="shower-btn">
                        <label for="shower2" class="o-showerSec">
                            <a class="o-shower__icon">
                                <span class="o-spanShower">
                                    <i class="fa fa-desktop fa-2x"></i>
                                </span>
                            </a>
                            <a class="o-shower__title">Finibus ipsum</a>
                            <a class="o-shower__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</a>
                        </label>
                        <div class="o-modalShower c-bgModalShower--enfoque" id="enfoque">
                            <div class="o-modalShower__containerTxt u-0paddingRightLeft">
                                <div class="o-showerSec u-marginAuto">
                                    <div class="o-shower__icon is-shower__icon--active">
                                        <span class="o-spanShower is-spanShower--active">
                                            <i class="fa fa-users fa-2x"></i>
                                        </span>
                                    </div>
                                    <!--h2 class="o-shower__title">enfoque corporativo</h2-->
                                </div>
                            </div>
                            <div class="o-modalShower__containerTxt">
                                <h2 class="o-contentTxt__title">Proin laoreet tellus</h2>
                                <p class="o-contentTxt__paragraph">Nunc ornare lorem et magna condimentum tempus ut elementum mi. Aenean in aliquam lacus, sit amet lacinia sapien. Aenean pharetra ultricies tincidunt. Pellentesque velit erat, pharetra non pulvinar non, consectetur ut dolor. Aliquam eget iaculis mauris.</p>
                                <p class="o-contentTxt__paragraph">In dapibus in purus ac vestibulum. Duis quis felis libero. Pellentesque vitae nulla pulvinar, varius nunc sed, vulputate dolor. Etiam id mi ipsum.</p>
                            </div>
                            <label for="shower1" class="o-modalShower__btn">
                                <i class="fa fa-times fa-2x"></i>
                            </label>
                        </div>
                        <div class="o-modalShower c-bgModalShower--integracao" id="integracao">
                            <div class="o-modalShower__containerTxt u-0paddingRightLeft">
                                <div class="o-showerSec u-marginAuto">
                                    <div class="o-shower__icon is-shower__icon--active">
                                        <span class="o-spanShower is-spanShower--active">
                                            <i class="fa fa-desktop fa-2x"></i>
                                        </span>
                                    </div>
                                    <!--h2 class="o-shower__title">integração de sistemas</h2-->
                                </div>
                            </div>
                            <div class="o-modalShower__containerTxt">
                                <h2 class="o-contentTxt__title">Finibus ipsum</h2>
                                <p class="o-contentTxt__paragraph">Etiam diam metus, tempus quis mi a, semper aliquam dui. Fusce a massa finibus, euismod elit ac, consectetur tortor. Nullam erat mi, lobortis nec tincidunt eget, ultrices vel felis. Phasellus egestas eget arcu non tempor.</p>
                                <p class="o-contentTxt__paragraph">Mauris sodales elit quis velit vehicula ornare. Cras ac dictum augue. Donec sit amet maximus enim. Maecenas maximus tincidunt sagittis. Ut vulputate nisl sed justo ultrices, quis mattis elit luctus. Aenean tempor ipsum nulla. In pretium nunc nec aliquam congue.</p>
                            </div>
                            <label for="shower2" class="o-modalShower__btn">
                                <i class="fa fa-times fa-2x"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </article>
            <footer class="l-footer c-bgFooter--1">
                <?php include 'footer.php'; ?>
                <div class="o-footer__copyright">Copyright &copy;.Todos os direitos reservados.</div>
            </footer>
        </div>
    </body>
</html>
