<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Konto użytkownika</h3>
            
            <h4>Hej, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit">Edytuj dane</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>