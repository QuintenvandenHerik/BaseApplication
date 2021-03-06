<x-app-layout>
    <x-header>
        <x-slot name="name">
            Dashboard
        </x-slot>
        <x-button id="create-module" class="ml-3">
            Create Module
        </x-button>
    </x-header>

    @include('modules.create')

    <div class="py-8">
        <div class="grid xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 3xl:grid-cols-4 4xl:grid-cols-5 gap-8 max-w-full mx-auto sm:px-6 lg:px-8">
            <!-- Loop Available Modules -->
            @forelse ($modules as $module)
                <div>
                    <a href="{{ $module->url ?? '#' }}" class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 mt-8 bg-light dark:bg-dark-dark dark:text-dark-light-default shadow text-light-default dark:text-dark-light-default hover:text-primary-default dark:hover:text-dark-primary-default hover:bg-light-50 dark:hover:bg-dark-light-50 hover:border-light-300 dark:hover:border-dark-light-300 focus:outline-none transition duration-150 ease-in-out">
                            <div class="z-20 overflow-hidden -mt-14 min-w-full h-60 bg-cover bg-center bg-[url('https://via.placeholder.com/480x270')]"></div>
                            <h1 class="py-4 text-xl font-semibold">{{ $module->name ?? 'Random Module Name' }}</h1>
                            <p>{{ $module->name ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis magna at commodo fringilla. Sed efficitur tellus a interdum interdum. Duis facilisis felis non orci faucibus faucibus. Proin pharetra vehicula felis, a venenatis sapien laoreet vel. Aliquam eu ipsum imperdiet, efficitur sem nec, ultricies justo. Integer diam felis, convallis vel imperdiet sit amet, semper sed nulla. Suspendisse quis hendrerit mauris. Sed sodales arcu felis, at consequat mauris vulputate eu. In auctor erat lacinia sapien iaculis, ac convallis mauris tristique.' }} </p>
                        </div>
                    </a>
                </div>
            @empty
                <div class="overflow-hidden shadow-sm sm:rounded-lg col-start-2 col-end-4 xs:col-start-1 xs:col-end-1 sm:col-start-1 sm:col-end-1 md:col-start-1 md:col-end-1 lg:col-start-1 lg:col-end-3 2xl:col-start-2 2xl:col-end-3 3xl:col-start-2 3xl:col-end-4 4xl:col-start-3 4xl:col-end-4">
                    <div class="p-6 bg-light dark:bg-dark-dark dark:text-dark-light-default shadow text-light-default dark:text-dark-light-default">
                        <p>No modules found.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
