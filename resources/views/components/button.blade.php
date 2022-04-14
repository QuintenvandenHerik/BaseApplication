<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-light-800 dark:bg-dark-light-default border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-light-700 dark:hover:bg-dark-light-500 active:bg-light-900 dark:active:bg-dark-light-700 focus:outline-none focus:border-light-900 dark:focus:border-dark-light-700 focus:ring ring-light-300 dark:ring-dark-light-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
