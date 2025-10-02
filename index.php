<?php
date_default_timezone_set('Europe/Moscow');

$student   = "Черникова Софья Михайловна";
$page_id   = "index";
$page_name = "Обо мне";
$title     = $student . " — " . $page_name;

$facts = [
  "Студентка Московского Политеха",
  "Староста группы",
  "Мне 19 лет",
  "Я люблю рисовать"
];
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
    <section id="about">
      <h2>Обо мне</h2>

    <?php
    $second = date('s');
    if ($second % 2 == 0) {
        $photo = 'images/sonya.jpg';
    } else {
        $photo = 'images/sonya2.png';
    }
    ?>
    <img class="responsive" src="<?php echo $photo; ?>" alt="Меняющаяся фотография">


      <p>
        Меня зовут Черникова Софья Михайловна. Родилась 2 сентября 2006 года, обучаюсь в Московском Политехническом университете и являюсь старостой группы. Стараюсь поддерживать баланс: план на день, чёткие приоритеты и небольшие творческие задачи, которые помогают не выгорать. В свободные моменты готовлю или гуляю.
      </p>
    </section>

    <section>
      <h2>Несколько фактов</h2>
      <ul>
        <?php foreach ($facts as $item) echo "<li>$item</li>"; ?>
      </ul>
    </section>
  </main>

  <footer>
    <?php echo "Сформировано " . date('d.m.Y') . " в " . date('H-i:s'); ?>
  </footer>
</body>
</html>
