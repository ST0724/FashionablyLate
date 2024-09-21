<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>


<body>
  <div class="thanks">
    <div class="thanks__background">
      <!-- 背景Thank you -->
      Thank you
    </div>
   
    <div class="thanks__content">
      <!-- ありがとうございました -->
      <h2 class="thanks__title">お問い合わせありがとうございました</h2>
      <!-- HOMEボタン -->
      <form class="thanks__button" action="/" method="post">
        @csrf
        <button class="thanks__button__submit">HOME</button>
      </form>
    </div>

  </div>
    

</body>