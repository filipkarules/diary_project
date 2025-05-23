    <?php
    $pageTitle = 'Личный дневник';
    include '../diary_project/header.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 9</h1>
            <p>22.05.2025 23:38</p>
            <br>Буду делать регистрацию/авторизацию чрез JWT (?).
            <br>Го.
        </article>
        <form class="custom-input" id="comment-form">
            <input class = "name" type="text" placeholder="Имя">
            <textarea class = "comment-inside" type="text" height = "800px" placeholder="Введите текст..."></textarea>
            <button type = "submit" class="submit-button">Send</button>
        </form>
      </div>

      <div class="comment-section">
        <h2>Комментарии (<span id = "count-comments"></span>)</h2>
    </div>
    <button id="clear-comments">Очистить комментарии</button>
    </main>

      
      <?php
      include '../diary_project/footer.php';
      ?>
      
      <script src="comments_8.js"></script>
    </body>
    </html>