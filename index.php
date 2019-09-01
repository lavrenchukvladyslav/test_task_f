<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lavrenchuk Vladyslav Test Task</title>
    <style>
        body{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 470px;
        }
        ul {
            margin: 0;
            padding: 0;
            width: 470px;
            height: 480px;
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        ul li{
            background-color: #069815;
            width: 150px;
            height: 150px;
        }
        .task2{
            width: 470px;
            background-color: red;
            transition: all 1s ease-in-out;
        }
    </style>
</head>
<body>
<h2>task 1</h2>
<p>Есть блок с шириной 470px. Нужно вывести в нем список из 9 квадратов
    зеленого цвета размером 150px * 150px с расстоянием друг от друга по 10px.
    Схема изображена на рисунке. Использовать нужно приведенный ниже html
    код. Фактически от вас требуется написать css.
</p>
<ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<h2>task 2</h2>
<div class="task2">
    На странице есть блок с произвольным текстом. Нужно каждые 4 секунды
    менять его цвет. Последовательность меняющихся цветов должна быть как в
    радуге. Цвета должны меняться не по кругу, а в одну и в другую сторону
    последовательно. В результате цвет текста должен меняться в следующей
    последовательности: К-О-Ж-З-Г-С-Ф-С-Г-З-Ж-О-К-О-Ж-З-Г-С-Ф-С-Г-З-Ж-О ..... и
    так далее. (Если смена цветов будет плавная, будет вообще отлично)
    <br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus magnam placeat porro praesentium quas! Adipisci aperiam blanditiis delectus deleniti eligendi est, itaque laborum libero nihil non, sapiente sunt vero voluptatum!
</div>

<h2> task3</h2>
<p>Не смог сделать все в одном запросе, 5 пункт сделал отдельно.</p>
<div>
    Написать ОДИН запрос, который сразу выведет таблицу со всеми
    необходимыми данными:
    <ol style="    text-align: left;">
        <li>- Название категории</li>
        <li>- Количество товаров в категории</li>
        <li>- Минимальная цена на товар в категории</li>
        <li>- Максимальная цена на товар в категории</li>
        <li><b>- Название товара с наиболее длинным описанием в категории</b></li>
        <li>- Наибольшая длина описания в категории</li>
        <li>- Текст самого длинного описания в категории</li>
    </ol>







    <br>
    <br>
    SELECT categories.name, count(*), min(a.price), max(a.price), max(char_length(a.description)), max(a.description)
    FROM products a
    INNER JOIN categories ON a.category_id = categories.id
    GROUP BY a.category_id
    <br><br>
    SELECT categories.name, a.name
    FROM products a
    INNER JOIN categories ON a.category_id = categories.id
    LEFT JOIN products b ON a.category_id = b.category_id AND LENGTH(a.description) < LENGTH(b.description)
    WHERE b.description is NULL
    <?php
    $arr = array (
        array (
            'Name' => 'Trixie',
            'Color' => 'Green',
            'Element' => 'Earth',
            'Likes' => 'Flowers'),
        array (
            'Name' => 'Tinkerbell',
            'Element' => 'Air',
            'Likes' => 'Singning',
            'Color' => 'Blue'),
        array (
            'Name' => 'Blum',
            'Element' => 'Water',
            'Likes' => 'Dancing',
            'Name' => 'Blum',
            'Color' => 'Pink'),
    );
    foreach ($arr as $key => $value) {
        $name[] = strlen($value['Name']);
        $color[] = strlen($value['Color']);
        $element[] = strlen($value['Element']);
        $likes[] = strlen($value['Likes']);
    }
    $maxName = max($name);
    $maxColor = max($color);
    $maxElement = max($element);
    $maxLikes = max($likes);
    $maxName = $maxName+2;
    $maxColor = $maxColor+2;
    $maxElement = $maxElement+2;
    $maxLikes = $maxLikes+2;


    echo '<h2>Task 4</h2>';
    echo '</br>';
    echo '<p>Не уверен что правильно понял задание, раньше не сталкивался с ASCII псевдографикой, вот что получилось:</p>';
    echo '</br>';

    echo '<p>Распечатать ассоциативный массив в виде ASCII таблицы (таблицы, рамки в
            которой состоят из символов + | - и др. символов псевдографики).
            Положение элементов в каждом подмассиве может меняться, но сами ключи
            должны быть в одном порядке. Столбец Color должен быть цветным в
            зависимости от названия цвета.
        </p>';
    echo '</br>';

    echo '+';
    for ($i = 1; $i <= $maxName; $i++) {
        echo'-';
    }
    echo '+';
    for ($i = 1; $i <= $maxColor; $i++) {
        echo'-';
    }
    echo '+';
    for ($i = 1; $i <= $maxElement; $i++) {
        echo'-';
    }
    echo '+';
    for ($i = 1; $i <= $maxLikes; $i++) {
        echo'-';
    }
    echo '+';
    echo '</br>';
    foreach ($arr as $key => $value) {
        //name
        $name_length = $maxName - 1 - strlen($value['Name']);
        $color_length = $maxColor - 1 - strlen($value['Color']);
        $element_length = $maxElement - 1 - strlen($value['Element']);
        $likes_length = $maxLikes - 1 - strlen($value['Likes']);
        echo '&nbsp|'.'&nbsp';
        echo $value['Name'];
        for ($i = 1; $i <= $name_length; $i++) {echo'&nbsp';}

        echo '|'.'&nbsp'.'<span style="color: '.$value['Color'].'">'.$value['Color'].'</span>';
        for ($i = 1; $i <= $color_length; $i++) {echo'&nbsp';}

        echo '|'.'&nbsp'.$value['Element'];
        for ($i = 1; $i <= $element_length; $i++) {echo'&nbsp';}
        echo '|'.'&nbsp'.$value['Likes'];
        for ($i = 1; $i <= $likes_length; $i++) {echo'&nbsp';}
        echo '|';
        echo '</br>';
        echo '+';
        for ($i = 1; $i <= $maxName; $i++) {
            echo'-';
        }
        echo '+';
        for ($i = 1; $i <= $maxColor; $i++) {
            echo'-';
        }
        echo '+';
        for ($i = 1; $i <= $maxElement; $i++) {
            echo'-';
        }
        echo '+';
        for ($i = 1; $i <= $maxLikes; $i++) {
            echo'-';
        }
        echo '+';
        echo '</br>';
    }

    echo '</br>';
    ?>
</div>
<script src="jquery-3.4.1.min.js"></script>
<script type="text/jаvascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script>
    var color;
    var rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
    var i = 1;
    setInterval( function() {
        color = rainbow[i];
        $('.task2').css('background-color', color);
        i++;
        if(color === 'violet'){
            rainbow = rainbow.reverse();
            i=1;
        }
        if (color === 'red'){
            rainbow = rainbow.reverse();
            i=1;
        }
    } , 4000);
</script>
</body>
</html>







