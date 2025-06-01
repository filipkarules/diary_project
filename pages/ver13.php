    <?php
    $pageTitle = 'Личный дневник';
    include '../php/header13.php';
    ?>
    <main>
      <div class="content-section">
        <article class = "custom-text">
            <h1>Дневник. Версия 13</h1>
            <p>27.05.2025 00:48</p>
              <br>Ну что ж, щас буду запускать с Laragon.
              <br>Еще буду думать по поводу Laravel че-то там и Docker.
              <br>У Docker, насколько помню, проблемы с wsl серьезные, я не при делах.
              <br>Что я могу сейчас сделать? Неизвестно, но все идет к долго обещанной авторизации
              <br>Так, ща буду пробовать.
              <br>Пы сы и кому ваще нахуй спать надо :D
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