<html lang = "ja">
    <head>
        <meta charset = “UFT-8”>
        <title>confirm.php</title>
    </head>
    <body>
        <h1>フォームデータの確認</h1>
        <h2>この内容でよろしいですか？</h2>
          <label>氏名</label>
          {{$name}}.<br/>
          <label>名前(フリガナ)</label>
          {{$hurigana}}.<br/>
          <label>メールアドレス</label>
          {{$mail}}.<br/>
          <label>お問い合わせ内容</label>
          {{$content}}.<br/>

        <input type='button' value = '戻る' onclick='history.back()'>
        <form method="post">
          {{ csrf_field() }}
          <input type="hidden" value={{$name}} name="name">
          <input type="hidden" value={{$hurigana}} name="hurigana">
          <input type="hidden" value={{$mail}} name="mail">
          <input type="hidden" value={{$content}} name="content">
          <input type='submit' value = '確認'>
        </form>
    </body>
</html>
