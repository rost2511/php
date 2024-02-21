<?php

/**
 * Abstract class for figures
 */
abstract class Figure
{
    protected abstract function area(): int|float;

    protected abstract function perimeter(): int|float;
}
