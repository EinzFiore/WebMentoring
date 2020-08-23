<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator PHP</title>
</head>
<body>
<?php 
	if(isset($_POST['hitung'])){
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operator = $_POST['operator'];
		if($operator == "+") $hasil = $angka1+$angka2;
		if($operator == "-") $hasil = $angka1-$angka2;
		if($operator == "*") $hasil = $angka1*$angka2;
		if($operator == "%") $hasil = $angka1%$angka2;
	}
?>
    <div class="calculator">
    <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" class="calculator-screen" value="<?= $hasil ?>" placeholder="hasil">
        <?php } else { ?>
	        <input type="text" class="calculator-screen" value="0">
        <?php } ?>
        <form action="index.php" method="post">
            <div class="input-angka">
                <input class="angka-field" type="text" placeholder="Angka Pertama" name="angka1">
                <div class="operator">
                    <select class="operator-field" name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="%">%</option>
                    </select>
                </div>
                <input class="angka-field" type="text" placeholder="Angka Kedua" name="angka2">
            </div>
            <input type="submit" name="hitung" class="button" value="Hitung">
        </form>
    </div>
</body>
</html>