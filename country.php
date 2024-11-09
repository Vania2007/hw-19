<?php
$country = $_GET["country"];
$transport = $_GET['transport'];
$stars = $_GET["stars"];
$price = $_GET["price"];
include "header.php";
include_once "db.php";
?>
<div class="container py-5">
    <h2>Ви обрали:</h2>
    <ul>
        <li>Країна: <?=$country?></li>
        <li>Транспорт: <?=$transport?></li>
        <li>Зірок: <?=$stars?></li>
        <li>Ціна: <?=$price?></li>
    </ul>
    
    <h2>Тури</h2>
    <div class="row">
        <?php
        $tour_keys = [];
        foreach ($tours as $key => $tour) {
            if ($tour['country'] == $country && $tour['stars'] == $stars && $tour['price'] <= $price) {
                $tour_keys[] = $key;
            }
        }

        if (empty($tour_keys)) {
            echo "<div class='alert alert-warning'>Вибачте, за вашими параметрами такий тур не знайдено.</div>";
            echo "<h3>Інші пропозиції</h3>";
            foreach ($tours as $tour) {
                if ($tour['price'] <= $price) {
                    echo "<div class='col-md-4 mb-4 mt-5'>";
                    echo "<div class='card'>";
                    echo "<img src='{$tour['imageSrc']}' class='card-img-top' alt='Hotel Image'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>{$tour['name']}</h5>";
                    echo "<p class='card-text'>Зірок: {$tour['stars']}</p>";
                    echo "<p class='card-text'>Ціна: \${$tour['price']}</p>";
                    echo "<p class='card-text'>Транспорт: {$tour['transport']}</p>";
                    echo "</div></div></div>";
                }
            }
        } else {
            foreach ($tour_keys as $index => $key) {
                $tour = $tours[$key];
                echo "<div class='col-md-4 mb-4 mt-5'>";
                echo "<div class='card'>";
                echo "<img src='{$tour['imageSrc']}' class='card-img-top' alt='Tour Image'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>{$tour['name']}</h5>";
                echo "<p class='card-text'>Зірок: {$tour['stars']}</p>";
                echo "<p class='card-text'>Ціна: \${$tour['price']}</p>";
                echo "<p class='card-text'>Транспорт: {$tour['transport']}</p>";
                echo "</div></div></div>";
            }
        }
        ?>
    </div>
</div>
<?php
include "footer.php";
?>