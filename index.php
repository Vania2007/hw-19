<?php
include "header.php";
?>
<main>
    <div id="formSection" class="container py-5">
        <form method="post" action="countries.php" name="myform" class="bg-light p-4 rounded shadow-sm mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for='formCountry' class="form-label">Виберіть країну:</label>
                <select name="formCountry" class="form-select" required>
                    <option value="" disabled selected>-- Оберіть країну --</option>
                    <option value="Турція">Турція</option>
                    <option value="Франція">Франція</option>
                    <option value="Хорватія">Хорватія</option>
                    <option value="Україна">Україна</option>
                    <option value="США">США</option>
                </select>
            </div>
            <div class="mb-3">
                <label for='transport' class="form-label">Виберіть транспорт:</label>
                <select name="transport" class="form-select" required>
                    <option value="" disabled selected>-- Оберіть транспорт --</option>
                    <option value="Автобус">Автобус</option>
                    <option value="Літак">Літак</option>
                    <option value="Поїзд">Поїзд</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="stars" class="form-label">Зірки (від 1 до 5):</label>
                <input type="number" name="stars" id="stars" min="1" max="5" value="3" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="range" id="price" name="price" min="100" max="10000" step="1" class="form-range" required>
                <div class="d-flex justify-content-between">
                    <span>100</span>
                    <span>10000</span>
                </div>
            </div>
            <button name="formSubmit" class="btn btn-primary btn-lg w-100">ОК</button>
        </form>
    </div>
</main>
<?php
include "footer.php";
?>