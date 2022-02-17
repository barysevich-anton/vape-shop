<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/category">Zarządzanie kategoriami</a></li>
                    <li class="active">Edytuj kategorię</li>
                </ol>
            </div>


            <h4>Edytuj kategorię "<?php echo $category['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Nazwa</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <p>Seryjny numer</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">
                        
                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Wystawiany</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Ukryty</option>
                        </select>

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Zapisz">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

