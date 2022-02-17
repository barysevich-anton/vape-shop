<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
        <div class="header_main_image conteiner">
            <img src="../../template/images/home/main_image.jpg">
        </div>

        <div class="categ_main_page conteiner">
            <div class="categ_opis">
                <div class="categ_title">Popularne kategorie</div>
                <div class="categ_link">Wszystkie kategorie</div>
            </div>
            <div class="categ_cards">
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_1.PNG">
                </div>
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_2.PNG">
                </div>
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_3.PNG">
                </div>
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_4.PNG">
                </div>
            </div>
            <div class="categ_cards">
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_5.PNG">
                </div>
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_6.PNG">
                </div>
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_7.PNG">
                </div>
                <div class="categ_card">
                    <img src="../../template/images/cart/kat_8.PNG">
                </div>
            </div>
        </div>



            



            <div class="recommended_items conteiner"><!--recommended_items-->

</br>
</br>
</br>
</br>   
                    <a class="next" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a class="prev" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
</br>
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=4
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderProducts as $sliderItem): ?>
                                <a class="none_decoration" href="/product/<?php echo $sliderItem['id']; ?>">
                                <div class="item">
                                    <img src="<?php echo Product::getImage($sliderItem['id']); ?>">
                                    <div class="new_element_title">
                                                <?php echo $sliderItem['name']; ?>
                                            </div>

                                    <div class="new_products_price"><?php echo $sliderItem['price']; ?> $.</div>
                                    <div class="new_products_hover">
                                    <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>Do kosza</a>
                                    </div>
                                </div>
                                </a>


                            
                        <?php endforeach; ?>
                    </div>


                </div>

                                

            </div><!--/recommended_items-->


            <div class="mid_line">
                                    
                                    </div>






                                    

<div class="social conteiner">
            <div class="youtobe">
                <div class="social_title">kanał Youtube</div>
                <iframe width="100%" height="355" src="https://www.youtube.com/embed/XjdijjYexTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="blog">
                <div class="social_title">Nasz blog</div>
                <div class="blog_publikations">
                    <div class="publikation">
                        <img src="../../template/images/blog/blog1.jpg">
                        <div class="public_title">biznes w drodze do wyjścia</div>
                        <div class="public_date">29 kwietnia 2021</div>
                    </div>
                    <div class="publikation">
                    <img src="../../template/images/blog/blog2.jpg">
                        <div class="public_title">Godziny otwarcia sklepów BABYLON VAPESHOP w święta majowe</div>
                        <div class="public_date">28 kwietnia 2021</div>
                    </div>
                    <div class="publikation">
                    <img src="../../template/images/blog/blog3.jpg">
                        <div class="public_title">21.04.2021 LIGHTHOUSE BABYLON VAPESHOP przenosi się na pas Zbrojowni, budynek 5, -1 piętro</div>
                        <div class="public_date">9 kwietnia 2021</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_info">
                    <div class="main_info_left">
                        <img src="../../template/images/main_info/main_info.jpg">
                    </div>
                    <div class="main_info_right">
                        <div class="main_info_right_title">
                        Sklep Vape (sklep internetowy z elektronicznymi papierosami) BABYLON VAPESHOP
                        </div>
                        <div class="main_info_right_text">
                        BABYLON VAPESHOP to zespół profesjonalistów, który stał u początków subkultury wapowania w Rosji.
                        </br></br>
                        Od 2014 roku, kiedy otworzyliśmy jeden z pierwszych sklepów vape w Rosji, rozwinęliśmy naszą sieć do 15 sklepów detalicznych w 6 miastach kraju i ponad 10 000 punktów samodostawy w krajach WNP, zorganizowaliśmy 4 największe międzynarodowe wystawy „Russki Vape”, przynosząc społeczeństwu swoją filozofię.
                        </br></br>
                        BABYLON VAPESHOP jest dystrybutorem światowych producentów – JUUL, myBlu, Phix, Smoant, Brewell, Frisco, Yoskillslab, Vaporesso, Smok, Vandy vape i innych. A także wybór produktów: płyny solne, płyny do papierosów elektronicznych, rta, rdta, oryginalne cewki (wata), aromaty do samodzielnego mieszania, mody do baterii, zestawy startowe dla początkujących, mody mechaniczne, mody pudełkowe, płyny tytoniowe, płyny premium, systemy POD, nicboostery, zapasowe materiały eksploatacyjne, modele klonów itp.
                        </br></br>
                        Poszerzony asortyment katalogu sklepu o ekskluzywne produkty i najnowsze innowacje na rynku vaping, ekspercką i bezstronną opinię o każdym produkcie.
                        </div></br>
                        <div class="main_info_right_popular">
                        <div class="transparent_box">Popularny : </div> <div class="yellow_box">salt płyny</div> <div class="palka">|</div>  <div class="yellow_box">voopoo pod</div> <div class="palka">|</div>  <div class="yellow_box">justfog pod</div> <div class="palka">|</div> <div class="yellow_box">Suorin pod</div> <div class="palka">|</div> </br> <div class="yellow_box">Asmodus mod</div> <div class="palka">|</div> <div class="yellow_box">hqd</div><div class="palka">|</div> <div class="yellow_box">Advken</div><div class="palka">|</div><div class="yellow_box">IJOYs</div>
                        </div>
                    </div>
            </div>

        </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>