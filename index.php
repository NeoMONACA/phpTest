<html>
<?php

$test="これはサンプルです。";
$testnum=123;

echo $test;
echo $testnum;

echo "<br />";

$a = 3;
$b = 7;
echo $a+$b ."\n";

echo "<br />";

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

echo "<br />";

$hello = "Hello,";
$name = "Yamaton";
$world = "‘s World!";
echo $hello.$name.$world;

echo "<br />";

$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost;

echo "<br />";

$calendar_2020 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
  ];
  
  // 12月を表示する
  echo $calendar_2020["December"];

echo "<br />";

$height=160;
$height = $height + 40 ;
if ($height < 150){
  echo "150cm未満はご乗車できません";
} else if ($height >= 200){
  echo "200cm以上はご乗車になれません";
} else {
  echo "ご乗車いただけます";
}

echo "<br />";
echo "ところで・・・" ;
echo "\n";
echo "貴殿の身長は" . $height . "cm" . "で御座います" ;

echo "<br />";



//1. $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、もし違ったら「あなたの名前ではありません」と表示するように実装してください。

$name = "Yamaton";
if ($name = "Yamaton"){
  echo "私は　".$name."　です";
}else{
  echo "あなたの名前ではありません";
}

//2. for文を使って、1から10000までの合計の値を表示してください。

$total = 0;
for ($i=1; $i<=10000; $i++){

$total += $i ;
}
echo $total;


//3. $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("りんご","みかん","もも","ぶどう","パイナップル");
foreach($fruits as $fruits_single)
echo $fruits_single."\n";


//4.　【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。


// for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}




?>
</html>