<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/calendarMonth.css">
    <title>Month</title>
</head>

<body>
        <div class="month" id="month">
            <span>Lundi</span>
            <span>Mardi</span>
            <span>Mercredi</span>
            <span>Jeudi</span>
            <span>Vendredi</span>
            <span>Samedi</span>
            <span>Dimanche</span>
            <?php
            for ($i = 1; $i <= 35; $i++) {
                if ($i > 31) {
                    $j = $i - 31;
                    echo "<div>$j</div>";
                } else echo "<div>$i</div>";
            }
            ?>
        </div> 
</body>

</html>