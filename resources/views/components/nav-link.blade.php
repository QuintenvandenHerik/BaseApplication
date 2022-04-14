@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-primary-400 dark:border-dark-primary-400 text-base font-medium text-primary-700 dark:text-dark-primary-700 bg-primary-50 dark:bg-dark-primary-50 focus:outline-none focus:text-primary-800 dark:focus:text-dark-primary-800 focus:bg-primary-100 dark:focus:bg-dark-primary-100 focus:border-primary-700 dark:focus:border-dark-primary-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-light-default dark:text-dark-light-default hover:text-light-800 dark:hover:text-dark-light-800 hover:bg-light-50 dark:hover:bg-dark-light-50 hover:border-light-300 dark:hover:border-dark-light-300 focus:outline-none focus:text-light-800 dark:focus:text-dark-light-800 focus:bg-light-50 dark:focus:bg-dark-light-50 focus:border-light-300 dark:focus:border-dark-light-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
