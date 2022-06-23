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
          <td><input type="text" name="representative" value="{{$item->representative}}"></td>
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
            <select name="property_id" value="{{$item->property_id}}">
              @if($item->property_id == 1)
              <option value="1" selected>リード顧客</option>
              <option value="2">メール送信済</option>
              <option value="3">日程調整済</option>
              <option value="4">商談済</option>
              <option value="5">契約済</option>
              @endif
              @if($item->property_id == 2)
              <option value="1">リード顧客</option>
              <option value="2" selected>メール送信済</option>
              <option value="3">日程調整済</option>
              <option value="4">商談済</option>
              <option value="5">契約済</option>
              @endif
              @if($item->property_id == 3)
              <option value="1">リード顧客</option>
              <option value="2">メール送信済</option>
              <option value="3" selected>日程調整済</option>
              <option value="4">商談済</option>
              <option value="5">契約済</option>
              @endif
              @if($item->property_id == 4)
              <option value="1">リード顧客</option>
              <option value="2">メール送信済</option>
              <option value="3">日程調整済</option>
              <option value="4" selected>商談済</option>
              <option value="5">契約済</option>
              @endif
              @if($item->property_id == 5)
              <option value="1">リード顧客</option>
              <option value="2">メール送信済</option>
              <option value="3">日程調整済</option>
              <option value="4">商談済</option>
              <option value="5" selected>契約済</option>
              @endif
            </select>
          </td>
        </tr>
        <input type="hidden" name="id" value="{{$item->id}}">
      </table>
      <input type="submit" value="更新">
      <!-- <button>の方がいい？ -->
    </form>
  </div>
</body>
</html>