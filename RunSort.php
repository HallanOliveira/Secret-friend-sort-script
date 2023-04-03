<?php

include 'SecretFriendSortService.php';

use dir\SortSecretFriend;

$service = new SortSecretFriend([
    1  => 'Maykel',
    2  => 'Tania',
    3  => 'Hallan',
    4  => 'Rany',
    5  => 'Carol',
    6  => 'Nivaldo',
    7  => 'Cida',
    8  => 'Halana',
    9  => 'Vini',
    10 => 'Roger'
]);
$message = $service->sort() . "\n";

var_dump(
    mail(
        'hallan_douglas@hotmail.com',
        'Sorteio de amigo secreto',
        $message,
        [
            'From'     => 'sorteioamigosecreto@gmail.com',
            'Reply-To' => 'sorteioamigosecreto@gmail.com',
            'X-Mailer' => 'PHP/' . phpversion()
        ]
    )
);