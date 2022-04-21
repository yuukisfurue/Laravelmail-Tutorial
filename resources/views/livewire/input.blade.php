<form wire:submit.prevent="confirm">
@csrf
    <div>
        <div>
            <span class="text-sm font-bold text-gray-600 uppercase">お名前（必須）</span>
            <input
                wire:model="posts.name"
                class="w-full p-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                type="text" placeholder="鈴木一郎">
            @error('posts.name') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
        </div>
        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">メールアドレス（必須）</span>
            <input
                wire:model="posts.mail"
                class="w-full p-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                type="text" placeholder="mail@example.com">
            @error('posts.mail') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
        </div>
        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">ご要望（必須）</span>
            <div class="mt-2">
                @foreach ($requestList as $key => $request)
                <div>
                    <label class="inline-flex items-center">
                        <input 
                            wire:model="posts.request.{{$key}}"
                            value="{{$key}}" 
                            type="checkbox" 
                            class="form-checkbox h-5 w-5">
                        <span class="ml-2">{{$request}}</span>
                    </label>
                </div>
                @endforeach
            </div>
            @error('posts.request') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
        </div>
        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">ご希望・ご質問</span>
            <textarea
                wire:model="posts.comment"
                class="w-full h-32 p-3 mt-2 text-gray-900 bg-white rounded-lg focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="mt-8">
            <button
                class="w-full p-3 text-sm font-bold tracking-wide text-gray-100 uppercase bg-green-500 rounded-lg focus:outline-none focus:shadow-outline">
                内容確認
            </button>
        </div>
    </div>
</form>