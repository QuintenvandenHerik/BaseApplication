<x-app-layout>
    <x-slot name="header">
        <h2 class="leading-[1.95] font-semibold text-xl text-primary-default dark:text-dark-primary-default leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <x-button>
            {{ __('Create Module') }}
        </x-button>
    </x-slot>

    <div class="py-8">
        <div class="grid grid-cols-3 gap-8 max-w-full mx-auto sm:px-6 lg:px-8">
            <!-- Temporary feature ## REMOVE WHEN IMPLEMENTED ## -->
            @if(!isset($modules))
                <?php $modules = [1,2,3,4]; ?>
            @endif

            <!-- Loop Available Modules -->
            @forelse ($modules as $module)
                <div>
                    <a href="{{ $module->url ?? '#' }}" class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 mt-8 bg-light dark:bg-dark-dark dark:text-dark-light-default shadow text-light-default dark:text-dark-light-default hover:text-primary-default dark:hover:text-dark-primary-default hover:bg-light-50 dark:hover:bg-dark-light-50 hover:border-light-300 dark:hover:border-dark-light-300 focus:outline-none transition duration-150 ease-in-out">
                            <div class="z-20 overflow-hidden -mt-14 min-w-full h-60 bg-cover bg-center bg-[url('https://via.placeholder.com/480x270')]" alt="{{ $module->name ?? 'Random Module Name' }} module"></div>
                            <h1 class="py-4 text-xl font-semibold">{{ $module->name ?? 'Random Module Name' }}</h1>
                            <p>{{ $module->name ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis magna at commodo fringilla. Sed efficitur tellus a interdum interdum. Duis facilisis felis non orci faucibus faucibus. Proin pharetra vehicula felis, a venenatis sapien laoreet vel. Aliquam eu ipsum imperdiet, efficitur sem nec, ultricies justo. Integer diam felis, convallis vel imperdiet sit amet, semper sed nulla. Suspendisse quis hendrerit mauris. Sed sodales arcu felis, at consequat mauris vulputate eu. In auctor erat lacinia sapien iaculis, ac convallis mauris tristique.' }} </p>
                        </div>
                    </a>
                </div>
            @empty
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-light-200">
                        <p>No modules found.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
