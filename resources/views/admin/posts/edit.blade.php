<x-layout>
      <link rel="stylesheet" href="{{ asset('css/adminedit.css') }}">
    <section class="px-6 py-8 max-w-md mx-auto">
        <main class="max-w-lg mx-auto mt-10">
            <h1>Editing Transmission: {{ $post->title }}</h1>
            <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <x-form.input name="title" :value="old('title', $post->title)" />
                <x-form.input name="slug" :value="old('slug', $post->slug)" />

                <div>
                    <x-form.input name="image_url" type="file" :value="old('image_url', $post->image_url)" />
                    @if($post->image_url)
                    <a href="{{ url('/storage/' . $post->image_url) }}">
                        <img src="{{ url('/storage/' . $post->image_url) }}" alt="Post Image">
                    </a>
                    @endif
                </div>

                <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

                <div class="mb-6">
                    <label for="category">Select Category</label>
                    <select name="category_id" id="category_id">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                        @endforeach
                    </select>
                    @error('category')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <x-submit-button>Publish Transmission</x-submit-button>
            </form>
        </main>
    </section>
</x-layout>
