Перенести четные числа массива а в массив б <br>
<?php
/*$a_arr=[];
for ($i=0;$i < 2; $i++){
    for ($m=0; $m<3;$m++){
        $a_arr[$i][$m]=mt_rand(0,55);
    }
}
$b_arr=[];
foreach ($a_arr as $_sub) {
    foreach ($_sub as $el){
        if ($el % 2==0){
            $b_arr[]=$el;
        }
    }
}
print_r($a_arr);
echo "<br>";
print_r($b_arr)
*/ ?>
Заадчи слайда 18<br>
1 задача <br>
<?php
/*$str="FACT";
$arr1=str_split($str, 3);
print_r($arr1);
$arr2[0]=substr($str, 0, 1);
$arr2[1]=substr($str,1 , 3);
print_r($arr2);*/
?>
2 задача <br>
<?php
/*$ioArr = array('имя' => ' ', 'фымилия' => '');
$str = "Закирова Регина Артуровна";
$strArr = explode(' ', $str);
foreach ($strArr as $word) {
    if (substr($word, -6) == 'ова') {
        $ioArr ['фамилия'] = $word;
    } elseif ((substr($word, -8) != 'овна') and (substr($word, -6) != 'ова')) {
        $ioArr['имя'] = $word;
    }
}
echo $io = implode($ioArr, " ");*/
?>
3 задача <br>
<?php /*$str='Привет мир';
$simbol=preg_match_all('/и/',$str);
echo $simbol;*/
?>
4 задача <br>
<?php
/*$str='html css php';
$strArr=explode(' ', $str);
print_r($strArr);
for($i=0;$i<$num=count($strArr);$i++){
    echo'<br>'.$strArr[$i];
}*/
?>
5 задача<br>
<?php
/*$date1=date_create('24-10-2000');
//print_r($date1);
$date2=date_create('09-12-2021');
//print_r($date2);
$diff=date_diff($date1,$date2);
echo $diff->format('%a дней');
*/ ?>