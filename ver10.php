    <?php
    $pageTitle = 'Личный дневник';
    include '../diary_project/header.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 10</h1>
            <p>23.05.2025 23:51</p>
              <br>Ого. Уже версия 10.
              <br>Ну сегодня доделал комменты, надеюсь, зайдет.
              <br>Завтра уже буду над авторизацией думать, пока хз.
              <br>Мб сделаю прикольный фон. Но это не точно.
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