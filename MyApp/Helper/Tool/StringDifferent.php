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
    /**
     * @param object $request_sql
     * @return object
     */
    public static function letter(object $request_sql): object
    {
        $column = []; 
        $rows = [];
        $values = [];

        $str = new StringDifferent();

        foreach ($request_sql as $key => $value) {
            $column[] = $str->clean($key);
            $rows[] = ':' . $str->clean($key);
            $values[] = ':' . $str->clean($value);
        }

        return (object)[
            'column' => implode(', ', $column),
            'rows' => implode(', ', $rows),
            'values' => implode(', ', $values),
            'dataRequest' => (object)$request_sql
        ];
    }
}
