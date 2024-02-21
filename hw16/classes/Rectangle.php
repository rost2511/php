<?php

/**
 * Class for rectangle figure
 */
class Rectangle extends Figure
{
    protected int|float $width;
    protected int|float $height;

    public function __construct(int|float $width, int|float $height)
    {
        if ($width <= 0) {
            throw new Exception('Invalid width!');
        }
        if ($height <= 0) {
            throw new Exception('Invalid height!');
        }
        $this->setWidth($width);
        $this->setHeight($height);

    }

    /**
     * Method set width
     * @param float $width
     */
    protected function setWidth(int|float $width): void
    {
        $this->width = $width;
    }

    /**
     * Method set height
     * @param float $height
     */
    protected function setHeight(int|float $height): void
    {
        $this->height = $height;
    }

    /**
     * Method get width
     * @return int|float
     */
    public function getWidth(): int|float
    {
        return $this->width;
    }

    /**
     * Method get height
     * @return int|float
     */
    public function getHeight(): int|float
    {
        return $this->height;
    }

    /**
     * Method calculates the area of rectangle
     * @return int|float
     */
    protected function area(): int|float
    {
        return $this->getWidth() * $this->getHeight();
    }

    /**
     * Method get the area of rectangle
     * @return int|float
     */
    public function getArea(): int|float
    {
        return $this->area();
    }

    /**
     * Method calculates the perimeter of rectangle
     * @return int|float
     */
    protected function perimeter(): int|float
    {
        return 2 * ($this->getWidth() + $this->getHeight());
    }

    /**
     * Method get the perimeter of rectangle
     * @return int|float
     */
    public function getPerimeter(): int|float
    {
        return $this->perimeter();
    }
}