<a
    {{ $attributes->except('wire:navigate') }}
    {{-- wire:navigate --}}
    class="text-gray-500 underline hover:text-gray-800">
{{ $slot }}
</a>