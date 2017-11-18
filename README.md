## MVCとの比較

```
Model      <--> Domain
View       <--> Responder
Controller <--> Action
```

* Viewが表示されるコンテンツを表現するだけなのに対して、Responderはクッキーやステータスコードの責務を持つ
* Controllerは複数のアクションを持っていいが、Actionは1クラス1アクションのみ

## 触ってみて感じたメリット
* テストしやすそう
* `$router->get('/example', ExampleAction::class);`の形で書けるので、静的解析できる(補完、定義ジャンプ)

## Controllerクラスを継承する必要があるのかどうか？
[ytake/lumen-adr-example](https://github.com/ytake/lumen-adr-example)を見るとActionはControllerを継承していなかった。  
実際ソースを見ても、ミドルウェアの処理くらいしかやっていない。

* [(Lumen) Routing/Controllerのソース](https://github.com/laravel/lumen-framework/blob/5.5/src/Routing/Controller.php)
* [(Laravel) Illuminate/Routing/Controllerのソース](https://github.com/laravel/framework/blob/5.5/src/Illuminate/Routing/Controller.php)

Controllerを継承しないとミドルウェアを使えないのかの実験のために、  
試しに継承せずにroutesのほうでミドルウェアを追加してみたが、問題なく動いた。

## 参考URL
* [Action-Domain-Responder](http://pmjones.io/adr/)
* [Laravel 5.5 Responsable Interface for Responses - Laravel News](https://laravel-news.com/laravel-5-5-responsable)
* [ytake/lumen-adr-example: Implementing ADR in Lumen](https://github.com/ytake/lumen-adr-example)