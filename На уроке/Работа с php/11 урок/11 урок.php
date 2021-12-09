<!--1 Задача <br>
<?php
/*$_str="He talked about the Moscow case in 2019, covered the protests in Belarus and talked to economic and political experts - in a word, he was engaged in ordinary journalistic work.";
$_arr=str_split($_str);
foreach ($_arr as $_simb){
if ($_simb=="a") {
    $_simb=1;
}
elseif ($_simb=="b"){
    $_simb=2;
}
elseif ($_simb=="c"){
    $_simb=3;
}
echo $_simb;
}
*/?>
<br>
2 Задача
--><?php
/*$_str='abc abc abc';
$_b=strrpos($_str,"b");
echo "<br> $_b";
*/?>
Функции <br>
<?php
/*function bol($_el1, $_el2)
{
    if ($_el1 > $_el2) {
        return "$_el1";
    } elseif ($_el1 < $_el2) {
        return "$_el2";
    }

}
$_result= bol(4,2);
echo $_result;
*/?>
<?php
/*function gipotenuza($_katet1, $_katet2){
    $_gip=sqrt($_katet1**2+$_katet2**2);
return $_gip;
}
$_result=gipotenuza(8,10);
echo $_result;
*/?>
<?php
function(){
    $_uv=0;
    while (1000000>=$_uv){
        $_uv*=10;
    if(1000000>=$_uv){
        echo "вы достигли предела";
    }
    }
}


