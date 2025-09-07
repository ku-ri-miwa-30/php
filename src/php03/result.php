<?php
require_once('config/status_codes.php');

$answer_code = isset($_POST['answer_code']) ? htmlspecialchars($_POST['answer_code'], ENT_QUOTES) : null;
$option = isset($_POST['option']) ? htmlspecialchars($_POST['option'], ENT_QUOTES) : null;

//正誤判定
//まず、送信された解答のデータから配列を探し出します。
if (empty($option)) {
    header('Location.php');
    exit;
}
//foreach 文で多次元配列 $status_codes を一つ一つの配列に分解します。 if 文を使用し、解答コードと配列が合致した時のみ必要となるデータの取得を行います。

foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {

        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}
//最後に、結果となる変数 result を作成します。
$result = $option === $code;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>

        <div class="result__content">
            <div class="result">
                <?php if ($result): ?>
                    <h2 class="result__text--correct">正解</h2> <?php else: ?>
                    <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>

            <div class="answer-table">

                <table class="answer-table__inner">

                    <tr class="answer-table__row">

                        <th class="answer-table__header">ステータスコード</th>

                        <td class="answer-table__text">

                            <?php echo $code ?>

                        </td>

                    </tr>

                    <tr class="answer-table__row">

                        <th class="answer-table__header">説明</th>

                        <td class="answer-table__text">

                            <?php echo $description ?>

                        </td>

                    </tr>

                </table>

            </div>

        </div>

    </main>
</body>

</html>