<?php

namespace MyApp\Helper\Tool;

class StringDifferent
{
    /**
     * @param string $stringInput
     * @return string
     */
    public function clean(string $stringInput): string
    {
        $result = htmlspecialchars(strip_tags($stringInput));
        return $result;
    }
}
