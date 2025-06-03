<?php
    $pageTitle = 'Регистрация';
    include '../php/header13.php';
    ?>


<main>
    <form class="auth-input" id="registration-form">
        <input class="name" type="text" placeholder="login" name="username" required>
        <input class="name" id="password" type="password" placeholder="password" name="password" required>
        <div class="reg-link">
            <a href="authorisation.php">Уже зарегистрированы?</a>
            <button type="submit" class="submit-button">Send</button>
        </div>
    </form>
</main>
    <?php
      include '../php/footer.php';
    ?>

<script src = "connection.js"></script>
</body>
</html>
