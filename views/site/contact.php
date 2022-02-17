<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="contacts_page">

                <?php if ($result): ?>
                    <p>Wiadomość wysłana! Odpowiemy na Twój adres e-mail.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="contact-form"><!--sign up form-->
                        <h2>Sprzężenie zwrotne</h2>
                        <h5>Masz pytanie? Napisz do nas</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Email</p>
                            <input type="email" name="userEmail" placeholder="E-mail" class="cont_input" value="<?php echo $userEmail; ?>"/>
                            <p>Wiadomość</p>
                            <input type="text" name="userText" placeholder="Wiadomość" class="cont_input" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Wyslac" />
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