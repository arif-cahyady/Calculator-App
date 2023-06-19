<?php include 'calc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator | Arif Cahyady</title>
</head>

<body>

    <form action="" method="post">
        <div class="wrapper">
            <input type="text" value="<?= @$num ?>" name="input" class="screen">
            <section class="calc-buttons">
                <div class="calc-button-row">
                    <input type="submit" value="c" name="clear" class="calc-button double">
                    <input type="submit" name="op" value="&larr;" class="calc-button">
                    <input type="submit" name="op" value="/" class="calc-button">
                </div>

                <div class="calc-button-row">
                    <input type="submit" value="7" name="num" class="calc-button">
                    <input type="submit" value="8" name="num" class="calc-button">
                    <input type="submit" value="9" name="num" class="calc-button">
                    <input type="submit" value="*" name="op" class="calc-button">
                </div>

                <div class="calc-button-row">
                    <input type="submit" value="4" name="num" class="calc-button">
                    <input type="submit" value="5" name="num" class="calc-button">
                    <input type="submit" value="6" name="num" class="calc-button">
                    <input type="submit" value="-" name="op" class="calc-button">
                </div>

                <div class="calc-button-row">
                    <input type="submit" value="1" name="num" class="calc-button">
                    <input type="submit" value="2" name="num" class="calc-button">
                    <input type="submit" value="3" name="num" class="calc-button">
                    <input type="submit" value="+" name="op" class="calc-button">
                </div>

                <div class="calc-button-row">
                    <input type="submit" value="0" name="num" class="calc-button triple">
                    <input type="submit" value="&equals;" name="equal" class="calc-button">
                </div>

            </section>
        </div>
    </form>
</body>

</html>