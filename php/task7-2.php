<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //プロパティ＝変数
  //メソッド＝関数
  //テンプレート＝クラス
  //親クラス

  class Staff {
    protected $id;
    private $name;
    private $age;
    private $sex;
    protected static $idCounter = 1;

    public function __construct($name, $age, $sex) {
        $this->id = sprintf("S%04d", self::$idCounter++);
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function show() {
        printf('(%s) %s %d歳 %s ', $this->id, $this->name, $this->age, $this->sex);
    }
  }

  //子クラス

  class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
        $this->id = sprintf("P%04d", self::$idCounter-1);
        
    }

    public function show() {
        parent::show();
        printf('時給: %d円 ', $this->jikyu);
    }
  }
  $staff = [];
  $staff[] = new Staff("佐藤 一郎", 31, "男性");
  $staff[] = new Staff("山田 花子", 25, "女性");
  $staff[] = new Staff("鈴木 次郎", 27, "男性");
  $staff[] = new PartStaff("田中 友子", 24, "女性", 900);
  $staff[] = new Staff("中村 三郎", 27, "男性");
  $staff[] = new PartStaff("田中 友", 17, "女性", 930500);


  foreach ($staff as $member) {
    $member->show();
    echo '<br>';
}


  // $staff[1]->show();
  // echo "<br>";
  // $staff[2]->show();
  // echo "<br>";
  // $staff[3]->show();
  // echo "<br>";
  // $partStaff[1]->show();
  // echo "<br>";
  // $staff[4]->show();
  // echo "<br>";
  // $partStaff[2]->show();




  ?>
</body>
</html>