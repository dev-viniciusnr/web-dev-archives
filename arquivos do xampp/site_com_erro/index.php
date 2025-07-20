<html>
<head>
	<?php include('head.php') ?>
</head>
<body>
	
	<?php include('header.php') ?>

	<div id="corpo">
		<div id="slider">
			
    <!-- Slide Bar -->
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/slider-home/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div data-p="225.00">
                <img data-u="image" src="img/slider-home/banner-1.jpg" />
                <div data-u="caption" data-t="0" style="position:absolute;top:120px;left:75px;width:470px;height:220px;">
                    <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;overflow:hidden;">
                    </div>
                </div>
            </div>
            <div data-p="225.00">
                <img data-u="image" src="img/slider-home/banner-2.jpg" />
            </div>
            <div data-p="225.00">
                <img data-u="image" src="img/slider-home/banner-3.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
		</div>
	</div>

    <!-- PRODUTOS -->
        <div class="title-products-home esq">
        <p>Lançamentos</p>
        <img src="img/borda_esq.png">
        <div class="ams-prod">
            <ul>
                 <li> 
                   <div id="produto" class="ind-prod">
                        <a href="produto.php"><div><img src="img/produto/camisas/prod-3.png"></div>
                        <h2>Camiseta Branca</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                  </li>
                 <li>
                   <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/canecas/caneca-4.jpg"></div>
                        <h2>Camiseta Branca</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/camisas/prod-4.jpg"></div>
                        <h2>Camiseta Branca</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Branca</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod quinto-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Branca</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod last-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Branca</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="title-products-home dir">
        <p>Mais Vendidos</p>
        <img src="img/borda_dir.png">
        <div class="ams-prod">
            <ul>
                 <li>
                   <div id="produto" class="ind-prod">
                       <a href="#"><div><img src="img/produto/camisas/prod-2.png"></div>
                       <h2>Caneca Branca</h2>
                       <h3>R$19,90</h3></a>
                    </div>
                  </li>
                 <li>
                   <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/canecas/caneca-3.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/camisas/prod-6.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod quinto-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod last-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="title-products-home esq">
        <p>Promoções</p>
        <img src="img/borda_esq.png">
        <div class="ams-prod">
            <ul>
                 <li>
                   <div id="produto" class="ind-prod">
                       <a href="#"><div><img src="img/produto/camisas/prod-1.png"></div>
                       <h2>Camiseta Inferno</h2>
                       <h3>R$19,90</h3></a>
                    </div>
                  </li>
                 <li>
                   <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/canecas/caneca-2.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/camisas/prod-7.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod quinto-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod last-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="title-products-home dir">
        <p style="float: right;">Horizon Star</p>
        <img src="img/borda_dir.png">
        <div class="ams-prod">
            <ul>
                 <li>
                   <div id="produto" class="ind-prod">
                       <a href="#"><div><img src="img/prod.jpg"></div>
                       <h2>Camiseta Inferno</h2>
                       <h3>R$19,90</h3></a>
                    </div>
                  </li>
                 <li>
                   <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/canecas/caneca-1.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/produto/camisas/prod-5.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod quinto-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
                <li>
                    <div id="produto" class="ind-prod last-prod">
                        <a href="#"><div><img src="img/prod.jpg"></div>
                        <h2>Camiseta Inferno</h2>
                        <h3>R$19,90</h3></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
     <img class="borda cima_top" src="img/borda_center.png">
    <div class="container">
        <div class="row msa">
            <div class="col-md-6 msa-um">
                <img src="img/dog.jpeg">
            </div>
            <div class="col-md-6 msa-dois">
                <h2>Monte Sua Arte</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget nulla at tortor dictum ornare a nec dui. Aenean ac augue quam. Praesent dignissim tortor sit amet massa vulputate, facilisis fermentum dolor sodales. Vivamus vitae sapien purus. Aenean consectetur vehicula erat, a hendrerit eros egestas a. Suspendisse fermentum, nulla dignissim accumsan pretium, enim mauris sollicitudin orci, ac eleifend elit orci a dolor. Cras ac mauris a metus facilisis hendrerit nec ac libero. Maecenas id luctus tortor..</p>
                <button id="btn-um">MONTAR</button>
                <button id="btn-dois">SAIBA MAIS</button>
            </div>
        </div>
    </div>
    <img class="borda baixo_bot" src="img/borda_center_dois.png">
	<?php include('footer.php') ?>

</body>
</html>