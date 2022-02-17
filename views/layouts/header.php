<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/css/footer.css" rel="stylesheet">
        <link href="/template/css/towars_page.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="header_top "><!--header_top-->
                    <div class="header_block conteiner">
                            <div class="top_element_left">
                                <div class="top_element">Usługa wsparcia</div>
                                <div class="top_element">О firmie</div>
                                <div class="top_element">Łączność</div>
                                <a href="http://localhost/admin"><div class="top_element">Administrator</div></a>
                            </div>
                            <div class="top_element_right">
                            <div class="top_block_element place">
                                    <i class="fa fa-map-marker"></i>  
                                    <select class="place_select">
                                        <option>Moskwa</option>
                                        <option>Warszawa</option>
                                    </select>
                                </div>
                                <div class="top_element">
                                <a href="#"><?php if (User::isGuest()): ?>                                        
                                            <div class="top_block_element"><a href="/user/login/"><i class="fa fa-lock"></i> wejście</a></div>
                                        <?php else: ?>
                                            <a href="/cabinet/"><i class="fa fa-user"></i> Konto</a>
                                            <a href="/user/logout/"><i class="fa fa-unlock"></i> Wyjście</a></li>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="top_element">
                                        <a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> Kosz 
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                        </a>
                                </div>
                            </div>
                </div><!--/header_top-->

                <div class="header_middle conteiner"><!--header-middle-->

                       <div class="header_middle_element small_header_block">
                            <div class="header_search">
                                <form>
                                    <input class="input_search" type="search" placeholder="Search..">
                                    <i class="fa fa-search"></i>
                                </form>
                            <div class="shops_adress">Adresy sklepow</div>
                            </div> 
                        </div>
                       <div class="header_middle_element big_header_block">
                            <img src="../../template/images/home/main-logo.svg">
                       </div> 
                       <div class="header_middle_element small_header_block">
                           <div class="header_contact_block ">
                                <div class="phone_number"><i class="fa fa-phone"></i> 8-800-50-50-501</div>
                                <div class="whork_time">Sklep internetowy działa <span class="bolt_text">с 08:00 do 22:00</span></br>siedem dni w tygodniu</div>
                            </div>
                       </div> 
                </div><!--/header-middle-->

                <div class="header-bottom conteiner"><!--header-bottom-->
                    <div class="main_menu">
                    <a href="/"><div class="menu_section">Glowna</div></a>
                    <a href="/catalog/"><div class="menu_section">Katalog</div></a>
                    <a href="/about/"><div class="menu_section">О sklepie</div></a>
                    <a href="/contacts/"><div class="menu_section">Kontakt</div></a>
                    <a href="/cart/"><div class="menu_section">Kosz</div></a>
                    </div>
                </div><!--/header-bottom-->

            </header><!--/header-->