<!-- update.blade.phpとボタン・Value値の設定以外共通のため、集約を実施 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @component('default.header')
  @endcomponent
  <div class="client--information">
    <form action="/add" method="post">
      <table>
      @csrf
        <tr>
          <th>会社名</th>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <th>代表者名</th>
          <td><input type="text" name="representative"></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tel"></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <th>セールスステータス</th>
          <td>
            <select name="property_id">
              <option value="1">リード顧客</option>
              <option value="2">メール送信済</option>
              <option value="3">日程調整済</option>
              <option value="4">商談済</option>
              <option value="5">契約済</option>
            </select>
          </td>
        </tr>
      </table>
      <input type="submit" value="追加">
      <!-- <button>の方がいい？ -->
    </form>
  </div>
</body>
</html>