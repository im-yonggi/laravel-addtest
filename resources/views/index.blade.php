<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth    // ログイン中の場合
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">ダッシュボード</a>
    @else    // 未ログインの場合
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">ログイン</a>
      @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">アカウント作成</a>
      @endif
    @endif
  </div>
  @endif-->

  <!-- 追加・更新ページも作成するが、Headerは共通のため、別ファイル移動後yield→それおぞれのページでextendに変更 -->
  <header class="header">
    <h1 class="title">SalesManagement</h1>
    <div class="header--right">
      <div class="add--button"></div>
      <div class="setting--button"></div>
      <div class="logout--button"></div>
      <!-- Logoutリンクを認証機能から引っ張ってくる -->
    </div>
  </header>
  <div class="search--container">
    <form action="/find" method="post"></form>
    @csrf
    <input type="text" value="企業名または代表者名で検索" name="input" class="search--box">
  </div>
  <div class="client--list">
    <div class="lead--list">
      @if($items->property_id = 1)
        @foreach($items as $obj)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj}}</a>
        </div>
        @endforeach
      @endif
    </div>
    <div class="mail-sent--list">
      @if($items->property_id = 2)
        @foreach($items as $obj)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj}}</a>
        </div>
        @endforeach
      @endif
    </div>
    <div class="appointed-list">
      @if($items->property->getProperty = 'appointed')
        @foreach($items as $obj)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj}}</a>
        </div>
        @endforeach
      @endif
    </div>
    <div class="negotiated--list">
      @if($items->property->getProperty = 'negotiated')
        @foreach($items as $obj)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj}}</a>
        </div>
        @endforeach
      @endif
    </div>
    <div class="contracted--list">
      @if($items->property->getProperty = 'contracted')
        @foreach($items as $obj)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj}}</a>
        </div>
        @endforeach
      @endif
    </div>
  </div>



</body>

</html>