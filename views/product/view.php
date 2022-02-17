<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="conteiner">
        <div class="product_page">
            <div class="product_img">
                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />   
                <?php if ($product['is_new']): ?>
                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                <?php endif; ?>
            </div>
            <div class="product_about">
                <div class="product_name"><?php echo $product['name']; ?></div>
                <div class="product_code">Kod produktu: <?php echo $product['code']; ?></div>
                <div class="product_opis"><?php echo $product['description']; ?></div>         
                <div class="product_price">Cena: <?php echo $product['price']; ?> $</div>
                <p><b>Dostępność:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                <p><b>Producent:</b> <?php echo $product['brand']; ?></p>
                <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>Do Kosza
                                    </a>
            </div>
        </div>

    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>