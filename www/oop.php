<?php

/*Создание класса*/

	echo "<h4>Создание класса</h4>";
	class Point_l1 {
		public $x; // свойство
		public $y;
		public function __construct($a, $b) { //конструктор
			$this->x = $a; //$this->x - означает обращение к свойству Х
			$this->y = $b;
		}
		public function getX() { //метод
			return $this->x;
		}
		public function setX($a) {
			$this->x = $a;
		}
		public function setPoint($point) {
			$this->x = $point->x;
			$this->y = $point->y;
		}
		public function __toString() {
			return "Point with coords (".$this->x."; ".$this->y.")";
		}
	}
	$point = new Point_l1(5, 7); //создание класса с координатами Point(5, 7), и указателя (ссылку) на этот класс $point
	echo $point->x."<br />";
	echo $point->y."<br />";
	$point->y = 100; //перезапись свойства класса
	echo $point->y."<br />";
	echo $point->getX()."<br />";
	$point->setX(10);
	echo $point->getX()."<br />";
	echo $point."<br />";
	$point_1 = new Point_l1(15, -7);
	$point->setPoint($point_1);
	echo $point."<br />";

/*Модификаторы доступа*/

	echo "<br /><h4>Модификаторы доступа</h4>";
	class Point_l2 {
		private $x;
		private $y;
		public function __construct($a, $b) {
			$this->x = $a;
			$this->y = $b;
		}
		public function getX() {
			return $this->x;
		}
		public function setX($a) {
			$this->x = $a;
		}
		public function getY() {
			return $this->y;
		}
		public function setY($b) {
			$this->y = $b;
		}
		public function setPoint($point) {
			$this->x = $point->x;
			$this->y = $point->y;
		}
		public function getDistance($point) {
			return sqrt($this->getPow2($point));
		}
		private function getPow2($point) {
			return pow(($this->x - $point->x), 2) + pow(($this->y - $point->y), 2);
		}
		public function __toString() {
			return "Point with coords (".$this->x."; ".$this->y.")";
		}
		public function __destruct() {
			echo "<br />Object have been ditructed";
		}
	}
	/*Существует 3 модификатора - public, protected, private*/
	$point = new Point_l2(5, 7);
	echo $point."<br />";
	$point->setX(10);
	$point->setY(12);
	echo $point."<br />";
	$point_1 = new Point_l2(12, 14);
	echo $point_1."<br />";
	echo $point->getDistance($point_1)."<br />";

/*Статические свойства и методы*/

	echo "<br /><h4>Статические свойства и методы</h4>";
	class math {
		public static $count = 0; //static означает что свойство принадлежит не объекту, а классу
		public static function getSin($x) {
			self::$count++; //self:: - означает то же что и $this-> только для статитеских свойств и методов
			return sin($x);
		}
		public static function getCos($x) {
			self::$count++;
			return cos($x);
		}
	}
	echo math::getSin(1)."<br />"; //вызов статического метода или свойства начинается с названия класса и ::
	echo math::getCos(1)."<br />";
	echo math::$count."<br />";

/*Клонирование объектов*/

	echo "<br /><h4>Клонирование объектов</h4>";
	class CopyPoint {
		public $x;
		public $y;
		public function __construct($x, $y) {
			$this->x = $x;
			$this->y = $y;
		}
		public function __toString() {
			return "Point with coords (".$this->x."; ".$this->y.")<br />";
		}
		public function __clone() { //функция которая подставляет заданые в ней значения после выполнения клонирования
			$this->y = 50;
		}
	}
	$cPoint = new CopyPoint(10, 10);
	$cPoint_1 = clone $cPoint; //вызов функции для клонирования объекта
	$cPoint->x = 100;
	echo $cPoint;
	echo $cPoint_1;

/*Наследование*/

	echo "<br /><h4>Наследование</h4>";
	class auto {
		protected $x;
		protected $y;
		public function __construct($x = 0, $y = 0) {
			$this->x = $x;
			$this->y = $y;
		}
		public function move($x, $y) {
			$this->strMove($x, $y);
		}
		protected function strMove($x, $y, $type = "") {
			if (type == "") echo "Двигаем автомобиль из (".$this->x."; ".$this->y.") в (".$x."; ".$y.")<br />";
			else echo "Двигаем $type автомобиль из (".$this->x."; ".$this->y.") в (".$x."; ".$y.")<br />";
		}
	}
	class car extends auto { //extends - означает наследование
		public function __construct($x = 0, $y = 0) {
			parent::__construct($x, $y); //parent:: - обращение к родительскому методу
		} //можно не писать так как это является функцией по умолчанию
		public function move($x, $y) {
			$this->strMove($x, $y, "легковой");
		}
	}
	class truck extends auto {
		private $capacity;
		public function __construct($x = 0, $y = 0, $capacity = 5000) {
			parent::__construct($x, $y);
			$this->capacity = $capacity;
		}
		public function move($x, $y) {
			$this->strMove($x, $y, "грузовой");
		}
	}
	$auto = new auto();
	$truck = new truck();
	$car = new car();
	$auto->move(1, 1);
	$truck->move(10, 10);
	$car->move(20, 20);

/*Абстрактные классы*/

	echo "<br /><h4>Абстрактные классы</h4>";
	abstract class Shape { //абстрактный класс нельзя вызвать
		protected $x;
		protected $y;
		public function __construct($x, $y) {
			$this->x = $x;
			$this->y = $y;
		}
		public function draw() {
			echo $this->drawShape()."<br />";
		}
		abstract protected function drawShape(); //абстрактный метод обязательно должен быть описан в дочерних классах 
	}
	class Rectangle extends Shape {
		private $width;
		private $height;
		public function __construct($x, $y, $width, $height) {
			parent::__construct($x, $y);
			$this->width = $width;
			$this->height = $height;
		}
		protected function drawShape() {
			return "Рисуем прямоугольник с шириной ".$this->width." и высотой ".$this->height;
		}
	}
	class Circle extends Shape {
		private $radius;
		public function __construct($x, $y, $radius) {
			parent::__construct($x, $y);
			$this->radius = $radius;
		}
		protected function drawShape() {
			return "Рисуем окружность с радиусом ".$this->radius;
		}
	}
	$circle = new Circle(0, 0, 20);
	$rectangle = new Rectangle(0, 0, 20, 50);
	$circle->draw();
	$rectangle->draw();

/*Интерфейсы*/

	echo "<br /><h4>Интерфейсы</h4>";
	interface FileIO { //интерфейсы используются как абстрактные классы
		public function read();
		public function write();
	}
	class Inter implements FileIO { //после implements можно через запятую указать несколько родительских классов
		public function read() {
			echo "Reading from file<br />";
		}
		public function write() {
			echo "Writing to file<br />";
		}
	}
	$inter = new Inter();
	$inter->read();
	$inter->write();
	

	echo "<br /><br /><br /><a href=\"index.php\">Назад</a><br />";

?>