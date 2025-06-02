    <?php
    $pageTitle = 'Личный дневник';
    include '../php/header13.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 17</h1>
            <p>31.05.2025 23:00</p>
              <br>Занимался авторизацией через Mongo DB, запустил через npm start сервер на 5000 порту, создал необхроодимые пути для отправки объекта на сервер, перед этим проверяя его на соотвествие требоаниям (непустой, анпример)
              <br>Сейчас доделаю и буду думать, как интегрировать.
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