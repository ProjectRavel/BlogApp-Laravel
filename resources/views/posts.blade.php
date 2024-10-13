<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>
    <h3>Ini adalah Blog Page</h3>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight text-gray-900 font-bold"> {{ $post['title'] }} </h2>
            <div>
                <a href="#"> {{ $post['author'] }} | {{$post->created_at->diffForHumans()}} </a>
            </div>
            <p class="my-4 font-light"> {{ Str::limit($post['body'], 150) }} </p>
            <a href="/posts/{{$post['slug']}}" class="text-blue-500 font-medium hover:text-blue-400 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>