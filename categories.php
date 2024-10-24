<?php
// Устанавливаем название страницы
$title = "Категории игр - Show Game";

// Меню
$menuItems = [
    ['url' => 'home.php', 'text' => 'Главная', 'class' => 'home'],
    ['url' => 'about.php', 'text' => 'О нас', 'class' => 'about'],
    ['url' => 'categories.php', 'text' => 'Категории', 'class' => 'categories']
];

// Определяем текущую секунду
$second = date('s');

// Определяем четность секунды
$imgSrc = ($second % 2 === 0) ? 'fotos/foto1.jpg' : 'fotos/foto2.jpg';

// Определяем текущее время для подвала
$currentDateTime = date('d.m.Y в H-i:s');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                // Выводим меню
                foreach ($menuItems as $menuItem) {
                    echo "<li><a href='{$menuItem['url']}' class='{$menuItem['class']}'>{$menuItem['text']}</a></li>";
                }
                ?>
            </ul>
    </nav>
        <h1><?php echo $title; ?></h1>
    </header>

    <main class="content-block">
        <section>
            <h2>Доступные категории игр</h2>
            <p>На этой странице вы можете просмотреть различные категории игр, доступные на платформе Show Game.</p>

            <?php
            // Массив с категориями игр
            $categories = [
                [
                    'title' => 'Компьютерные игры',
                    'description' => 'Игры, разработанные для ПК (Windows, macOS, Linux).',
                    'criteria' => 'Используются только визуальные ассеты.'
                ],
                [
                    'title' => 'Мобильные игры',
                    'description' => 'Игры для мобильных платформ (iOS и Android).',
                    'criteria' => 'Допустимо использование готовых контроллеров и ассетов.'
                ],
                [
                    'title' => '100% Оригинальные игры',
                    'description' => 'Игры, созданные с нуля, без использования сторонних ассетов.',
                    'criteria' => 'Только оригинальные элементы и механики.'
                ]
            ];

            // Вывод категорий
            echo "<table>";
            echo "<tr><th>Название</th><th>Описание</th><th>Критерии</th></tr>";
            foreach ($categories as $category) {
                echo "<tr>";
                echo "<td>{$category['title']}</td>";
                echo "<td>{$category['description']}</td>";
                echo "<td>{$category['criteria']}</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </section>

        <section>
            <h2>Пример игры</h2>
            <p>На Show Game можно найти множество уникальных проектов. Вот пример из категории "Мобильные игры":</p>

            <h3>Игра: Мобильный квест</h3>
            <p>Описание: Это захватывающая игра в жанре приключений для мобильных устройств, в которой игроку предстоит разгадать головоломки и исследовать таинственные места.</p>
            <p>Критерии: Допускается использование готовых визуальных ассетов и контроллеров.</p>

            <h3>Изображение игры:</h3>

            <!-- Динамическая загрузка фотографии -->
            <img src="<?php echo $imgSrc; ?>" alt="изображение игры">
            
        </section>
    </main>

    <footer>
        <p>Контакты: <a href="mailto:GameShow@support.com">GameShow@support.com</a> &copy; 2024 Show Game.            Сформировано <?php echo $currentDateTime; ?></p> 
    </footer>
</body>
</html>