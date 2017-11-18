## MVCとの比較

```
Model      <--> Domain
View       <--> Responder
Controller <--> Action
```

* Viewが表示されるコンテンツを表現するだけなのに対して、Responderはクッキーやステータスコードの責務を持つ
* Controllerは複数のアクションを持っていいが、Actionは1クラス1アクションのみ

## 参考URL
* [Action-Domain-Responder](http://pmjones.io/adr/)
* [Laravel 5.5 Responsable Interface for Responses - Laravel News](https://laravel-news.com/laravel-5-5-responsable)
* [ytake/lumen-adr-example: Implementing ADR in Lumen](https://github.com/ytake/lumen-adr-example)