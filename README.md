# subject-220601

- ### control.php にあった、入力処理を model.php に移動
```php
<?php
require_once("setting.php");
header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

// POST ( FORM からの送信 )
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    write_data();

}

// *************************************
// データの取得
// *************************************
read_data();

// *************************************
// 画面
// *************************************
if ( $_SERVER["REQUEST_METHOD"] == "GET" ) {
    require_once("view.php");
}
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    require_once("view2.php");
}
?>
```
