<?php echo "hello php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP掲示板</title>
  <link rel="stylesheet" href="./public/style.css">
</head>

<body>
  <h1 class="title">PHPで掲示板アプリ</h1>
  <hr>
  <div class="boardWrapper">
    <section>
      <article>
        <div class="wrapper">
          <div class="nameArea">
            <span>名前</span>
            <p class="username">atsushi</p>
            <time>2020/10/10</time>
          </div>
          <p class="comment">手書きコメント</p>
        </div>
      </article>
    </section>
    <div>
      <input type="submit" value="書き込む">
      <label for="">名前</label>
      <input type="text" name="username">
    </div>
    <div>
      <textarea name="content" class="commentTextArea" cols="30" rows="10"></textarea>



    </div>
  </div>
</body>

</html>
