    <?php
    $pageTitle = 'Личный дневник';
    include '../php/header13.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 15</h1>
            <p>28.05.2025 23:00</p>
              <br>Сегодня через Termux запустил нра телефоне Apache 2.
              <br>Найс, теперь гоняю PHP там.
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
      include '../php/footer.php';
      ?>
      
      <script src="../scripts/comments_8.js"></script>
    </body>
    </html>