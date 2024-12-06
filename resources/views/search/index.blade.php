<x-layout> 
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <h1 class="search-title">Results</h1>

    @if ($posts->isEmpty())
        <p class="no-results">No matching results found.</p>
    @else
        @foreach ($posts as $post)
            @php
                $query = request('query', '');
                $titleSimilarity = similar_text(mb_strtolower($query), mb_strtolower(substr($post->title, 0, 5)));
            @endphp

            @if ($titleSimilarity >= 3)
                <article class="search-result-item">
                    <h2>
                        <a href="/posts/{{$post->slug}}" class="post-title">
                            {!! $post->title !!}
                            @if(!empty($post->image_url))
                                <strong class="neon-text">with file</strong>
                            @endif
                        </a>
                    </h2>
                    <p class="post-meta">
                        By <a href="/authors/{{$post->author->id}}" class="author-name">{{ $post->author->name }}</a>
                        in <a href="/?categories/{{$post->category->slug}}" class="category-name">{{ $post->category->name }}</a>
                    </p>
                    <div class="post-body">
                        {!! $post->body !!}
                        <strong>{!! $post->excerpt !!}</strong>
                    </div>
                </article>
            @endif
        @endforeach
    @endif
</x-layout>
 