<?php
    $money_value = $_POST["money_valuse"];
?>

<div id="SWA_BTC">
    <div class="wrap row" style="margin-top: 0 !important;">
        <a href="sahandwebafzar.ir" class="top"><i class="fa fa-snowflake-o" aria-hidden="true"></i>&nbsp;<?php _e("Sahand Web Afzar",'swa-bitcoin'); ?></a>
        <a href="https://javad.in" class="top"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;<?php _e("Mohammad Javad Qasemi",'swa-bitcoin'); ?></a>
    </div>

        <h1 class="logo row"><?php _e("SWA BitCoin",'swa-bitcoin') ?></h1>
        <div class="price row">
            <h2><?php _e("BitCoin Price",'swa-bitcoin') ?>&nbsp;<i class="fa fa-btc" aria-hidden="true"></i>&nbsp;:</h2>
            <p id="USD_price"><?php echo $BTC->cost_USD()["last"]?>&nbsp;<i class="fa fa-usd" aria-hidden="true"></i></p>
            <p id="EUR_price"><?php echo $BTC->cost_EUR()["last"]?>&nbsp;<i class="fa fa-eur" aria-hidden="true"></i></p>
            <p id="IRR_price"><?php echo $BTC->cost_IRR()["last"]?>&nbsp;<i><?php _e("Rials",'swa-bitcoin'); ?></i></p>
        </div>
<div class="use row">
            <h2><?php _e("How to use",'swa-bitcoin') ?>&nbsp;<i class="fa fa-btc" aria-hidden="true"></i>&nbsp;:</h2>
            <h3><i class="fa fa-check-square-o" aria-hidden="true"></i><?php _e("Show BitCoin price", 'swa-bitcoin'); ?></h3>
            <ul>
                <li><p><code>[swa_bitcoin_USD]</code>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $BTC->cost_USD()["last"]?>&nbsp;<i class="fa fa-usd" aria-hidden="true"></i></p></li>
                <li><p><code>[swa_bitcoin_IRR]</code>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $BTC->cost_IRR()["last"]?>&nbsp;<i><?php _e("Toman",'swa-bitcoin'); ?></i></p></li>
           	<li><p><code>[swa_bitcoin_EUR]</code>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $BTC->cost_EUR()["last"]?>&nbsp;<i class="fa fa-eur" aria-hidden="true"></i></p></li>
            </ul>
        </div>
    <div class="calculate row">
        <h2><?php _e("BitCoin Calculate :",'swa-bitcoin') ?></h2>
        <form id="SWA_BTC_Calculate" method="post">
            <div class="calculate_input">
                <label> <?php _e("i want to change :",'swa-bitcoin'); ?></label><input name="money_value" placeholder="<?php _e('like : 0.5','swa-bitcoin'); ?>" type="number" step="0.000001" required>&nbsp;
            </div>
            <div class="calculate_radio">
                <input id="FBTC" name="Ftype" type="radio" value="FBTC" checked><label for="FBTC" class="radio"><i class="fa fa-btc" aria-hidden="true"></i></label>
                <input id="FUSD" name="Ftype" type="radio" value="FUSD"><label for="FUSD" class="radio"><i class="fa fa-usd" aria-hidden="true"></i></label>
                <input id="FEUR" name="Ftype" type="radio" value="FEUR"><label for="FEUR" class="radio"><i class="fa fa-eur" aria-hidden="true"></i></label>
                <input id="FIRR" name="Ftype" type="radio" value="FIRR"><label for="FIRR" class="radio"><i><?php _e("Rials",'swa-bitcoin') ?></i></label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><strong> <?php _e("To  : ",'swa-bitcoin'); ?> </strong></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="calculate_radio">
                <input id="TBTC" name="Ttype" type="radio" value="TBTC"><label for="TBTC" class="radio"><i class="fa fa-btc" aria-hidden="true"></i></label>
                <input id="TUSD" name="Ttype" type="radio" value="TUSD" checked><label for="TUSD" class="radio"><i class="fa fa-usd" aria-hidden="true"></i></label>
                <input id="TEUR" name="Ttype" type="radio" value="TEUR"><label for="TEUR" class="radio"><i class="fa fa-eur" aria-hidden="true"></i></label>
                <input id="TIRR" name="Ttype" type="radio" value="TIRR"><label for="TIRR" class="radio"><i><?php _e("Rials",'swa-bitcoin'); ?></i></label>
            </div>`
            <br><input  type="submit" value="<?php _e('Calculate','swa-bitcoin'); ?>">
        </form>
        <br>
        <div id="SWA_CR" class="row" style="margin-top: 25px;text-align: center;direction: ltr;">
            <strong style="padding-left: 14%">
            </strong>
        </div>
    </div>
    <?php 
        $sorrym = __("Sorry, we just can calculate from BitCoin or to BitCoin",'swa-bitcoin') ;
        $prices = [
            "USD" => $BTC->cost_USD()["last"],
            "EUR" => $BTC->cost_EUR()["last"],
            "IRR" => $BTC->cost_IRR()["last"],
            "Sorry" => $sorrym
        ];
    ?>
    <script type="text/javascript">
        var Price = <?php echo json_encode($prices); ?>;
        // var BTC_price = Price["USD"];
        // document.getElementById("SWA_CR").innerHTML = Price["USD"] ;
    </script>
    <script>
        
        document.getElementById("SWA_BTC_Calculate").addEventListener("submit", function(e){
            e.preventDefault();
            SWA_BTC_Calculate();
        });
    </script>

</div>