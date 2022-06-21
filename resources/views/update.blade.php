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
    <form action="/update" method="post">
      <table>
      @csrf
        <tr>
          <th>会社名</th>
          <td><input type="text" name="name" value="{{$item->name}}"></td>
        </tr>
        <tr>
          <th>代表者名</th>
          <td><input type="text" name="representative" value="{{$item->represenative}}"></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><input type="text" name="tel" value="{{$item->tel}}"></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><input type="email" name="email" value="{{$item->email}}"></td>
        </tr>
        <tr>
          <th>セールスステータス</th>
          <td>
            <select name="property" value="{{$item->property->getProperty">
              <option value="リード顧客">リード顧客</option>
              <option value="メール送信済">メール送信済</option>
              <option value="日程調整済">日程調整済</option>
              <option value="商談済">商談済</option>
              <option value="契約済">契約済</option>
            </select>
          </td>
        </tr>
      </table>
      <input type="submit" value="更新">
      <!-- <button>の方がいい？ -->
    </form>
  </div>
</body>
</html>