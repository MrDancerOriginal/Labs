<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5</title>

    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        Header
    </header>
    <main>
        <div class="sidebar">
            <nav>
                <h2> Навігація </h2>
                <ul class="navigation">
                    <li>
                        <a href="index.php">
                            Головна
                        </a>
                    </li>
                    <li>
                        <a href="reviews.php">
                            Відгуки
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <h1>Додати відгук</h1>
        <form method="post" action="scripts/post.php">
            Введіть ім'я: <input type="text" name="fname">
            Введіть текст: <input type="text" name="ftext">
            <input type="submit">
        </form>

        <h1>Необхідні комп'ютерні запчастини</h1>
        <ol>
            <li>CPU</li>
            <li>GPU</li>
            <li>RAM</li>
            <li>Power SW</li>
            <li>HDD</li>
        </ol>
        <table border="2">
            <tr>
                <th>Назва</th>
                <th>Опис</th>
                <th>Ціна</th>
            </tr>
            <tr>
                <td>Процесор Intel Core i7-13700KF</td>
                <td>Сімейство процесора Intel Core i7</td>
                <td>18 000 грн</td>
            </tr>
            <tr>
                <td>GeForce RTX 4080</td>
                <td>ASUS PCI-Ex GeForce RTX 4080</td>
                <td>60 000 грн</td>
            </tr>
        </table>
        <hr>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QjL2ExwPrno" title="YouTube
video player" frameborder="0" allow="accelerometer; autoplay; clipboardwrite; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </main>
    <footer>
        <?php
        echo "Дата : " . date('d.m.y') . "";
        ?>
    </footer>
</body>
</html>