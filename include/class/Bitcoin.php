<?php

class Bitcoin
{
    private $json;
    function __construct()
    {
        $this->config();
    }
    private function config()
    {
        $api_content = file_get_contents("https://blockchain.info/ticker");
        $this->json = json_decode($api_content, true);
        return $this->json;
    }
    public function get_json()
    {
        return $this->json;
    }
    public function cost_USD()
    {
        $json = $this->json;
        $dolar_json = $json["USD"];
//        $cost = $dolar_json["last"];
//        $symbol = $dolar_json["symbol"];
        return $dolar_json;
    }
    public function cost_EUR()
    {
        $json = $this->json;
        $dolar_json = $json["EUR"];
//        $cost = $dolar_json["last"];
//        $symbol = $dolar_json["symbol"];
        return $dolar_json;
    }
    public function cost_IRR()
    {
//        https://v3.exchangerate-api.com/pair/4c433c13731dae0c4010c524/USD/IRR
        $IRR_content = file_get_contents("http://txe.ir/ajaxAll");
        $IRR_json = json_decode($IRR_content,TRUE);
        $USD_to_IRR = $IRR_json[0][1][0]["coworker_sales_price"];
        $BTC_to_IRR = ($this->cost_USD()["last"] * $USD_to_IRR);
        $IRR =
        [
            "last" => $BTC_to_IRR,
            "symbol" => "ریال"
        ];
        return $IRR;
    }

}