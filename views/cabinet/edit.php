<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Dane edytowane!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Edycja danych</h2>
                        <form action="#" method="post">
                            <p>Imie:</p>
                            <input type="text" name="name" placeholder="Imie" value="<?php echo $name; ?>"/>
                            
                            <p>Haslo:</p>
                            <input type="password" name="password" placeholder="Haslo" value="<?php echo $password; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Zapisz" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>