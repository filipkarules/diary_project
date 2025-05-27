<?php
    $pageTitle = 'Регистрация';
    include '../diary_project/header13.php';
    ?>


<main>
    <div class = "auth-input">
        <input class = "name" type="text" placeholder="login">
        <input class = "name" type="mail" placeholder="email">
        <input class = "name" id ="try-1" type="password" placeholder="password">
        <input class = "name" id ="try-2" type="password" placeholder="repeat password">
        <div class = "reg-link">
            <a href = "authorisation.php">Уже зарегистрированы?</a>
            <button type = "submit" class="submit-button">Send</button>
        </div>
    </div>
</main>
    <?php
      include '../diary_project/footer.php';
    ?>

</body>
</html>
