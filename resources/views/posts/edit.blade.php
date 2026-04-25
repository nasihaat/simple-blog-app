@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-bold mb-6">
        Edit Post
    </h1>

    <form action="{{ route('posts.update', $post) }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf
        @method('PUT')

        <!-- Title -->
        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text"
                   name="title"
                   value="{{ $post->title }}"
                   class="w-full border p-2 rounded mt-1"
                   required>
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-medium">Category</label>

            <select name="category_id"
                    class="w-full border p-2 rounded mt-1">

                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $post->category_id == $category->id ? 'selected' : '' }}>

                        {{ $category->name }}

                    </option>
                @endforeach

            </select>
        </div>

        <!-- Content -->
        <div>
            <label class="block text-sm font-medium">Content</label>
            <textarea name="content"
                      rows="5"
                      class="w-full border p-2 rounded mt-1"
                      required>{{ $post->content }}</textarea>
        </div>

        <!-- Current Image -->
        @if($post->image)
        <div>
            <p class="text-sm mb-2">Current Image:</p>
            <img src="{{ asset('storage/'.$post->image) }}"
                 class="w-40 rounded">
        </div>
        @endif

        <!-- New Image -->
        <div>
            <label class="block text-sm font-medium">Change Image</label>
            <input type="file" name="image"
                   class="w-full border p-2 rounded mt-1">
        </div>

        <!-- Buttons -->
        <div class="flex gap-3">

            <button class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600">
                Update Post
            </button>

            <a href="{{ route('posts.index') }}"
               class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">
                Cancel
            </a>

        </div>

    </form>

</div>

@endsection
