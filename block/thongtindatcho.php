<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bt1/css/block/thongtindatcho.css">
    <title>Thông tin đặt chỗ</title>
</head>

<body>
    <form action="" class="ttdc" method="post">
        <div class="title_dc">THÔNG TIN ĐẶT CHỖ</div>
        <div style="display: flex">
            <div style="flex-grow: 1"><label for="number_guess">Số khách tham dự buổi tiệc của quý khách:</label>
                <input style="width: 50px" type="number" name="number_guess" /></div>
            <div style="flex-grow: 1; "><label>Ngày</label>
                <input type="date" name="date" /></div>
        </div>
        <div class="type">
            <div>Loại tiệc:</div>
            <div><input type="checkbox" name="party_breakfast" value="Tiệc sáng" />Tiệc sáng</div>
            <div><input type="checkbox" name="party_lunch" value="Tiệc trưa" />Tiệc trưa</div>
            <div><input type="checkbox" name="party_evening" value="Tiệc tối" />Tiệc tối</div>
        </div>
        <div class="position">
            <div>Địa điểm:</div>
            <div><input type="radio" name="position" value="trong nhà" />Trong nhà</div>
            <div><input type="radio" name="position" value="ngoài trời" />Ngoài trời</div>
        </div>
        <div style="display: flex">
            <div style="flex-grow: 1"><label for="name_guess">Tên quý khách:</label>
                <input style="width: 160px" type="text" name="name_guess" /></div>
            <div style="flex-grow: 1; "><label for="address">Địa chỉ liên lạc:</label>
                <input type="text" name="address" /></div>
        </div>
        <div style="display: flex">
            <div style="flex-grow: 0.5"><label for="age">Độ tuổi:</label>
                <select name="age">
                    <option value="Từ 6 đến 18 tuổi">Từ 6 đến 18 tuổi</option>
                    <option value="Từ 19 đến 34 tuổi">Từ 19 đến 34 tuổi</option>
                    <option value="Từ 34 đến 60 tuổi">Từ 34 đến 60 tuổi</option>
                    <option value="Từ 60 tuổi trở lên">Từ 60 tuổi trở lên</option>
                </select>
            </div>
            <div style="flex-grow: 1; ">
                <label for="sex">Giới tính:</label>
                <input type="radio" name="sex" value="nam" /> Nam
                <input type="radio" name="sex" value="nữ" /> Nữ
            </div>
        </div>
        <div style="display:flex;">
            <div for="PR">Quý khách biết đến nhà hàng của chúng tôi qua: </div>
            <div><select name="multi[]" size="3" multiple>
                    <option value="Báo chí">Báo chí</option>
                    <option value="Đài phát thanh">Đài phát thanh</option>
                    <option value="Tivi">Tivi</option>
                </select></div>
        </div>
        <div>Các yêu cầu khác của quý khách:</div>
        <div style="text-align: center;">
            <textarea style="width: 98%; height: 50px;" name="other"></textarea>
            <input type="submit" value="Đặt chỗ" name="submit" />
        </div>
    </form>
    <div class="result">
        <div class="title_dc">THÔNG TIN ĐẶT CHỖ</div>
        <div class="main_ttdc">
            <div><strong>Thông tin khách hàng</strong></div>
            <div>Họ tên: <?php if (isset($_POST["name_guess"])) echo ucwords($_POST["name_guess"]) ?> - Độ tuổi: <?php if (isset($_POST["age"])) echo ucwords($_POST["age"]) ?> / Giới tính: <?php if (isset($_POST["sex"])) echo ucwords($_POST["sex"]) ?></div>
            <div>Địa chỉ: <?php if (isset($_POST["address"])) echo ucwords($_POST["address"]) ?></div>
            <div><strong>Thông tin đặt chỗ</strong></div>
            <div>Số khách tham gia bữa tiệc: <?php if (isset($_POST["number_guess"])) echo ucwords($_POST["number_guess"]) ?> - Ngày đặt tiệc: <?php if (isset($_POST["date"])) echo ucwords($_POST["date"]) ?></div>
            <div>Loại tiệc: <?php if (isset($_POST["party_breakfast"])) echo " - " . ucwords($_POST["party_breakfast"]);
                            if (isset($_POST["party_lunch"])) echo " - " . ucwords($_POST["party_lunch"]);
                            if (isset($_POST["party_evening"])) echo " - " . ucwords($_POST["party_evening"]);
                            ?> / Địa điểm: <?php if (isset($_POST["position"])) echo ucwords($_POST["position"]) ?></div>
            <div><strong><i>Các yêu cầu kèm theo<i></strong></div>
            <div><?php if (isset($_POST["other"])) echo str_replace(".", ".<br/>", ($_POST["other"])) ?></div>
            <div style="text-align: center"><i>Quý khách biết đến nhà hàng của chúng tôi qua: </i> <?php if (isset($_POST["multi"]))
                                                                                                        foreach ($_POST["multi"] as $selectedOption)
                                                                                                            echo $selectedOption . " "; ?></div>
            <div>Chúng tôi đã nhận được thông tin đặt chỗ của quý khách vào lúc : <?php if (isset($_POST["submit"])) {
                                                                                        $now = date('H:i:s - d-m-Y');
                                                                                        echo $now;
                                                                                    } ?></div>
        </div>
    </div>
</body>

</html>