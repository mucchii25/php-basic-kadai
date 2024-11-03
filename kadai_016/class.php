<?php
   
   class Food {
         private $name;
         private $price;
         
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
   }

   public function show_price(){
          echo  '価格: ' . $this->price . '円<br>';
     }
 }




   class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

     public function show_height(){
     echo '身長:' . $this->height . 'cm<br>';
   }
}

// Foodクラスのインスタンスを作成
$fruit = new Food('いちじく', 320);         
print_r($fruit);
// show_priceメソッドを呼び出し
$fruit->show_price();


// Animalクラスのインスタンスを作成
$bird = new Animal('フクロウ', 45 , 12);    
print_r($bird);
// show_heightメソッドを呼び出し
$bird->show_height();


?>
  
