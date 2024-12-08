<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محاسبه توان</title>
</head>
<body>
    <h1>محاسبه توان یک عدد</h1>
    <form action="calculate.php" method="post">
        <label for="base">عدد اول (پایه):</label>
        <input type="number" id="base" name="base" required>
        <br><br>
        <label for="exponent">عدد دوم (توان):</label>
        <input type="number" id="exponent" name="exponent" required>
        <br><br>
        <input type="submit" value="محاسبه">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت ورودی‌ها
    $base = $_POST['base'];
    $exponent = $_POST['exponent'];

    // محاسبه توان
    $result = pow($base, $exponent);

    // نمایش نتیجه
    echo "<h1>نتیجه:</h1>";
    echo "<p>$base به توان $exponent برابر است با: $result</p>";
    echo '<a href="index.html">بازگشت به صفحه اصلی</a>';
} else {
    echo "لطفاً از طریق فرم مناسب اقدام کنید.";
}
?>

</body>
</html>
