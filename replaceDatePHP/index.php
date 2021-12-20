<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Сегодня:
    <?php
        // Предположим, что текущая дата March 10th, 2001, 5:16:18 pm

        $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
        $today = date("m.d.y");                         // 03.10.01
        $today = date("j, n, Y");                       // 10, 3, 2001
        $today = date("Ymd");                           // 20010310
        $today = date('h-i-s, j-m-y, it is w Day z ');  // 05-16-17, 10-03-01, 1631 1618 6 Fripm01
        $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // It is the 10th day.
        $today = date("D M j G:i:s T Y");               // Sat Mar 10 15:16:08 MST 2001
        $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:17 m is month
        $today = date("H:i:s");                         // 17:16:17
        echo $today;
    ?>
    Выгодное предложение только
    <?
        $_monthsList = array(
            "1"=>"январе","2"=>"феврале","3"=>"марте",
            "4"=>"апреле","5"=>"мае", "6"=>"июне",
            "7"=>"июле","8"=>"августе","9"=>"сентябре",
            "10"=>"октябре","11"=>"ноябре","12"=>"декабре");
            
        $month = $_monthsList[date("n")];
            
        echo 'в '. $month;
    ?>
    Текущий месяц:
    <?
        $_monthsList = array(
            "1"=>"январь","2"=>"февраль","3"=>"март",
            "4"=>"апрель","5"=>"май", "6"=>"июнь",
            "7"=>"июль","8"=>"август","9"=>"сентябрь",
            "10"=>"октябрь","11"=>"ноябрь","12"=>"декабрь");
            
        $month = $_monthsList[date("n")];
            
        echo $month;
    ?>
    Смещение даты:
    <?php
        $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
        $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
        $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
    ?>
</body>
</html>