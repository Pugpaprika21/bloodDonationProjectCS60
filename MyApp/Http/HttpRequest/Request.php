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
        $postResult = [];
        $post = isset($_POST) ? $_POST : [];
        $get = isset($_GET) ? $_GET : [];
        $files = isset($_FILES) ? $_FILES : [];

        self::$requests = array_merge($post, $get, $files);
        return new self;

        // foreach ($post as $postKey => $postVal) {
        //     $postResult = $post[$postKey] = htmlspecialchars(strip_tags($postVal));
        // }

        // foreach ($post as $postKey => $postVal) {
        //     $postResult = $post[$postKey] = htmlspecialchars(strip_tags($postVal));
        // }

        // foreach ($post as $postKey => $postVal) {
        //     $postResult = $post[$postKey] = htmlspecialchars(strip_tags($postVal));
        // }

        //$html = htmlspecialchars(strip_tags($_POST));
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
