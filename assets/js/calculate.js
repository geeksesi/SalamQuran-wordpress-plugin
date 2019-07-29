function SWA_BTC_Calculate()
{
    var num_value = document.forms["SWA_BTC_Calculate"]["money_value"].value;
    var from_value = document.forms["SWA_BTC_Calculate"]["Ftype"].value;
    var to_value = document.forms["SWA_BTC_Calculate"]["Ttype"].value;
    var BTC_USD = Price["USD"];
    var BTC_EUR = Price["EUR"];
    var BTC_IRR = Price["IRR"];
    var Sorry = Price["Sorry"];
    var t_export;

    switch(from_value)
    {
        case "FBTC" :
            switch(to_value)
            {
                case "TBTC" :
                        t_export = num_value + "BTC";
                    break;
                case "TUSD" :
                    t_export = num_value * BTC_USD + " " + "USD";
                    break;
                case "TEUR" :
                    t_export = num_value * BTC_EUR + " " + "EUR";
                    break;
                case "TIRR" :
                    t_export = num_value * BTC_IRR + " " + "Rials";
                    break;
            }
            break;
        case "FUSD" :
            switch(to_value)
            {
                case "TBTC" :
                    t_export = num_value * BTC_USD + " " + "BTC";
                    break;
                case "TUSD" :
                    t_export = Sorry;
                    break;
                case "TEUR" :
                    t_export = Sorry;
                    break;
                case "TIRR" :
                    t_export = Sorry;
                    break;
            }
            break;
        case "FEUR" :
            switch(to_value)
            {
                case "TBTC" :
                    t_export = num_value * BTC_EUR + " " + "BTC";
                    break;
                case "TUSD" :
                    t_export = Sorry;
                    break;
                case "TEUR" :
                    t_export = Sorry;
                    break;
                case "TIRR" :
                    t_export = Sorry;
                    break;
            }
            break;
        case "FIRR" :
            switch(to_value)
            {
                case "TBTC" :
                    t_export = num_value * BTC_IRR + " " + "BTC";
                    break;
                case "TUSD" :
                    t_export = Sorry;
                    break;
                case "TEUR" :
                    t_export = Sorry;
                    break;
                case "TIRR" :
                    t_export = Sorry;
                    break;
            }
            break;
    }
    document.getElementById("SWA_CR").innerHTML = "<strong>"+t_export+"</strong>" ;
}