
<header class="header">
  <h1 class="title">SalesManagement</h1>
  <div class="header--right">
    <div class="add--button"><a href="/add"><img src="/images/plus.png"></a></div>
    <div class="setting--button"><img src="/images/setting.png"></div>
    <div class="logout--button"><a href="/logout">ログアウト</a></div>
    <!-- Logoutリンクを認証機能から引っ張ってくる -->
  </div>
</header>

<style>
*{
  background-color:#ffe1e1
}

.header, .header--right{
  display:flex;
  justify-content: space-between;
  align-items: center;
}

.add--button, .setting--button{
  width:48px;
  height:48px;
  margin-right:24px
}

img{
  width: 100%;
  height:100%;
}
</style>