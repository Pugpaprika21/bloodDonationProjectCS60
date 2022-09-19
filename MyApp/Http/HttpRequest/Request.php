<?php

namespace MyApp\Http\HttpRequest;

class Request
{
    private static $requestsArray = []; 
    private static $requestsObject = null; 
    /**
     * @return self
     */
    public static function post(): self
    {
        $post = isset($_POST) ? $_POST : [];
        foreach ($post as $postKey => $postVal) {
            $post[$postKey] = htmlspecialchars(strip_tags($postVal));
        }

        self::$requestsArray = $post;
        self::$requestsObject = (object)$post;
        return new self;
    }
    /**
     * @return self
     */
    public static function get(): self
    {
        $get = isset($_GET) ? $_GET : [];
        foreach ($get as $getKey => $getVal) {
            $get[$getKey] = htmlspecialchars(strip_tags($getVal));
        }

        self::$requestsArray = $get;
        self::$requestsObject = (object)$get;
        return new self;
    }
    /**
     * @return self
     */
    public static function multiple(): self
    {
        $post = isset($_POST) ? $_POST : [];
        $get = isset($_GET) ? $_GET : [];
        $files = isset($_FILES) ? $_FILES : [];

        $requestsArray = ['post' => $post, 'get' => $get, 'files' => $files];
        $requestsObject = (object)['post' => (object)$post, 'get' => (object)$get, 'files' => (object)$files];

        self::$requestsArray = $requestsArray;
        self::$requestsObject = $requestsObject;
        return new self;
    }
    /**
     * @return array
     */
    public function toArray(): array
    {
        return self::$requestsArray;
    }
    /**
     * @return object
     */
    public function toStdClass(): object
    {
        return self::$requestsObject;
    }
}
