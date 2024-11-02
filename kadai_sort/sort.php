<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

      //ソート関数
        function sort_2way($array, $order){

          if($order === TRUE) {
            sort($array);
             echo "昇順にソートします。<br>";
        } else {
          rsort($array); 
          echo "降順にソートします。<br>";
        }
        // ソートした配列を1行ずつ表示
        foreach ($array as $value) {
          echo $value . '<br>';
        }
      }
      

        $nums = [15, 4, 18, 23, 10];

         //  昇順
       sort_2way($nums, TRUE);
        // 降順
       sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>