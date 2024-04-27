<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Form update post') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data"
        class="mt-6 space-y-6">
        @csrf
        @method('PUT')

        <div>
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image')" required
                autofocus autocomplete="image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $post->title)"
                required autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>


        <div>
            <x-input-label for="content" :value="__('Content')" />
            <textarea class="mt-1 block w-full" name="content" rows="10" placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update Post') }}</x-primary-button>

            @if (session('status') === 'posts-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Posted!.') }}</p>
            @endif
        </div>
    </form>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
