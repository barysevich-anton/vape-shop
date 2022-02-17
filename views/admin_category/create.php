<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/order">Zarządzanie kategoriami</a></li>
                    <li class="active">Dodaj kategorię</li>
                </ol>
            </div>


            <h4>Dodaj kategorię</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Nazwa</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Numer seryjny</p>
                        <input type="text" name="sort_order" placeholder="" value="">

                        <p>Status</p>
                        <select name="status">
                            <option value="1" selected="selected">Wystawiany</option>
                            <option value="0">Ukryty</option>
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

