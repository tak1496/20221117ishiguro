<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>top page</title>
  <style>
    .title {
      font-size:16px;
      font-weight:bold;
    }
    .error {
      color:red;
    }
  </style>
</head>
<body>
  <form action="/" method="post">
    @csrf
    <div>
      <div class="title">
        氏名
        @if($errors->has('name'))
        <span class="error">{{$errors->first('name')}}</span>
        @endif
      </div>
      <input type="text" name="name">
    </div>

    <div>
      <div class="title">
        メールアドレス
        @if($errors->has('email'))
        <span class="error">{{$errors->first('email')}}</span>
        @endif
      </div>
      <input type="mail" name="email">
    </div>

    <input type="submit" value="送信する">
  </form>
</body>
</html>