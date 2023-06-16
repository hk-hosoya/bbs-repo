<form action="/MessageBoard/edit/{{$message->id}}" method="post">
    <div>
        <label for="name">お名前</label>
        <input type="text" name="name" id="name"
        value="{{old('name',$message->name)}}">
        @if ($errors->has('name'))
            <p class="error">*{{$errors->first('name')}}</p>
        @endif
    </div>
    <div>
        <label for="name">電話番号</label>
        <input type="text" name="phone" id="phone"
        value="{{old('phone',$message->phone)}}">
        @if ($errors->has('phone'))
            <p class="error">*{{$errors->first('phone')}}</p>
        @endif
    </div>
    <div>
        <label for="adress">宛先</label>
        <input type="text" name="adress" id="adress"
        value="{{old('adress',$message->adress)}}">
        @if ($errors->has('adress'))
            <p class="error">*{{$errors->first('adress')}}</p>
        @endif
    </div>
    <div>
        <label for="detail">伝言内容</label>
        <input type="text" name="detail" id="detail"
        value="{{old('detail',$message->detail)}}">
        @if ($errors->has('detail'))
            <p class="error">*{{$errors->first('detail')}}</p>
        @endif
    </div>
    <div>
        <input type="submit" value="送信">
    </div>
    @csrf
</form>
