<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/product">Zarządzanie przedmiotami</a></li>
                    <li class="active">Edytuj produkt</li>
                </ol>
            </div>


            <h4>Dodaj nową pozycję</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                    <form action="#" method="post" enctype="multipart/form-data" class="flex-form">
                    <div>
                        <p>Nazwa produktu</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Kod sprzedawcy</p>
                        <input type="text" name="code" placeholder="" value="">

                        <p>Cena, zl</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Kategoria</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div>
                        <p>Producent</p>
                        <input type="text" name="brand" placeholder="" value="">

                        <p>Obraz produktu</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Szczegółowy opis</p>
                        <textarea name="description"></textarea>
                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Zapisz">
                    </div>
                    <div>
                        <p>Dostępność: W magazynie</p>
                        <select name="availability">
                            <option value="1" selected="selected">Tak</option>
                            <option value="0">Nie</option>
                        </select>

                        <br/><br/>

                        <p>Nowy</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Tak</option>
                            <option value="0">Nie</option>
                        </select>

                        <br/><br/>

                        <p>Wyróżniony</p>
                        <select name="is_recommended">
                            <option value="1" selected="selected">Tak</option>
                            <option value="0">Nie</option>
                        </select>

                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" selected="selected">Wystawiany</option>
                            <option value="0">Jest ukryty</option>
                        </select>

                    </div>

                        

                    </form>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

