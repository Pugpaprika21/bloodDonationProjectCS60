<?php

namespace MyApp\Library\LineNotify;

class LineNotify
{
    private string $lineApi = "https://notify-api.line.me/api/notify";
    private string $token = "43gJ1zDg3hfBMaGXFqPTbRnJytEbVmlGN2vcNsaVHip"; //ใส่Token ที่copy เอาไว้
    
    private $headerOptions = [];
    /**
     * @param string $message
     * @return object
     */
    public function setMessage(string $message): object
    {
        $queryData = array('message' => $message);
        $queryData = http_build_query($queryData, '', '&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                    . "Authorization: Bearer " . $this->token . "\r\n"
                    . "Content-Length: " . strlen($queryData) . "\r\n",
                'content' => $queryData
            ),
        );
        
        $this->headerOptions = $headerOptions;
        return $this;
    }
    /**
     * @return object
     */
    public function sendNotify(): object
    {
        $context = stream_context_create($this->headerOptions);
        $result = file_get_contents($this->lineApi, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }
}

?>