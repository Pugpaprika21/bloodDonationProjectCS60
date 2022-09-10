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
        $fields = [];
        $values = [];

        foreach ($request_sql as $key => $value) {
            $fields[] = $key;
            $values[] = ':' . $value;
        }

        return (object)[
            'fields' => implode(', ', $fields),
            'values' => implode(', ', $values),
            'data' => (object)$request_sql
        ];
    }
}
