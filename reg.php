<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
</head>

<body>
    <h2>會員註冊</h2>
    <form action="./add_user.php" method="post">
        <div>
            <label for="">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div>
            <label for="">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div>
            <label for="">姓名:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="">信箱:</label>
            <input type="text" name="mail" id="mail">
        </div>
        <div>
            <label for="">地址:</label>
            <input type="text" name="add" id="add">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>




    </form>




</body>

</html>