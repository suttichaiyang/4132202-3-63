<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/php/add.php" method="POST">
        <input type="text" placeholder="ID" name="ID">
        <br>
        <select name="pre_name">
            <option value="1">นาย</option> 
            <option value="2">นางสาว</option>
        </select>
        <br>
        <input type="text" placeholder="name" name="name">
        <br>
        <select name="subject_id">
            <option value="1">เทคโนโลยีอินเตอร์เน็ต</option>
        </select>
        <br>
        <button type="submit"> SAVE </button>
        <button type="reset"> Cancle </button>
    </from>

    <?php
    require "./php/data_table.php";
    ?>
</body>
</html>