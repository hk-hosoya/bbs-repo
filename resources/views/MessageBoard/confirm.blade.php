<p>伝言の確認画面</p>
<ul>
    <li>
        お名前：
        <p>{{$request->name}}</p>
    </li>
    <li>
        電話番号：
        <p>{{$request->phone}}</p>
    </li>
    <li>
        お相手の名前：
        <p>{{$request->adress}}</p>
    </li>
    <li>
        伝言する内容：
        <p>{{$request->detail}}</p>
    </li>

    <form action="" method="post">
        <input type="hidden" name="name" value="{{$request->name}}">
        <input type="hidden" name="phone" value="{{$request->phone}}">
        <input type="hidden" name="adress" value="{{$request->adress}}">
        <input type="hidden" name="detail" value="{{$request->detail}}">
        <div>
            <button class="btn btn-primary" type="submit" name="back">戻る</button>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="send">送信</button>
        </div>
        @csrf
    </form>
</ul>
