<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-3 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            <div class="mb-6 relative w-full max-w-2xl mx-auto">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <form method="GET">

                    @if (request('authors'))
                        <input type="hidden" name="authors" id="authors" value="{{ request('authors') }}">
                    @endif
                    @if (request('category'))
                        <input type="hidden" name="category" id="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" id="simple-search"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search" id="search" name="search" autocomplete="off">
                </form>
            </div>
            @if (count($posts) > 0)
            {{$posts->links()}}
                <div class="grid gap-8 lg:grid-cols-3">
                    @foreach ($posts as $post)
                        <article
                            class="flex flex-col justify-between hover:scale-110 transition-all p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 h-full">
                            <div>
                                <div class="flex justify-between items-center mb-5 text-gray-500">
                                    <a href="/posts?category={{ $post->category->slug }}"
                                        class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                        {{ $post->category->name }}
                                    </a>
                                    <span class="text-sm"> {{ $post->created_at->diffForHumans() }} </span>
                                </div>
                                <h2
                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                    <a href="/posts/{{ $post->slug }}"> {{ $post->title }} </a>
                                </h2>
                                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                    {{ Str::limit($post->body, 100) }}
                                </p>
                            </div>
                            <div class="flex justify-between items-center mt-auto">
                                <div class="flex items-center space-x-3">
                                    <img class="w-6 h-6 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Jese Leos avatar" />
                                    <a href="/posts?authors={{ $post->author->username }}"
                                        class="font-medium text-sm dark:text-white hover:underline">
                                        {{ $post->author->name }}
                                    </a>
                                </div>
                                <a href="/posts/{{ $post->slug }}"
                                    class="inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                @else
                </div>
                <p class="text-center text-2xl font-medium">Article Not Found</p>
            @endif
        </div>
    </section>
</x-layout>
