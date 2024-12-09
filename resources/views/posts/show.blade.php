<x-layout>
 <link rel="stylesheet" href="{{ asset('css/postShow.css') }}">

  <article>
   <h1>
      <a href="/posts/{{$post->slug}}">
         {!! $post->title !!} 
      </a>
   </h1>
   <p>
      By <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a>
      in <a href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a>
   </p>
   
   @if(!empty($post->image_url))    
      <a href="{{ url('/storage/' . $post->image_url) }}">
         <img src="{{ url('/storage/' . $post->image_url) }}" alt="Sorry, pictures fly away...">
      </a>
      <br>
     <a href="{{ route('file.download', ['id' => $post->id]) }}" class="btn btn-primary download-btn">
        ⬇ Download
    </a>

   @endif
</article>

<section class="comments">
   <h2>Comments</h2>
 
   @foreach($post->comments as $comment)
   <div class="comment">
      <p><strong>{{ $comment->author }}</strong> said:</p>
      <p>{{ $comment->content }}</p>
   </div>
   @endforeach


   <form action="{{ route('comments.store', $post->id) }}" method="POST">
      @csrf
      <textarea name="content" rows="3" placeholder="Input your thoughts into the feed..." required></textarea>
      <button type="submit">Send Transmission</button>
   </form>
</section>

<a href="/" class="back-link">⬅ Back to the Grid</a>

</x-layout>
