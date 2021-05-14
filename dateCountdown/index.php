<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>What day is it</title>
</head>
<body>
<div id="calender">
        <p id="calender-day">
            <?php
                include 'date.php';
            ?>
        </p>
        <p id="calender-date">
            <?php include 'counter.php';
                echo 'you will be in ' . $nextYear; 
                
            ?>
        </p>
        <p id="calender-month-year"> 
        <?php echo ' after ' . $countDown .' day'; ?>
        </p>
    </div>
    <main>
        
    </main>

    <footer>
        <time datetime="" class="icon">
            <em>
                <?php
                    include 'footer.php';
                    echo $year;
                ?>
            </em>
            <strong><?=$dayName;?></strong>
            
            <span><?=$dayNumber;?> / <?=$month;?></span>
        </time>
        <?php
                include 'footer.php';
            ?>
    </footer>
</body>
</html>