<?php
//課題１
function getDoubleNum($num) {
     return $num * 2;
}
echo getDoubleNum(10);

//課題２
function f($a, $b) {
  return $a + $b;
}
$sum = f(1,3);
echo $sum;

//課題３
$arr = array(1,3,5,7,9);
echo array_product($arr);

//課題４
$arr = array(5,9,6,2,7,4);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
//どうしたらいいかわからない・・・・
   if ($a > $max_number) {
     $max_number = $a;
   }
  }
　　return $max_number;
}
echo max_array($arr);

//課題５
//strip_tags:文字列からHTMLおよびPHPタグを取り除く
$preHtmlStr = '<a href="https://wepicks.net">wepicks</a>';
echo 'HTMLタグ削除前:'.$preHtmlStr."<br/>\n";
$aftHtmlStr = strip_tags($preHtmlStr);
echo 'HTMLタグ削除後:'.$aftHtmlStr."<br/>\n";
echo '※htmlタグが削除されています。';

//array_push:指定した配列の末尾に1つ以上の要素を追加　
 $fruits = ['orange', 'banana'];
 array_push($fruits, 'apple', 'raspberry');
 print_r(fruits);

 //array-_merge:配列の要素の最後に一つまたは複数の配列を結合するとき
 $array1 = [1, 2, 3];
 $array2 = [10, 20, 30];
 $array3 = [100, 200, 300];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);

 //time:現在の（プログラムを起動した時点）の　UNIXTIMESTAMP　を取得できる　
 $timestamp = time();
 echo($timestamp. "<br>");
 echo(date("Y-m-d",$timestamp));
 //mktime:指定したい日時の　UNIXTIMESTAMP　を取得できる
 echo  mktime();
 //date:日時を出力する
 echo date("Y年m月j日　H時i分");
