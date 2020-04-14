<?php
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
if (isset($_POST["class"])) {
    $class = $_POST["class"];
}
if (isset($_POST["date"])) {
    $date = $_POST["date"];
}
if (isset($_POST["name_teacher"])) {
    $teacher = $_POST["name_teacher"];
}
if (isset($_POST["ever_done"])) {
    $ever_done = $_POST["ever_done"];
}
if (isset($_POST["commit_home"])) {
    $commit_home = $_POST["commit_home"];
}
if (isset($_POST["commit_class"])) {
    $commit_class = $_POST["commit_class"];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bt1/css/block/theodoihoctap.css">
    <title>Theo Dõi Học Tập</title>
</head>

<body>
    <form action="" method="post" class="theodoihoctap">
        <div class="title_tdht">THEO DÕI HỌC TẬP</div>
        <div style="display: flex">
            <div class="main_content">
                <div class="name_stu">
                    <div class="label">Họ tên học sinh:</div>
                    <div class="input"><input type="text" name="name" value="<?php if (isset($_POST["name"])) echo $name; ?>" /></div>
                </div>
                <div class="name_stu">
                    <div class="label">Giáo viên phụ trách:</div>
                    <div class="input"><input type="text" name="name_teacher" value="<?php if (isset($_POST["name_teacher"])) echo $teacher; ?>" /></div>
                </div>
                <div class="class_date">
                    <div>
                        <div class="label">Lớp:</div>
                        <div class="class"><input name="class" type="text" value="<?php if (isset($_POST["class"])) echo $class; ?>" /></div>
                    </div>
                    <div>
                        <div class="label">Ngày:</div>
                        <div class="date"><input style="width:100%" name="date" type="date" value="<?php if (isset($_POST["date"])) echo $date; ?>" /></div>
                    </div>
                </div>
                <div class="label">Những việc phân công chưa làm:</div>
                <textarea style="width: 100%; height: 50px" name="ever_done" type="text"><?php if (isset($_POST["ever_done"])) echo $ever_done; ?></textarea>
            </div>
            <div class="img">
                <img src="/bt1/img/theodoihoctap/pencil.jpg" alt="pencil">
            </div>
        </div>
        <div>Chọn hình thức hoàn thành</div>
        <div><input type="checkbox" name="commit_class" value="Tại lớp" <?php if (isset($_POST["commit_class"])) echo "checked"; ?> />
            Những việc chưa làm sẽ hoàn thành ngay tại lớp</div>
        <div><input type="checkbox" name="commit_home" value="Tại nhà" <?php if (isset($_POST["commit_home"])) echo "checked"; ?>/>
            Sẽ hoàn thành những việc chưa làm tại nhà và nộp lại cho giáo viên vào ngày hôm sau</div>
        <div style="text-align: center"><input type="submit" name="submit" value="Ghi nhận" /></div>
        <div class="ticket">
            <div class="title_tdht">Thông tin phiếu theo dõi</div>
            <div>Tên học sinh: <?php if (isset($_POST["name"])) echo $name; ?> - Lớp: <?php if (isset($_POST["class"])) echo $class; ?></div>
            <div>Ngày đăng ký: <?php if (isset($_POST["date"])) echo $date; ?> - Giáo viên phụ trách: <?php if (isset($_POST["name_teacher"])) echo $teacher; ?></div>
            <div>Những công việc đã được phân công nhưng chưa hoàn thành:</div>
            <div><?php if (isset($_POST["ever_done"])) echo $ever_done; ?></div>
            <div>Cam kết sẽ hoàn thành tại: <?php if (isset($_POST["commit_home"]) && isset($_POST["commit_class"])) echo ($commit_home . " - " . $commit_class);
                                            elseif (isset($_POST["commit_home"])) echo ($commit_home);
                                            elseif (isset($_POST["commit_class"])) echo ($commit_class);  ?></div>
        </div>
    </form>
</body>

</html>