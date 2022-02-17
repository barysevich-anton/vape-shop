<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/product">Zarządzanie przedmiotami</a></li>
                    <li class="active">Usuń przedmiot</li>
                </ol>
            </div>


            <h4>Usuń przedmiot #<?php echo $id; ?></h4>


            <p>Czy na pewno chcesz usunąć ten element?</p>

            <form method="post">
                <input type="submit" name="submit" value="Usunąć" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

