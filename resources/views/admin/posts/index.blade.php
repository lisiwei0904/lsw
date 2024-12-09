<x-layout>
<head>
    <link rel="stylesheet" href="{{ asset('css/adminindex.css') }}">
</head>

    <x-form.setting heading="Manage Posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th class="text-right">Edit</th>
                                    <th class="text-right">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            <a href="/posts/{{ $post->slug }}">
                                                {{ $post->title }}
                                            </a>
                                        </td>
                                        <td class="text-right">
                                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>
                                        <td class="text-right">
                                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-xs text-gray-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-form.setting>
</x-layout>
