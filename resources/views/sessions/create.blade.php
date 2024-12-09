<x-layout>
 <link rel="stylesheet" href="{{ asset('css/sessionCreate.css') }}">
   <section class="px-6 py-8" id="6">
      <main class="max-w-lg mx-auto mt-10">
         <h1>Welcome Back, Hacker!</h1>

         <form method="POST" action="/login" class="mt-10">
            @csrf
            <div>
               <label for="email">Access Code (Email)</label>
               <input type="email" name="email" id="email" value="{{ old('email') }}" required>
               @error('email')
               <p class="text-red-500 text-xs mt-1">{{$message}}</p>
               @enderror
            </div>
            <div>
               <label for="password">Decrypt Key (Password)</label>
               <input type="password" name="password" id="password" required>
               @error('password')
               <p class="text-red-500 text-xs mt-1">{{$message}}</p>
               @enderror
            </div>
            <div class="mb-6">
               <button type="submit">Log In</button>
            </div>

            @if ($errors->any)
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
               @endforeach
            </ul>
            @endif
         </form>
      </main>
   </section>
</x-layout>
