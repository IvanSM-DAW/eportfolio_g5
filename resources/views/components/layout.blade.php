@props(['titulo' => null])

<x-sendit.layout :titulo="$titulo">
    @session('mensaje')
        <div class="mb-6 rounded border border-gray-300 bg-gray-50 p-4 text-gray-800">
            {{ $value }}
        </div>
    @endsession
    {{ $slot }}
</x-sendit.layout>