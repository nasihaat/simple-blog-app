@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-bold mb-6">
        Create New Post
    </h1>

    <form action="{{ route('posts.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <!-- Title -->
        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title"
                   class="w-full border p-2 rounded mt-1"
                   required>
        </div>

        <!-- Category -->
        <div>
            <label class="block text-sm font-medium">Category</label>

            <select name="category_id"
                    class="w-full border p-2 rounded mt-1"
                    required>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
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
                      required></textarea>
        </div>

        <!-- Image -->
        <div>
            <label class="block text-sm font-medium">Image</label>
            <input type="file" name="image"
                   class="w-full border p-2 rounded mt-1">
        </div>

        <!-- Button -->
        <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Create Post
        </button>

    </form>

</div>

@endsection
