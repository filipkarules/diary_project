<?php
    $pageTitle = 'Авторизация';
    include '../php/header13.php';
    ?>


<main>
    <form class="auth-input" id="login-form">
        <input class="name" type="text" placeholder="login" name="username" required>
        <input class="name" type="password" placeholder="password" name="password" required>
        <div class="reg-link">
            <a href="registration.php">На регистрацию</a>
            <button type="submit" class="submit-button">Send</button>
        </div>
    </form>
</main>

    <?php
      include '../php/footer.php';
    ?>

<script src = "auth_connection.js"></script>
</body>
</html>
