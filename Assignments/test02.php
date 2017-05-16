<?php
/* ************************************************************************************/
/*                                                                                    */
/*                                                                                    */
/*             This Code is writen by Rahisul Haque on 05-02-2017                     */
/*                                                                                    */
/**************************************************************************************/



function pizzaPrice($pizzaKind, $pizzaSize)
{

    $total = 0.00;

    if ($pizzaKind === "Plain")
    {
        switch ($pizzaSize)
        {
            case "Small" : $total += 3.50;
                break;
            case "Medium": $total  += 6.25;
                break;
            case "Large": $total  += 8.00;
                break;
        }
    }
    else if ($pizzaKind === "Vegetarian")
    {
        switch ($pizzaSize)
        {
            case "Small" : $total += 4.35;
                break;
            case "Medium":$total += 7.60;
                break;
            case "Large": $total += 12.00;
                break;
        }
    }
    else if ($pizzaKind === "Pepparoni")
    {
        switch ($pizzaSize)
        {
            case "Small" : $total += 7.25;
                break;
            case "Medium": $total += 10.75;
                break;
            case "Large": $total += 14.00;
                break;
        }

    }
    else if ($pizzaKind === "Hawaiiwan")
    {
        switch ($pizzaSize)
        {
            case "Small" : $total += 8.00;
                break;
            case "Medium": $total += 12.50;
                break;
            case "Large": $total += 15.50;
                break;
        }
    }
    echo "the total is $total";
    return($total);
}

pizzaPrice("Plain", "Small");

?>