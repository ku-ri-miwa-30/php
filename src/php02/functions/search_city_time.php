<?php
function searchCityTime($city_name)
{
    /*search_city_time.phpファイルに cities.phpファイルを読み込む*/
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            //連想配列の取得の仕方⇒配列名に対して[]を使用し、その[]の中にキーを指定する
            $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
            //DateTime の引数に、何も入れていない時は、現在時刻が作成される。引数に、 $city["time_zone"] 変数を渡すことで、指定された国の現在時刻を取得することができます。

            //任意の日時を作成するために、format メソッドを利用します。 今回は画像のように表示させたいため、フォーマットの変更が必要です。
            $time = $date_time->format('H:i');

            $city['time'] = $time;
            return $city;
        }
    }
}
