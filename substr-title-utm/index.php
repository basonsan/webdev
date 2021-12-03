<!DOCTYPE html>
<html lang="en">
<head>
    <?
        //присваиваем $h1_value значение в зависимости от utm меток
        $utm = $_SERVER['QUERY_STRING'];
		$h1_value = 'Строительство <span>быстровозводимых</span> зданий';
        //массив с метками
        $utm_value_arr = ['utm_zdanie=angar', 'utm_zdanie=sklad'];
        //массив со значениями меток
        $h1_value_arr = ['Строительство <span>ангаров</span>','Строительство <span>складов</span>'];
        foreach ($utm_value_arr as $key => $utm_value) {
            $pos = stripos($utm, $utm_value);
            if ($pos !== false) {
                $h1_value = $h1_value_arr[$key];
            }
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$h1_value?></title>
</head>
<body>
    <h1><?=$h1_value?></h1>
</body>
</html>