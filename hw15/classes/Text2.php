<?php
/**
 * Child class for Text and change parent method print()
 */
class Text2 extends Text
{
    /**
     * Method print text from property $text by upper case
     * @return void
     */
    public function print(): void
    {
        print_r(strtoupper($this->text));
    }
}