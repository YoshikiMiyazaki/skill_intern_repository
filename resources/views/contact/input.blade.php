<html lang = “ja”>
    <head>
        <meta charset = “UTF-8”>
        <title>input.php</title>
    </head>
    <body>
        <h1>フォームデータの送信</h1>
        @if (count($errors) > 0)
        <div>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="input" method="post">
            {{ csrf_field() }}
            <label>氏名</label>
            <input type="text" name="name" value="{{old('name')}}"><br/>
            <label>名前(フリガナ)</label>
            <input type="text" name="hurigana" value="{{old('hurigana')}}"><br/>
            <label>メールアドレス</label>
            <input type="text" name="mail" value="{{old('mail')}}"><br/>
            <label>お問い合わせ内容</label>
            <input type="text" name="content" value="{{old('content')}}"><br/>
            <input type="submit" value="送信">
        </form>
    </body>
</html>
