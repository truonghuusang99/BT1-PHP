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
            <define_syslog_variables>Loại tiệc:</define_syslog_variables>
            <div><input type="checkbox" name="party_breakfast" value="Tiệc sáng" />Tiệc sáng</div>
            <div><input type="checkbox" name="party_lunch" value="Tiệc trưa" />Tiệc trưa</div>
            <div><input type="checkbox" name="party_evening" value="Tiệc tối" />Tiệc tối</div>
        </div>
        <div class="position">
            <define_syslog_variables>Địa điểm:</define_syslog_variables>
            <div><input type="radio" name="position" />Trong nhà</div>
            <div><input type="radio" name="position" />Ngoài trời</div>
            </define_syslog_variables>
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
            <div>
                <label for="PR">Quý khách biết đến nhà hàng của chúng tôi qua: </label>
                <select name="age" size="3">
                    <option value="Báo chí">Báo chí</option>
                    <option value="Đài phát thanh">Đài phát thanh</option>
                    <option value="Tivi">Tivi</option>
                </select>
            </div>
            
    </form>
</body>

</html>