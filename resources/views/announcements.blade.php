<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Announcements') }}
        </h2>

    </x-slot>
    @include('layouts.userannouncement')

</x-app-layout>