<?php

namespace MyApp\Http\Api;

use CurlHandle;

final class Apis
{
    private $resultSet = null;
    private $optionSet = null;
    private $setHeader = null;
    /**
     * link Test Api -> https://jsonplaceholder.typicode.com/photos
     *
     * @param array $option -> url -> request method POST GET PUT DELETE PATH
     * @return object
     */
    public function setOption(array $option): object
    {
        $optionMethod = ['url' => $option['url'], 'method' => $option['method']];

        foreach ($option as $option_key => $option_val) {
            if ($option[$option_key] == $optionMethod[$option_key]) {
                $option[$option_key] = htmlspecialchars($option_val);
                $resultSets = true;
            }
        }

        $this->resultSet = $resultSets;
        $this->optionSet = $option;
        return $this;
    }
    /**
     * @return object
     */
    public function setHeader(): object
    {
        $curl = curl_init();
        $crulStart = ($curl) ? $curl : (object)[
            'status' => 500,
            'execute' => false,
            'message_error' => $curl 
        ];

        $this->setHeader = $crulStart;
        return $this;
    }
    /**
     * @return object
     */
    public function setBody(): object
    {
        $excRes = curl_setopt_array($this->setHeader, [
            CURLOPT_URL => $this->optionSet['url'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->optionSet['method']
        ]);

        return ($excRes) ? $this : (object)[
            'status' => 500,
            'execute' => false,
            'message_error' => $excRes 
        ];
    }
    /**
     * @return array
     */
    public function displayResponse(): array
    {
        $setExc = curl_exec($this->setHeader);
        $resultExc = ($setExc) ? $setExc : (object)[
            'status' => 500,
            'execute' => false,
            'message_error' => $setExc 
        ];

        $this->stopApi($this->setHeader);
        return json_decode($resultExc);
    }
    /**
     * @return void
     */
    public function postMethod(): void
    {
        $this->stopApi($this->setHeader);
    }
    /**
     * @return void
     */
    public function getMethod(): void
    {
        $this->stopApi($this->setHeader);
    }
    /**
     * @param CurlHandle $curl
     * @return void
     */
    public function stopApi(CurlHandle $curl): void
    {
        curl_close($curl);
    }
}