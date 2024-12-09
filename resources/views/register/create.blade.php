
<x-layout>
    <section class="px-6 py-8" id="6">
        <main class="max-w-lg mx-auto mt-10 bg-black bg-opacity-80 border border-purple-500 p-6 rounded-xl shadow-xl">
            <h1 class="text-center font-bold text-2xl text-neon-pink">Join Us</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf
                <!-- Name -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="name">
                        Name
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        required
                    >
                    @error('name')
                        <p class="text-neon-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Username -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="username">
                        Username
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        required
                    >
                    @error('username')
                        <p class="text-neon-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="email">
                        Email
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <p class="text-neon-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-neon-blue" for="password">
                        Password
                    </label>
                    <input 
                        class="border border-neon-blue bg-black text-white p-2 w-full rounded-md focus:outline-none focus:ring-2 focus:ring-neon-pink"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                    @error('password')
                        <p class="text-neon-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button 
                        type="submit"
                        class="bg-neon-pink text-white py-2 px-4 rounded-md w-full uppercase font-bold hover:bg-neon-blue transition duration-300"
                    >
                        Submit
                    </button>
                </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <ul class="bg-black bg-opacity-70 text-neon-red p-4 rounded-md">
                        @foreach ($errors->all() as $error)
                            <li class="text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </section>
</x-layout>
