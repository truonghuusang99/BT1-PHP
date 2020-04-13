<?php
// thứ tự tý -> hợi
$year_end_name_num = array("Thân", "Dậu", "Tuất", "Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi");
$year_first_name_num = array("Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ");
if (isset($_POST["year"])) {
    $first_name_number = (int) ($_POST["year"]) % 60 % 10;
    $end_name_number = (int) ($_POST["year"]) % 60 % 12;
    $year = $year_first_name_num[$first_name_number] . " " .  $year_end_name_num[$end_name_number];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/edu/css/block/tinhnamamlich.css">
    <title>Tính năm âm lịch</title>
</head>

<body title>
    <form class="tinhamlich" name="amlich" action="" method="post">
        <div class="title_al">TÍNH NĂM ÂM LỊCH</div>
        <div class="row1">
            <div class="col1">
                <div class="label">Năm dương lịch</div>
                <input style="background-color: #fefefe;" type="number" name="year" min="1" value="<?php if (isset($_POST["year"])) echo $_POST["year"] ?>" />
            </div>
            <div class="col1-btn">
                <input style="background-color: #fefefe; width: 30px; margin: 0" type="submit"  value="=>" />
            </div>
            <div class="col1">
                <div class="label">Năm âm lịch</div>
                <input style="background-color: #fff9ad;" type="text" name="lunar" value="<?php if (isset($_POST["year"])) echo $year ?>" disabled="true" />
            </div>
        </div>
        <img src="<?php if (isset($_POST["year"])) echo "/edu/img/tinhamlich/" . $year_end_name_num[$end_name_number] . ".jpg" ?>" alt="" width="150" height="90">
    </form>
</body>