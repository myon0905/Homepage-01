<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  
  class Staff{
    private $id;
    private $name;
    private $age;
    private $sex;
    private static $idCounter = 1;

    public function __construct ($name, $age, $sex){
      $this->id = sprintf("S%04d", self::$idCounter++);
      $this->name = $name;
      $this->age = $age;
      $this->sex = $sex;
    }
    
    public function show(){
      printf('(%s) %s %d歳 %s ',$this->id, $this->name, $this->age, $this->sex);
    }
    
  }
    $staff = [];
    $staff[1] = new Staff("佐藤 一郎", 31, "男性");
    $staff[2] = new Staff("山田 花子", 25, "女性");
    $staff[3] = new Staff("鈴木 次郎", 27, "男性");

    // $staff[1]->show();
    // $staff[2]->show();
    // $staff[3]->show();
    
    foreach ($staff as $member) {
      $member->show();
      echo '<br>';
  }
  

  ?>
</body>
</html>