<x-modal>
    <x-slot name="modalId">
        create-module-modal
    </x-slot>

    <x-form-card>
        <form method="POST" action="{{ route('modules.create') }}">
        @csrf

        <!-- Module Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-textarea id="description" class="block mt-1 w-full"
                          name="description"
                          required/>
            </div>

            <!-- URL -->
            <div class="mt-4">
                <x-label for="url" :value="__('URL')" />

                <x-input id="url" class="block mt-1 w-full"
                         type="text"
                         name="url"
                         required/>
            </div>

            <!-- Import Image -->
            <div class="mt-4">
                <x-label for="image" :value="__('Image')" />

                <input id="image" class="block mt-1 w-full"
                         type="file"
                         name="image"
                         required/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Create Module') }}
                </x-button>
            </div>
        </form>
    </x-form-card>
</x-modal>
