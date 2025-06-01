<?php
    $pageTitle = 'Авторизация';
    include '../php/header13.php';
    ?>


<main>
    <div class = "auth-input">
        <input class = "name" type="text" placeholder="login">
        <input class = "name" type="password" placeholder="password">
        <div class = "reg-link">
            <a href = "registrarion.php">На регистрацию</a>
            <button type = "submit" class="submit-button">Send</button>
        </div>
    </div>
</main>
    <?php
      include '../php/footer.php';
    ?>

</body>
</html>
