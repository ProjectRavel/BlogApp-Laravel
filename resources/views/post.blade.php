<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>
    <h3>Ini adalah Single Post</h3>
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight text-gray-900 font-bold"> {{ $post['title'] }} </h2>
        <div>
            <a href="#"> {{ $post->author->name }} | {{$post->created_at->diffForHumans()}} </a>
        </div>
        <p class="my-4 font-light"> {{ $post['body'] }} </p>
        <a href="/posts" class="text-blue-500 font-medium hover:text-blue-400 hover:underline">&laquo; Back</a>
    </article>
</x-layout>
