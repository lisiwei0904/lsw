<x-layout>
    <link rel="stylesheet" href="{{ asset('css/adminCreate.css') }}">

    <section class="px-6 py-8 max-w-md mx-auto">
        <main class="max-w-lg mx-auto mt-10">
            <h1>New Transmission: Publish Post</h1>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="image_url" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <div class="mb-6">
                    <label for="category">category</label>
                    <select name="category_id" id="category_id">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                        @endforeach
                    </select>
                    @error('category')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <x-submit-button>Broadcast</x-submit-button>
            </form>
        </main>
    </section>
</x-layout>
