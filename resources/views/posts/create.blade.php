<x-layout>
    <x-slot name="title">
    登録フォーム
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">戻る</a>
    </div>

    <h1>登録フォーム</h1>
     <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <div class="form-group">
            <label>
              氏名
                <input type="string" name="name" value="{{ old('name') }}">
            </label>
        </div>
        <div class="form-group row">
        <label>
        性別
         <p class="col-sm-4 col-form-label"></p>
                <div class="col-sm-8">
                    <label>{{ Form::radio('gender', "未選択") }}未選択</label>
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
                </div>
            </div>
        </label>
        <div class="form-group">
        <tr><th>出身地</th><td>
        <select type="text" class="form-control" name="prefecture">                 
        @foreach(config('prefecture') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
         </select>
       </div>
        <div class="form-group">
        <tr><th>所属形態</th><td>
        <select type="text" class="form-control" name="company">                 
        @foreach(config('company') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
         </select>
        </div>
        <div class="form-group">
        <tr><th>所属部署</th><td>
        <select type="text" class="form-control" name="jyob">                 
        @foreach(config('jyob') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
        </select>
         </div>
        <tr><th>役職</th><td>
        <select type="text" class="form-control" name="employmentstatus">                          
        @foreach(config('employmentstatus') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
       </select>
       </div>
        <div class="form-button">
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
</x-layout>