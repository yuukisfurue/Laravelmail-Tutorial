■お名前
{{ Arr::get($posts, 'name') }}

■メールアドレス
{{ Arr::get($posts, 'mail') }}

■ご要望
@foreach ($posts['request'] as $request)
{{$requestList[$request]}}
@endforeach

■ご希望・ご質問
{{ Arr::get($posts, 'comment', '-') }}