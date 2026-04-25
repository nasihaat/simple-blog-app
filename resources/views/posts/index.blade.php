@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Latest Posts
</h1>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
@foreach($posts as $post)
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
 @if($post->image)
    <img src="{{ asset('storage/'.$post->image) }}"
             class="w-full h-48 object-cover rounded-t-xl">
 @endif
<div class="p-4">
    <h2 class="text-xl font-semibold mb-2">
        {{ $post->title }}
    </h2>
    <p class="text-sm text-gray-500 mb-2">
        {{ $post->created_at->format('d M Y') }}
            • {{ $post->category->name }}
    </p>

    <p class="text-sm text-gray-500 mb-2">

        {{ $post->created_at->format('d M Y') }}

        • {{ $post->category->name }}

        • 👍 {{ $post->likes }}

        • 👎 {{ $post->dislikes }}

    </p>


    <p class="text-gray-700 mb-4">
        {{ Str::limit($post->content, 100) }}
    </p>
   <a href="{{ route('posts.show', $post) }}"
           class="text-blue-500 font-medium hover:underline">
            Read More →
    </a>

    </div>
</div>

@endforeach
</div>
<div class="mt-6">
    {{ $posts->links() }}
</div>

@endsection
