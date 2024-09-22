<?php

declare(strict_types=1);


$paymentStatus = match ('pending') {
    'pending' => 'Your payment is pending ',
    'paid' => 'Your payment is successful',
    'failed' => 'Your payment has failed',
    'canceled' => 'Your payment has been canceled',
     default => 'Invalid payment status'
};

echo $paymentStatus;
