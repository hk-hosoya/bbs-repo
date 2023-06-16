<h1>新規追加画面</h1>

<form action="/MessageBoard/confirm" method="post">
    <div>
        <label for="name">お名前</label>
        <input type="text" id="name" name="name" value="{{old('name')}}"><br>
        <label for="phone">電話番号</label>
        <input type="text" id="phone" name="phone" value="{{old('phone')}}"><br>
        <label for="adress">お相手の名前</label>
        <input type="text" id="adress" name="adress" value="{{old('adress')}}"><br>
        <label for="detail">伝言する内容</label>
        <input type="text" id="detail" name="detail" value="{{old('detail')}}"><br>
        <input type="submit" value="送信">
    </div>
    @csrf
</form>
