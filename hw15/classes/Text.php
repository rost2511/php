<?php
/**
 * Class have property $text and method print() whose capitalizes the first letter of $text property value and print
 */
class Text
{
    protected string $text = "some text";
    public function print(): void
    {
        print_r(ucfirst($this->text));
    }
}