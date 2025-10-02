<?php
date_default_timezone_set('Europe/Moscow');
$student   = "Черникова Софья Михайловна";
$page_id   = "contacts";
$page_name = "Контакты";
$title     = $student . " — " . $page_name;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <h1>О студенте</h1>
<nav><ul>
  <li>
    <a href="<?php $link='index.php'; echo $link; ?>" class="<?php 
      echo ($page_id === 'index') ? 'selected_menu' : ''; 
    ?>">
      <?php $name = 'Обо мне'; echo $name; ?>
    </a>
  </li>

  <li>
    <a href="<?php $link='contacts.php'; echo $link; ?>" class="<?php 
      echo ($page_id === 'contacts') ? 'selected_menu' : ''; 
    ?>">
      <?php $name = 'Контакты'; echo $name; ?>
    </a>
  </li>

  <li>
    <a href="<?php $link='auth.php'; echo $link; ?>" class="<?php 
      echo ($page_id === 'auth') ? 'selected_menu' : ''; 
    ?>">
      <?php $name = 'Аутентификация'; echo $name; ?>
    </a>
  </li>
</ul></nav>


  </header>

  <main>
    <section id="contacts">
      <h2>Контакты</h2>
      <table>
        <tr><th>Мессенджер</th><th>Данные</th></tr>
        <tr><td>Телефон</td><td>+7 (962) 435-86-71</td></tr>
        <tr><td>Почта</td><td>sonkache@mail.ru</td></tr>
        <tr><td>Telegram</td><td>@sonkache</td></tr>
      </table>
    </section>

    <section id="feedback">
      <h2>Форма обратной связи</h2>
      <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
        <label for="fio">ФИО:</label>
        <input type="text" id="fio" name="fio" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label>Откуда узнали обо мне:</label>
        <label><input type="radio" name="source" value="в университете" required /> В университете</label>
        <label><input type="radio" name="source" value="от знакомых" /> От знакомых</label>
        <label><input type="radio" name="source" value="нет верного варианта" /> Нет верного варианта</label>

        <label for="type">Тип обращения:</label>
        <select id="type" name="type">
          <option value="для связи">Для связи</option>
          <option value="предложение">Предложение</option>
        </select>

        <label for="message">Текст сообщения:</label>
        <textarea id="message" name="message" required></textarea>

        <label for="file">Вложения:</label>
        <input type="file" id="file" name="file" />

        <label><input type="checkbox" name="consent" required /> Даю согласие на обработку персональных данных</label>

        <button type="submit">Отправить</button>
      </form>
    </section>
  </main>

  <footer>
    <?php echo "Сформировано " . date('d.m.Y') . " в " . date('H:i:s'); ?>
  </footer>
</body>
</html>
