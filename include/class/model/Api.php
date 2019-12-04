<?php
/**
 * Website : https://salamquran.com/
 * ApiDoc : https://salamquran.com/api/v6/doc (en) || https://salamquran.com/fa/api/v6/doc (fa)
 * appkey: 1234ec8e69c19ebb7c202ae1097aa404 // SALAM_QURAN_APPKEY
 */
class Api
{
    public function __construct()
    { 

    }
    /**
     * endpoint : https://salamquran.com/fa/api/v6/aya/day
     * needel : 
     *  - [result][simple]
     *  - [result][translate][text]
     * @return void
     */
    public function day_aye()
    {
        $url = "https://salamquran.com/fa/api/v6/aya/day";
        $content = file_get_contents($url);
        $json = json_decode($content);
        // return $json;
        $test = "2w";
        return $test;
    }
}
