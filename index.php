<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/base/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/layout/structure.css" rel="stylesheet" type="text/css">
        <link href="css/module/slider.css" rel="stylesheet" type="text/css">
        <link href="css/module/notice-slider.css" rel="stylesheet" type="text/css">
        <link href="css/module/mods.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/base/my-rules.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-home.css" rel="stylesheet" type="text/css">
        <link href="css/layout/media-menu.css" rel="stylesheet" type="text/css">
        <link media="all" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="o-masterContainer">
            <div class="l-siteNav">
                <?php include 'menu.php'; ?>
            </div>
            <div class="o-slider">
                <input class="o-slider__input" type="radio" name="slide_switch" id="id1" checked="checked"/>
                <div class="o-slider__img c-slider__img--1">
                    <div class="o-sliderTxt">
                        <h1 class="o-sliderTxt__title">Lorem ipsum dolor sit amet</h1>
                        <p class="o-sliderTxt__subTitle">consectetur adipiscing elit. Integer ac erat vitae metus sollicitudin dictum. Etiam efficitur cursus velit in euismod.</p>
                        <div class="o-sliderBtn">
                            <a class="o-sliderBtn__qodef-btn c-qodef-btn-solid c-sliderBtn__qodef-btn--transition c-bgGraphiteTransition">dui ipsum dolor</a>
                        </div>
                    </div>
                </div>

                <input class="o-slider__input" type="radio" name="slide_switch" id="id2"/>
                <div class="o-slider__img c-slider__img--2">
                    <div class="o-sliderTxt">
                        <h1 class="o-sliderTxt__title">Proin accumsan hendrerit neque</h1>
                        <p class="o-sliderTxt__subTitle">Sed ac maximus nunc, a egestas leo. Nulla mi ante, luctus ut risus sit amet, interdum maximus urna. Praesent velit tellus, scelerisque vel finibus sed.</p>
                        <div class="o-sliderBtn">
                            <a class="o-sliderBtn__qodef-btn c-qodef-btn-solid c-sliderBtn__qodef-btn--transition c-bgGraphiteTransition">dui ipsum dolor</a>
                        </div>
                    </div>
                </div>

                <input class="o-slider__input" type="radio" name="slide_switch" id="id3"/>
                <div class="o-slider__img c-slider__img--3">
                    <div class="o-sliderTxt">
                        <h1 class="o-sliderTxt__title">Quisque id placerat urna</h1>
                        <p class="o-sliderTxt__subTitle">Nam bibendum pretium quam, quis vestibulum ex dignissim nec. Nam nec magna sit amet odio pharetra imperdiet eu vitae sem.</p>
                        <div class="o-sliderBtn">
                            <a class="o-sliderBtn__qodef-btn c-qodef-btn-solid c-sliderBtn__qodef-btn--transition c-bgGraphiteTransition">dui ipsum dolor</a>
                        </div>
                    </div>
                </div>

                <input class="o-slider__input" type="radio" name="slide_switch" id="id4"/>
                <div class="o-slider__img c-slider__img--4">
                    <div class="o-sliderTxt">
                        <h1 class="o-sliderTxt__title">Nunc ullamcorper turpis elit</h1>
                        <p class="o-sliderTxt__subTitle">In dignissim eros fermentum sed. Phasellus a mauris id nulla facilisis ornare ut quis nibh.</p>
                        <div class="o-sliderBtn">
                            <a class="o-sliderBtn__qodef-btn c-qodef-btn-solid c-sliderBtn__qodef-btn--transition c-bgGraphiteTransition">dui ipsum dolor</a>
                        </div>
                    </div>
                </div>

                <div class="nav-ltr">
                    <label class="o-slider__next" for="id1"><i class="fa fa-chevron-right "></i></label>
                    <label class="o-slider__next" for="id4"><i class="fa fa-chevron-right "></i></label>
                    <label class="o-slider__next" for="id3"><i class="fa fa-chevron-right "></i></label>
                    <label class="o-slider__next" for="id2"><i class="fa fa-chevron-right "></i></label>
                </div>
                <div class="nav-rtl">
                    <label class="o-slider__prev" for="id1"><i class="fa fa-chevron-left"></i></label>
                    <label class="o-slider__prev" for="id2"><i class="fa fa-chevron-left "></i></label>
                    <label class="o-slider__prev" for="id3"><i class="fa fa-chevron-left "></i></label>
                    <label class="o-slider__prev" for="id4"><i class="fa fa-chevron-left "></i></label>
                </div>

                <div class="o-slider__container-label">
                    <label class="o-slider__label c-slider__label--thumb1" for="id1"></label>
                    <label class="o-slider__label c-slider__label--thumb2" for="id2"></label>
                    <label class="o-slider__label c-slider__label--thumb3" for="id3"></label>
                    <label class="o-slider__label c-slider__label--thumb4" for="id4"></label>
                </div>
            </div>
            <div class="l-callNotice c-bgCallNotice--1">

                <div class="o-noticeSlider">
                    <input class="o-noticeSlider__input" type="radio" name="slide_switchN" id="id5" checked="checked"/>
                    <div id="a" class="o-noticeSlider__img">
                        <div class="o-noticeSliderTxt">
                            <h1 class="o-noticeBox__title">Vitae Mollis</h1>
                            <p class="o-noticeBox__p">Mauris fringilla facilisis volutpat. Duis lacinia finibus nisi vel blandit. Curabitur elementum feugiat justo.</p>
                        </div>
                        <div class="o-noticeBtn">
                            <a class="o-sliderBtn__qodef-btn c-sliderBtn__qodef-btn--transition c-borderWhiteHover c-bgWhiteTransition c-txtGraphiteTransition">Dui ipsum</a>
                        </div>
                    </div>

                    <input class="o-noticeSlider__input" type="radio" name="slide_switchN" id="id6"/>
                    <div id="b" class="o-noticeSlider__img">
                        <div class="o-noticeSliderTxt">
                            <h1 class="o-noticeBox__title">Vitae Mollis</h1>
                            <p class="o-noticeBox__p">Donec egestas leo auctor eros sollicitudin mattis. Morbi eget tellus sit amet urna vulputate egestas ut sit amet diam. Pellentesque lacus ipsum, dignissim posuere</p>
                        </div>
                        <div class="o-noticeBtn">
                            <a class="o-sliderBtn__qodef-btn c-sliderBtn__qodef-btn--transition c-borderWhiteHover c-bgWhiteTransition c-txtGraphiteTransition">Dui ipsum</a>
                        </div>
                    </div>

                    <input class="o-noticeSlider__input" type="radio" name="slide_switchN" id="id7"/>
                    <div id="c" class="o-noticeSlider__img">
                        <div class="o-noticeSliderTxt">
                            <h1 class="o-noticeBox__title">Vitae Mollis</h1>
                            <p class="o-noticeBox__p">Purus vel, tristique placerat nulla. Vivamus mattis augue vel facilisis hendrerit.</p>
                        </div>
                        <div class="o-noticeBtn">
                            <a class="o-sliderBtn__qodef-btn c-sliderBtn__qodef-btn--transition c-borderWhiteHover c-bgWhiteTransition c-txtGraphiteTransition">Dui ipsum</a>
                        </div>
                    </div>

                    <input class="o-noticeSlider__input" type="radio" name="slide_switchN" id="id8"/>
                    <div id="d" class="o-noticeSlider__img">
                        <div class="o-noticeSliderTxt">
                            <h1 class="o-noticeBox__title">Vitae Mollis</h1>
                            <p class="o-noticeBox__p">Cras aliquet enim non mi efficitur, ac porttitor tellus congue. Nullam sagittis nunc vitae dui ultricies, in vehicula lorem aliquam. Nam posuere elit ac dapibus iaculis.</p>
                        </div>
                        <div class="o-noticeBtn">
                            <a class="o-sliderBtn__qodef-btn c-sliderBtn__qodef-btn--transition c-borderWhiteHover c-bgWhiteTransition c-txtGraphiteTransition">Dui ipsum</a>
                        </div>
                    </div>
                    <div class="o-noticeSlider__container-label">
                        <label class="o-noticeSlider__label c-noticeSlider__label--thumb5" for="id5"></label>
                        <label class="o-noticeSlider__label c-noticeSlider__label--thumb6" for="id6"></label>
                        <label class="o-noticeSlider__label c-noticeSlider__label--thumb7" for="id7"></label>
                        <label class="o-noticeSlider__label c-noticeSlider__label--thumb8" for="id8"></label>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
