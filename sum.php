<?php
// function sum($max){
//   $result = 0;
//   for($i = 1; $i <= $max; $i++ ){
//   $result += $i;
// }
// return $result;
// }
// echo sum(100);



// 課題
function sum($max){
  return $max * 2;
}
echo sum(500);


function f($a, $b){
  return $a +$b;
}
echo f(100,200);


$arr = array(1, "a", 5, "B", 9);
//
function arr($arr){

  foreach($arr as $value){
    echo $value;
  }

}
echo arr($arr);


$arr = array(3, 6, 8, 10);
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($a > $max_number){
      $max_number = $a;
    }
}
    return $max_number;
}
echo max_array($arr);

$str = "<h1>strip_tags関数</h1>"
  ."<p>タグを取り除くよっ！</p>";
  echo strip_tags($str)."\n";


$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pinapple');
print_r ($fruits);


$item1 = ['item1', 'item2', 'item3'];
$item2 = ['item4', 'item5'];
$item3 = ['item6', 'item7'];

$item_merge = array_merge($item1,$item2, $item3);
print_r ($item_merge);


echo '現在のUnixタイムスタンプ：'.time();


$date1 = date('Y/m/d');
echo $date1.'<br>';










 ?>
