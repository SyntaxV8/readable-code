<?php

function orderPizza($pizzatype, $costumer)
{
    echo 'Creating new order... <br>';

    $price = calculateTotalPrice($pizzatype);
    $address = 'unknown';

    if($costumer == 'koen')
    {
        $address = 'a yacht in Antwerp';
    } elseif ($costumer == 'manuele')
    {
        $address = 'somewhere in Belgium';
    } elseif ($costumer == 'students') {
        $address = 'BeCode office';
    }

    $orderMessage ='A ' . $pizzatype . ' should be sent to ' . $costumer . ". <br>The address: {$address}.";

    echo $orderMessage .'<br>';
    echo'The bill is €'.$price.'.<br>';
    echo 'Order finished.<br><br>';
}

function calculateTotalPrice($pizzaType)
{
    $individualPrice = 'unknown';

    switch ($pizzaType) {
        case "marguerita":
            return 5;
        case "golden":
            return 100;
        case "calzone":
            return 10;
        case "hawai":
            throw new \mysql_xdevapi\Exception('computer says no');
    }
    return $individualPrice;
}

function orderPizzaForEveryone()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizzaForEveryone();