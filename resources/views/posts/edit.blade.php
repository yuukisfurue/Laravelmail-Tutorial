<x-layout>
    <x-slot name="title">
    修正フォーム
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.show', $post) }}">Back</a>
    </div>

    <h1>修正フォーム</h1>

    <form method="post" action="{{ route('posts.update', $post) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>
              氏名
                <input type="string" name="name" value="{{ old('name') }}">
            </label>
      </div>
        <div class="form-group">
        <tr><th>性別</th><td>
        <select type="text" class="form-control" name="gender">                 
        @foreach(config('gender') as $key => $score)
        <option value="{{ $score }}">{{ $score }}</option>
        @endforeach
        </select>         </div>
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
        <button type="Update" class="btn btn-primary">update</button>
         </div>
    </form>
</x-layout>