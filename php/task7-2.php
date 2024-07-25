<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  //親クラス

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
      printf('(%s) %s %d歳 %s <br/>',$this->id, $this->name, $this->age, $this->sex);
    }
  
  }

  //子クラス

  class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
        $this->id = sprintf("P%04d", self::$idCounter++);
    }

    public function show() {
        parent::show();
        printf('時給: %d円 <br/>', $this->jikyu);
    }
  }

    $staff1 = new Staff("佐藤 一郎", 31, "男性");
    $staff2 = new Staff("山田 花子", 25, "女性");
    $staff3 = new Staff("鈴木 次郎", 27, "男性");
    
    $partStaff1 = new PartStaff("田中 友子", 24, "女性", 900);

    $staff1->show();
    $staff2->show();
    $staff3->show();
    $partStaff1->show();

  

  ?>
</body>
</html>