<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li class="active">Zarządzanie przedmiotami</li>
                </ol>
            </div>

            <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i> Dodaj Przedmiot</a>
            
            <h4>Lista produktów</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID produktu</th>
                    <th>Kod sprzedawcy</th>
                    <th>Nazwa produktu</th>
                    <th>Cena</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Edytuj"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Usuń"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

