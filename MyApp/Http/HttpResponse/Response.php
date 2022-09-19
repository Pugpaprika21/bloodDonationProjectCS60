<?php

namespace MyApp\Http\HttpResponse;

class Response
{
    public static $response_input = [];
    /**
     * @param string $massage
     * @return void
     */
    public static function success(string $massage = "OK"): void
    {
        echo json_encode([
            "status" => 200,
            "massage" => $massage,
            "response" => "success"
        ]);
    }
    /**
     * @param string $massage
     * @return void
     */
    public static function error(string $massage = "ERROR"): void
    {
        echo json_encode([
            "status" => 400,
            "massage" => $massage,
            "response" => "bad"
        ]);
    }
    /**
     * @param array $data_render
     * @return self
     */
    public static function render(array $data_render): self
    {
        self::$response_input = $data_render;
        return new self;
    }
    /**
     * @return void
     */
    public function jsonString(): void
    {
        echo json_encode(self::$response_input, JSON_PRETTY_PRINT);
    }
    /**
     * display array
     * @return void
     */
    public function toArray(): void
    {
        echo '<pre>';
        print_r(self::$response_input);
        echo '</pre>';
    }
}
