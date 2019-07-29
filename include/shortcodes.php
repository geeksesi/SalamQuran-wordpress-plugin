<?php

add_shortcode('swa_bitcoin_USD', 'swa_bitcoin_USD');
add_shortcode('swa_bitcoin_EUR', 'swa_bitcoin_EUR');
add_shortcode('swa_bitcoin_IRR', 'swa_bitcoin_IRR');

function swa_bitcoin_USD()
{
    global $BTC;
    return $BTC->cost_USD()["last"].$BTC->cost_USD()["symbol"];
}

function swa_bitcoin_EUR()
{
    global $BTC;
    return $BTC->cost_EUR()["last"].$BTC->cost_EUR()["symbol"];
}

function swa_bitcoin_IRR()
{
    global $BTC;
    return $BTC->cost_IRR()["last"].$BTC->cost_IRR()["symbol"];
}

