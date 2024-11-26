@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-secondary dark:focus:border-secondary focus:ring-secondary dark:focus:ring-secondary rounded-md shadow-sm']) !!}>