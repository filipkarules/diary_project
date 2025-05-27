    <?php
    $pageTitle = 'Личный дневник';
    include '../diary_project/header.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 10</h1>
            <p>23.05.2025 23:51</p>
              <br>Версию 11 позже залью, смог полноценно развернуть Apache на телефоне через termux.
              <br>Касаемо комментов, буду делать после того, как сделаю авторизацию.
              <br>Сегодня никаких особых контрибуицй нет, но держу в курсе.
              <br>Жду завтрашнего дня.
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