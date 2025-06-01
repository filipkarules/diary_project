    <?php
    $pageTitle = 'Личный дневник';
    include '../diary_project/php/header.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 8</h1>
            <p>21.05.2025 23:38</p>
            <br>Такс, сейчас всю ночь буду делать PHP реализацию кода.
            <br>Также не стоит забывать про JQuery.
            <br>Го.
            <br>Пы сы. Добавил обработчик на кол-во комментариев.
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
      include '../diary_project/php/footer.php';
      ?>
      
      <script src="comments_8.js"></script>
    </body>
    </html>