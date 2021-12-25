<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laraveltest</title>
</head>

<body>
  <form action="/thanks" method="post">
  @csrf
    氏名<br>
    <input type="text" name="name"><br>
    メールアドレス<br>
    <input type="mail" name="mail"><br>
    <input type="submit">
  </form>
</body>

</html>