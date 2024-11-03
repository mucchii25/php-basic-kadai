<?php
   
   class Food {
         private $name;
         private $price;
         
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
   }

   public function show_price(){
          echo $this->price . '<br>';
     }
 }




   class Animal {
    private $name;
    private $height;

    public function __construct(string $name, int $height) {
      $this->name = $name;
      $this->height = $height;
    }

     public function show_height(){
     echo $this->height . '<br>';
   }
}

// Foodクラスのインスタンスを作成
$fruit = new Food('いちじく', 320);         
print_r($fruit);

// Animalクラスのインスタンスを作成
$bird = new Animal('フクロウ', 45);    
print_r($bird);

?>
  