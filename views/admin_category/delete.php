<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/category">Zarządzanie kategoriami</a></li>
                    <li class="active">Usuń kategorię</li>
                </ol>
            </div>


            <h4>Usuń kategorię #<?php echo $id; ?></h4>


            <p>Czy na pewno chcesz usunąć tę kategorię?</p>

            <form method="post">
                <input type="submit" name="submit" value="Usuń" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

