<?php

namespace MyApp\Http\HttpRequest;

class Request
{
    private static array $requests = []; 
    /**
     * @return self
     */
    public static function multiple(): self
    {
        $post = isset($_POST) ? $_POST : [];
        $get = isset($_GET) ? $_GET : [];
        $files = isset($_FILES) ? $_FILES : [];

        self::$requests = array_merge($post, $get, $files);
        return new self;
    }
    /**
     * @return array
     */
    public function toArray(): array
    {
        return self::$requests;
    }
    /**
     * @return object
     */
    public function toStdClass(): object
    {
        return (object)self::$requests;
    }
}
