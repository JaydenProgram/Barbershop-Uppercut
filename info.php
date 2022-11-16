<?php
$reservations = [
    [
        'firstname' => 'Juice',
        'lastname' => 'World',
        'time' => '10:45',
        'mail' => 'juiceysinger@gmail.com',
        'number' => '0630583920'
    ],

    [
        'firstname' => 'IShow',
        'lastname' => 'Speed',
        'time' => '09:00',
        'mail' => 'ishowfootball@gmail.com',
        'number' => '0620394011'
    ],

    [
        'firstname' => 'Christiano',
        'lastname' => 'Ronaldo',
        'time' => '12:00',
        'mail' => 'bestfootballplayer@gmail.com',
        'number' => '0633069845'
    ],

    [
        'firstname' => 'Leonel',
        'lastname' => 'Messi',
        'time' => '16:30',
        'mail' => 'worstfootballplayer@gmail.com',
        'number' => '0640581039'
    ]
]
?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveringssysteem</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>All reservations</h1>
<hr/>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Time</th>
        <th>Mail</th>
        <th>Number</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; The reservations</td>
    </tr>
    </tfoot>
<tbody>
<?php foreach($reservations as $index => $reservation){ ?>
    <tr>
        <td><?= $index + 1?></td>
        <td><?= $reservation['firstname']?></td>
        <td><?= $reservation['lastname']?></td>
        <td><?= $reservation['time']?></td>
        <td><?= $reservation['mail']?></td>
        <td><?= $reservation['number']?></td>
    </tr>
<?php } ?>
</tbody>
</body>
</html>


