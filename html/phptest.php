<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>おみくじ</title>
  </head>
  <body>
    <div>
      今日のあなたの運勢は
      <?php
       $results = ["大吉","吉","凶","大凶"];
       $rnd = mt_rand(0,count($results)-1;
       echo($results[$rnd]);
       ?>
       です。
    </div>
  </body>
</html>   