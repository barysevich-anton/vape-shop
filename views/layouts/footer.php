    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
<div class="footer">
                    <div class="footer_top">
                        <div class="footer_top_element">
                            <div class="footer_top_element_title">Firma</div>
                            <div class="footer_top_element_hover">O firmie</div>
                            <div class="footer_top_element_hover">Sklepy</div>
                            <div class="footer_top_element_hover">Blog</div>
                            <div class="footer_top_element_hover">Oferty pracy</div>
                        </div>
                        <div class="footer_top_element">
                        <div class="footer_top_element_title">Informacja</div>
                            <div class="footer_top_element_hover">Warunki dostawy</div>
                            <div class="footer_top_element_hover">Warunki płatności</div>
                        </div>
                        <div class="footer_top_element">
                        <div class="footer_top_element_title">Pomoc</div>
                            <div class="footer_top_element_hover">Pytanie odpowiedź</div>
                            
                        <div class="footer_top_element_title">Mapa strony</div>
                        </div>
                        <div class="footer_top_element">
                        <div class="footer_top_element_title">Bądź w kontakcie</div>
                            <div class="social_icons">
                                <img src="../../template/images/footer/vk.png">
                                <img src="../../template/images/footer/facebook.png">
                                <img src="../../template/images/footer/inst.png">
                                <img src="../../template/images/footer/you.png">
                            </div>
                        </div>
                        <div class="footer_top_element">
                        <div class="footer_top_element_title">Nasze kontakty</div> 
                        <div class="footer_top_element_title">8-800-50-50-501</div>
                        </div>
                    </div>
                    <div class="footer_bot">
                        <div class="footer_bot_element">
                            <div class="footer_bot_el_bold">18+</div>
                            <div class="footer_bot_el_big">2021 © BABYLON VAPESHOP</div>
                        </div>
                        <div class="footer_bot_element_colum">
                            <div class="footer_bot_el_row">
                                <div class="footer_bot_el">Zgoda na przetwarzanie danych osobowych</div>
                                <div class="footer_bot_el">Warunki korzystania</div>
                            </div>
                            <div class="footer_bot_el">Rozporządzenie w sprawie procedury przechowywania i ochrony danych osobowych</div>
                        </div>
                        <div class="footer_bot_element">

                        </div>
                    </div>
            </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>