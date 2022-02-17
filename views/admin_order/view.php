<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="conteiner">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Panel administratora</a></li>
                    <li><a href="/admin/order">Zarządzanie zamówieniami</a></li>
                    <li class="active">Zobacz zamówienia</li>
                </ol>
            </div>


            <h4>Zobacz zamówienia #<?php echo $order['id']; ?></h4>
            <br/>




            <h5>Informacje o zamówieniu</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Numer zamówienia</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Nazwa klienta</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Telefon klienta</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Komentarz klienta</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID klienta</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Status zamówienia</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Data zamówienia</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h5>Pozycje w zamówieniu</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID produktu</th>
                    <th>kod produktu</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                    <th>Illosc</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Powrót</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

