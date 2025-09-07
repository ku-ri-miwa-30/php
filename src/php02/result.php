<?php
/*result.phpファイルに search_city_time.phpファイルを読み込む記述をします。*/
require_once('functions/search_city_time.php');
/*searchCityTime 関数を result.phpファイルで呼び出し */
$tokyo = searchCityTime('東京');

//result.phpファイルで送られたデータを取得するために以下のように記述します。index.phpファイルの method タグが GET であるため取得する際も $_GET を使用します。
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
//前回のセクションで使用した関数 searchCityTime を利用して送信された内容から表示する国を特定
$comparison = searchCityTime($city);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World clock</title>
</head>
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
            </a>
            <div>
    </header>
    <div class="result__content">
        <div class="result-cards">
            <div class="result_card">
                <div class="result-card__img-wrapper">
                    <img class="result-card__img" src="img/<?php echo $tokyo['img'] ?>" alt="国旗">
                </div>
                <div class="result-card__body">
                    <p class="result-card__city">
                        <?php echo $tokyo['name'] ?>
                    </p>
                    <p class="result-card__time">
                        <?php echo $tokyo['time'] ?>
                    </p>
                </div>
            </div>
            <div class="result-card">
                <div class="result-card__img-wrapper">
                    <img class="result-card__img" src="img/<?php echo $comparison['img'] ?>" alt="国旗">
                </div>
                <div class="result-card__body">
                    <p class="result-card__city">
                        <?php echo $comparison['name'] ?>
                    </p>
                    <p class="result-card__time">
                        <?php echo $comparison['time'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>

</html>