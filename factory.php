<?php
class Automobile
{
	private $shapeForm;
	private $shapeColor;

	public function __construct($form, $color)
	{
		$this->shapeForm = $form;
		$this->shapeColor = $color;
	}

	public function getSizeandColor()
	{
		return $this->shapeForm . ' ' . $this->shapeColor;
	}
}

class ShapeFactory
{
	public static function create($form, $color)
	{
		return new Automobile($form, $color);
	}
}

$square = ShapeFactory::create('Square', 'Green');
$square = ShapeFactory::create('Circle', 'Blue');

print_r($square->getSizeandColor());
?>
