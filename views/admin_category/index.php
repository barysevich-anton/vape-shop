<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li class="active">Zarządzanie kategoriami</li>
                </ol>
            </div>

            <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i> Dodaj kategorię</a>
            
            <h4>Lista kategorii</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID kategorii</th>
                    <th>Nazwa kategorii</th>
                    <th>Seryjny numer</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>  
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Edytować"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Usunąć"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

