<?php
function OpenCon()
{
    $dbhost = "rm-l4vr05b1695ca76dwro.mysql.me-central-1.rds.aliyuncs.com";
    $dbuser = "user_ac5";
    $dbpass = "0Password@";
    $db = "tamwilli";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

$conn = OpenCon();
$result = $conn->query('SELECT * FROM username;');
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ar">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <title>Tamweelly</title>
    </head>

    <body>
        <link rel="icon" href="/img/icon.jpg" type="image/x-icon">
        <img src="/img/icon.jpg" alt="Italian Trulli" width="128" height="128">

        <h2> أهلا بك في تمويلي </h2>
            رقم الهوية\الإقامة :
            <input name="id" type=”text” placeholder="ID" value="<?php echo $row['id'] ?>">
            <br />
            <br />
            رقم الجوال:
            <input name="phone" type=”tel” placeholder="phone" value="<?php echo $row['phone'] ?>">
            <br />
            <br />
        <button> <a href="typeB.html"><input type="submit"  value="ارسال"></a></button>
    </body>

</html>
