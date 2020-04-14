<?php
if (isset($_POST['submit']) && isset($_POST['hk1'])) {
    $hk1 = $_POST["hk1"];
    $hk2 = $_POST["hk2"];
    $dtb = ($hk1 + $hk2 * 2) / 3;
    $kq = "";
    $xeploai = "";
    if ($dtb >= 5) {
        $kq = "Được lên lớp";
        if ($dtb > 8) $xeploai = "Giỏi";
        elseif ($dtb > 6.5) $xeploai = "Khá";
        else $xeploai = "Trung bình";
    } else {
        $kq = "Ở lại lớp";
        $xeploai = "Yếu";
    }
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bt1/css/block/ketquahoctap.css">
    <title>Kết quả học tập</title>
</head>

<body>
    <form class="ketquahoctap" name="ketquahoctap" action="" method="post">
        <div class="title_ht">KẾT QUẢ HỌC TẬP</div>
        <div class="row">
            <div class="label">Điểm HK1:</div>
            <input style="background-color: #fefefe;" type="number" name="hk1" value="<?php echo $hk1 ?>" max="10" min="0" />
        </div>
        <div class="row">
            <div class="label">Điểm HK2:</div>
            <input style="background-color: #fefefe;" type="number" name="hk2" value="<?php echo $hk2 ?>" max="10" min="0" />
        </div>
        <div class="row">
            <div class="label">Điểm trung bình:</div>
            <input style="background-color: #fff9ad;" type="text" name="dtb" value="<?php if (isset($_POST['submit']) && isset($_POST['hk1'])) echo $dtb ?>" disabled="true" />
        </div>
        <div class="row">
            <div class="label">Kết quả:</div>
            <input style="background-color: #fff9ad;" type="text" name="kq" value="<?php if (isset($_POST['submit']) && isset($_POST['hk1'])) echo $kq ?>" disabled="true" />
        </div>
        <div class="row">
            <div class="label">Xếp loại học lực:</div>
            <input style="background-color: #fff9ad;" type="text" name="xeploai" value="<?php if (isset($_POST['submit']) && isset($_POST['hk1'])) echo $xeploai ?>" disabled="true" />
        </div>
        <input type="submit" name="submit" value="Xem kết quả"></input>
    </form>
</body>

</html>