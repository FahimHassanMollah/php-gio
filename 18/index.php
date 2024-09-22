<?php

declare(strict_types=1);

$paymentStatuses = [
    'pending' , 'paid', 'failed', 'canceled'
];


foreach ($paymentStatuses as $paymentStatus) {
    switch ($paymentStatus) {
        case 'pending':
            echo 'Your payment is pending ';
            echo "<br>";
            continue 1;
        case 'paid':
            echo 'Your payment is successful';
            echo "<br>";

            break;
        case 'failed':
            echo 'Your payment has failed';
            echo "<br>";

            break;
        case 'canceled':
            echo 'Your payment has been canceled';
            echo "<br>";

            break;
        default:
            echo 'Invalid payment status';
            echo "<br>";

            break;
    }
    echo "switch end ";
    echo "<br>";
}