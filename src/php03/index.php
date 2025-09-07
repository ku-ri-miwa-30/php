<?php
require_once('config/status_codes.php');
$random_numbers = array_rand($status_codes, 4);
//array_rand()で値ではなくキーを取り出す。
foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
}

/*新しい配列に、ランダムに取得された配列のキーを代入することでランダムな選択肢用の配列を作成できる　foaeach分を用いてシャッフルされた配列から4回新しい配列に代入する。

echo ('<pre>');
var_dump($options);
echo ('</pre>');
*/
$question = $options[mt_rand(0, 3)];

/*echo ('<pre>');
var_dump($question);
echo ('</pre>');
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/commmon.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logp" href="/">Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください </p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
                <!--まず、問題のステータスコードの説明文を表示させます。 正解の配列の中からキーが description のものを表示させましょう。 -->

                <div class="quiz-form__item">
                    <!-- 次に、選択肢となる説明文を表示させます。 表示させる説明文は、全部で 4 つです。ランダムに取得した 4 つの配列を foreach 文で回し、1 つ 1 つの説明文を表示させましょう。
                 何しているのか何もわからない-->
                    <?php foreach ($options as $option): ?>
                        <div class="quiz-form__group">
                            <input class="quiz-form__radio" id="<?php echo $option['code'] ?>"
                                type="radio" name="option" value="<?php echo $option['code'] ?>">
                            <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
                                <?php echo $option['code'] ?>
                            </label>
                        </div>
                    <?php endforeach; //ナニコレ？?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>