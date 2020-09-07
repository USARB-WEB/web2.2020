<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?
    $days = 15;
    $dates = ["03.09", "03.09", "07.09", "08.09", "09.09", "10.09"];

    $group = [
        [
            "name" => "Mihai Eminescu",
            "age" => 123,
            "marks" => [
                "03.09" => 10,
                "07.09" => 7,
                "08.09" => 5
            ]
        ],
        [
            "name" => "Ion Eminescu",
            "age" => 222,
            "marks" => [
                "07.09" => 5
            ]
        ],
        [
            "name" => "Mihai Creanga",
            "age" => 333,
            "marks" => [
                "10.09" => 5
            ]
        ]
    ];

    ?>
    <table border="1" cellpadding="0" cellspacing="0">
        <thead>
           <tr>
               <th>Nr.ord</th>
               <th>Nume, Prenume</th>
               <? for ($d = 1; $d <= $days; $d++){?>
                   <th width="24"><?=$d;?></th>
               <? }?>
               <th>Media</th>
           </tr>
           <tr>
               <th colspan="2">Data</th>
               <? for ($d = 1; $d <= $days; $d++){?>
                   <th width="24"><?=$dates[$d - 1];?></th>
               <? }?>
               <th></th>
           </tr>
        </thead>
        <tbody>
            <? foreach($group as $key => $student) {?>
            <tr>
                <th><?=$key + 1;?></th>
                <th><?=$student['name'];?></th>

                <? for ($d = 1; $d <= $days; $d++){?>
                    <td> <?=$student['marks'][$dates[$d - 1]];?> </td>
                <? }?>
                <td>-</td>
            </tr>
            <? }?>
        </tbody>
    </table>
</body>
</html>