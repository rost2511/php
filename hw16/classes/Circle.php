<?php

/**
 * Class for circle figure
 */
class Circle extends Figure
{
    protected int|float $radius;

    public function __construct(int|float $radius)
    {
        if ($radius <= 0) {
            throw new Exception('Invalid width!');
        }
        $this->setRadius($radius);
    }

    /**
     * Method set radius of circle
     * @param float|int $radius
     */
    protected function setRadius(int|float $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * Method get radius of circle
     * @return float|int
     */
    public function getRadius(): int|float
    {
        return $this->radius;
    }

    /**
     * Method calculates the area of circle
     * @return float|int
     */
    protected function area(): int|float
    {
        return M_PI * (pow($this->radius, 2));
    }

    /**
     * Method get the area of circle
     * @return int|float
     */
    public function getArea(): int|float
    {
        return $this->area();
    }

    /**
     * Method calculates the perimeter of circle
     * @return int|float
     */
    protected function perimeter(): int|float
    {
        return 2 * M_PI * $this->radius;
    }

    /**
     * Method get the perimeter of circle
     * @return int|float
     */
    public function getPerimeter(): int|float
    {
        return $this->perimeter();
    }
}