<?php
$name = "寺部裕介";
if ($name === "寺部裕介" ){
  echo "私は あなたの名前 です";
}else{
  echo "あなたの名前ではありません";
}

for($i=0; $i<=10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "banana", "grape", "orange", "melon");
foreach($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}
// 課題４
$start = 1;
$end = 100;

for($i=$start; $i<=$end; $i++) {
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

 ?>
