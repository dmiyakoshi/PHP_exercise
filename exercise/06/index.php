<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car
{
    private $carName;
    private $carNumber;
    private $carColor;

    public function __construct($carName, $carNumber, $carColor)
    {
        $this->carName = $carName;
        $this->carNumber = $carNumber;
        $this->carColor = $carColor;
    }

    public function getName()
    {
        return $this->carName;
    }

    public function getNumber()
    {
        return $this->carNumber;
    }

    public function getColor()
    {
        return $this->carColor;
    }

    public function information()
    {
        return '車の種類: ' . $this->carName .
            '、 車体番号: ' . $this->carNumber .
            '、 カラー: ' . $this->carColor;
    }

    public function setName($name)
    {
        $this->carName = $name;
    }

    public function setNumber($number)
    {
        $this->carNumber = $number;
    }

    public function setColor($color)
    {
        $this->carColor = $color;
    }
}


// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';
