<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Katalog</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Najnowsze przedmioty</h2>
                    
                    <div class="flex-elements">
                    <?php foreach ($latestProducts as $product): ?>


                        <a class="none_decoration" href="/product/<?php echo $product['id']; ?>">
                                
                        
                        <div class="item child">
                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                        
                                    <div class="new_element_title">
                                    <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                            </div>
                                            <div class="new_products_price"><?php echo $product['price'];?> $.</div>
                                    
                                    <div class="new_products_hover">
                                    <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>Do kosza
                                        </a>
                                    </div>
                                </div>
                                </a>                             
                    

                    <?php endforeach;?>                   
                    </div>
                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>