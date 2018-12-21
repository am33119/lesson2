<?php
//課題１
$name = 'sayaka';
if ($name === 'sayaka') {
  echo '私は あなたの名前 です';
} else {
  echo 'あなたの名前ではありません';
}

//課題２
$total = 0;
for ($i=1; $i<=10000; $i++) {
  $total += $i;
}
echo $total;

//課題３
$fruits = ['apple','melon','cherry','banana','orange'];
foreach ($fruits as $fruit) {
  echo $fruit;
  echo '<br>';
}

//課題４
$start = 1;
$end = 100;
for($i = $strat; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i.'<br>';
  }
}
