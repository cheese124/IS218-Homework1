<?php
class Automobile
{
	private $shapeForm;
	private $shapeColor;

	public function __construct($form, $color)
	{
		$this->shapeSize = $form;
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

$square = AutomobileFactory::create('Square', 'Green');

print_r($square->getSizeandColor());
?>
