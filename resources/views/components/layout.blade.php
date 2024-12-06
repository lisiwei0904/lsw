<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700&family=Rajdhani:wght@300;400;600&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cyberlog</title>
   
  
</head>
<body>
    <header>
        Cyberlog
    </header>

<nav style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
    <!-- 左侧导航内容 -->
    <div>
        <a href="/index" class="subscribe-btn">Posts</a>
    </div>

 
    <div style="display: flex; align-items: center; gap: 15px;">
        @auth
            <span>Welcome, {{ auth()->user()->name }}!</span>
            <form method="POST" action="/logout" style="display: inline-block;">
                @csrf
                <button type="submit" style="background: none; border: none; color: #00ffff; cursor: pointer;">
                    Log Out
                </button>
            </form>
            @if(auth()->check() && auth()->user()->name == 'admin')
                <a href="/admin/posts/publish" class="subscribe-btn">Update News</a>
                <a href="/admin/posts" class="subscribe-btn">Edit Posts</a>
            @endif
        @else
            <a href="/register">Register</a> 
            <a href="/login" style="margin-left: 10px;">Log In</a>
        @endauth
    </div>
</nav>


    <section>
        {{ $slot }}
    </section>

    <footer>
      <h5 class="text-neon-pink">Reach Out to the Network Overseer</h5>
<p class="text-neon-blue">Experiencing glitches? Jack into the grid and let us know.</p>

    
        <form method="POST" action="b01655972@studentmail.uws.ac.uk" style="display: flex; justify-content: center; align-items: center;">
            <input type="text" placeholder="Type your message here">
            <button type="submit">
                Contact Administrator
            </button>
        </form>
    </footer>
    <x-flash />
</body>
</html>
