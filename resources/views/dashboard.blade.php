<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="inline flex p-6 mx-6 my-3 bg-white border-b border-gray-200">
            You are now logged in. Welcome to your dashboard. Begin exploring SimpleBlog
        </div>

        <div class="grid grid-cols-3 gap-x-8 gap-y-4 h-80">
            <div class="flex flex-col p-6 mx-6 bg-white border-b border-gray-200 space-y-5 shadow-md hover:shadow-2xl rounded-2xl">
                <a href={{ route('profiles.show', Auth::user()->profile->id) }} class="inline-flex place self-center px-1 pt-1 border-b-2 border-transparent leading-5 text-gray-500 hover:text-blue-700 hover:border-red-500 transition duration-150 ease-in-out">
                    View your profile
                </a>
                <img src="storage/images/default_profile_image.png" width="250" heigth="250" class="place self-center" alt="profile image">
            </div>

            <div class="flex flex-col p-6 mx-6 bg-white border-b border-gray-200 space-y-5 shadow-md hover:shadow-2xl rounded-2xl">
                <a href={{route('posts.index')}} class="inline-flex place self-center px-1 pt-1 border-b-2 border-transparent leading-5 text-gray-500 hover:text-blue-700 hover:border-red-500 transition duration-150 ease-in-out">
                    View all posts
                </a>
                <img src="storage/images/view_posts.png" width="250" heigth="250" alt="profile image">
            </div>

            <div class="flex flex-col p-6 mx-6 bg-white border-b border-gray-200 space-y-5 shadow-md hover:shadow-2xl rounded-2xl">
                <a href={{route('posts.create')}} class="inline-flex place self-center px-1 pt-1 border-b-2 border-transparent leading-5 text-gray-500 hover:text-blue-700 hover:border-red-500 transition duration-150 ease-in-out">
                    Create new post
                </a>
                <img src="storage/images/create_new_post.png" width="250" heigth="250" alt="profile image">
            </div>
        </div>
    </div>
</x-app-layout>
