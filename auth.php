<?php
date_default_timezone_set('Europe/Moscow');
$student   = "Черникова Софья Михайловна";
$page_id   = "auth";
$page_name = "Аутентификация";
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

  <main class="auth-container">
    <form class="auth-form" action="https://httpbin.org/post" method="POST">
      <h2>Аутентификация</h2>
      <label for="login">Логин:</label>
      <input type="text" id="login" name="login" required />
      
      <label for="password">Пароль:</label>
      <input type="password" id="password" name="password" required />
      
      <label>
        <input type="checkbox" name="remember" /> Запомнить меня
      </label>
      
      <button type="submit">Войти</button>
    </form>
  </main>

  <footer>
    <?php echo "Сформировано " . date('d.m.Y') . " в " . date('H:i:s'); ?>
  </footer>
</body>
</html>
