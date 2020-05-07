<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $dbhost = '127.0.0.1';
    $dbuser = 'test';
    $dbpass = '123456';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'test');
    if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));
    }
    // 设置编码，防止中文乱码
    mysqli_query($conn , "set names utf8");

    $sql = "SELECT id,username from users where id=$id";

    $retval = mysqli_query( $conn, $sql );
    if(! $retval )
    {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    echo '<h2>MYSQL Test</h2>';
    echo '<table border="1"><tr><td>ID</td><td>Username</td></tr>';
    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
    {
        echo "<tr><td> {$row['id']}</td> ".
             "<td>{$row['username']} </td> ".
             "</tr>";
    }
    echo '</table>';
    mysqli_close($conn);
} else {
  phpinfo();
}
