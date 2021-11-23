<?php
class UNI
{
    function get($opt)
    {
        // Предположим что $GLOBALS['connect'] подключает нас к бд
        $arr = array();
        $ALLROW = @mysqli_query($GLOBALS['connect'], $opt);
        while ($row = @mysqli_fetch_array($ALLROW, MYSQLI_ASSOC)) {
            $arr[] = $row;
        }
        return $arr;
    }
}

if (isset($_POST['get'])) {
    $arr = $_POST['arr'];
    $get = UNI::get('YOU_MySQL_CODE'); //Впишите сюда MySQL запрос для получения всех данных из таблицы "table"
    $arr[] = $get;
    echo true; // в echo отдайте $arr в json формате
}
