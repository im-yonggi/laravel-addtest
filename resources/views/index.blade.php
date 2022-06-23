<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
.search--container{
  width:70%;
  margin:10px auto 10px auto;
  background-color:white;
  height:36px;
}

.search--container form{
  display:flex;
  height:100%;
}

.search--box{
  width:90%;
  height:100%;
  font-size:24px;
  color:#d2d2d2;
  background-color:white;
}

.search--button{
  height:120%;
  width:5%;
  cursor: pointer;
}

.search--button img{
  width:100%;
  height:100%;
}

.client--list{
  display:flex;
  justify-content: space-around;
  margin-top:24px;
}

.each--list{
  border:1px solid #d2d2d2;
  width:15%;
}

.each--title{
  text-align: center;
  border-bottom:1px solid #d2d2d2;
}

.each--client{
  margin:8px 4px 8px 4px;
  background-color:white;
  height:60px;
}

.client--link{
  text-decoration:none;
  background-color:inherit;
  color:black;
  margin-left:12px;
  line-height:2.5;
  font-size:24px;
}

</style>

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

  @component('default.header')
  @endcomponent
  <div class="search--container">
    <form action="/find" method="post">
    @csrf
      <button class="search--button"><img src="/images/search.png" alt="search-icon"></button>
      <input type="text" value="企業名または代表者名で検索" name="input" class="search--box">
    </form>
  </div>
  <div class="client--list">
    <div class="each--list">
      <h2 class="each--title">リード顧客</h2>
      @foreach($items as $obj)  
        @if($obj->property_id == 1)
          <div class="each--client">
            <a href="/edit/{{$obj->id}}" class="client--link">{{$obj->name}}</a>
          </div>
        @endif
      @endforeach
    </div>
    <div class="each--list">
      <h2 class="each--title">メール送信済</h2>
      @foreach($items as $obj)
        @if($obj->property_id == 2)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj->name}}</a>
        </div>
        @endif
      @endforeach
    </div>
    <div class="each--list">
      <h2 class="each--title">日程調整済</h2>
      @foreach($items as $obj)
        @if($obj->property_id == 3)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj->name}}</a>
        </div>
        @endif
      @endforeach
    </div>
    <div class="each--list">
      <h2 class="each--title">商談済</h2>
      @foreach($items as $obj)
        @if($obj->property_id == 4)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj->name}}</a>
        </div>
        @endif
      @endforeach
    </div>
    <div class="each--list">
      <h2 class="each--title">契約済</h2>
      @foreach($items as $obj)
        @if($obj->property_id == 5)
        <div class="each--client">
          <a href="/edit/{{$obj->id}}" class="client--link">{{$obj->name}}</a>
        </div>
        @endif
      @endforeach
    </div>
  </div>



</body>

</html>