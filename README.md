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

- ### 簡単なスマホ対応
```css
@media screen and ( min-width:480px ) {

    #body {
        width: 800px;
        height: 150px;
    }

    #content {
        margin: 26px;
    }

    .entry {
        width:600px;
    }
}

/* スマホ 用 */
@media screen and ( max-width:479px ) {

    #body {
        width: 100%;
        height: 80px;
    }

    #content {
        margin: 0px;
    }

    .entry {
        width:100%;
    }

}
```
