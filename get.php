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
    $get = UNI::get("SELECT * FROM 'table'"); //Впишите сюда MySQL запрос для получения всех данных из таблицы "table"
    $arr[] = $get;
    echo json_encode($arr, JSON_UNESCAPED_UNICODE); // в echo отдайте $arr в json формате
}

include("dbconnect.php");

if ($agentAttribute == "agent"){
    $sql = "SELECT * FROM 'table'";
    if ($result = mysqli_query($dbconnect, $sql)){
       $resultArray = array();
       $tempArray = array();
    //    while($row = $result->fetch_object()){
    //       $tempArray = $row;
    //       array_push($resultArray, $tempArray);
    //    }
    //    echo json_encode($resultArray, JSON_UNESCAPED_UNICODE);
    //    mysqli_close($dbconnect);
    // }
      while($row = mysqli_fetch_array($result)) {
        if (mysqli_num_rows($result) != 0) {
          $one = $row['one'];
          $two = $row['two'];
          $three = $row['three'];
          $four = $row['four'];
          $tempArray = array('один' => $one, 'два' => $two,
           'три' => $three, 'четыре' => $four);
        }
      }
     array_push($resultArray, $tempArray);
   }
   echo json_encode($resultArray, JSON_UNESCAPED_UNICODE);
   mysqli_close($dbconnect);
 }