<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php require_once('data.php') ?>
        <h2 class="m-5">PHPで用意された定数</h2>
        <p>
            <?php echo "このPHPのバージョンは".PHP_VERSION."です"?>
        </p>
        <p>
            <?php echo "このファイルの名前は".__FILE__."です"?>
        </p>
        <p>
            <?php echo "処理中の行番号は".__LINE__."です"?>
        </p>

        <table class="table table-dark">
            <?php foreach ($defNums as $defnum) : ?>
                <tr>
                    <td><?php echo $defnum->getName() ?></td>
                    <td><?php echo $defnum->getRoll() ?></td>
                </tr>
            <?php endforeach ?>
        </table>


    </div>

</body>

</html>