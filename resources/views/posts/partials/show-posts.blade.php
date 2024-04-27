<section class="space-y-6">
    <img src="{{ Storage::url('public/posts/') . $post->image }}" class="rounded" style="width: 80px">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ $post->title }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {!! $post->content !!}
        </p>
    </header>
</section>
