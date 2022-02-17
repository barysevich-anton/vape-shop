<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/product">Usuń przedmiot</a></li>
                    <li class="active">Zarządzanie przedmiotami</li>

                </ol>
            </div>


            <h4>Zarządzanie przedmiotami #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                    <form action="#" method="post" enctype="multipart/form-data" class="flex-form">
                    <div>
                        <p>Nazwa produktu</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p>Kod sprzedawcy</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p>Cena, zl</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Kategoria</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                    </div>
                    <div>
                        <p>Producent</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                        <p>Obraz produktu</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                        <p>Szczegółowy opis</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>
                        
                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Zapisz">
                    </div>
                    <div>
                        <p>Dostępność: W magazynie</p>
                        <select name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Tak</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Nie</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Nowy</p>
                        <select name="is_new">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Tak</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Nie</option>
                        </select>
                        
                        <br/><br/>

                        <p>Wyróżniony</p>
                        <select name="is_recommended">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Tak</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Nie</option>
                        </select>
                        
                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Wystawiany</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Ukryty</option>
                        </select>
                        
                    </div>
                        
                        
                    </form>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

