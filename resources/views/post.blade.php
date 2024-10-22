<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>
    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->
    

    <main class="pt-8 pb-16 lg:pt-4 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4lg:mb-6 not-format">
                    <a href="/posts" class="text-xs inline-flex items-center justify-center text-blue-500 mb-4 hover:opacity-65 cursor-pointer transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                       <p class="px-2">Back to all post</p>
                    </a>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name}}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08" title="February 8th, 2022">
                                        {{ $post->created_at->diffForHumans() }} </time></p>
                                <div class="py-2">
                                    <a href="/category/{{ $post->category->slug }}"
                                        class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                        {{ $post->category->name }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }} </h1>
                </header>
                <p class="lead">{{ $post->body }}</p>
            </article>
    </main>
</x-layout>
