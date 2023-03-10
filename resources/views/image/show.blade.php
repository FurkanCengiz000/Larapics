<x-layout title="Show Image">
    <h1>{{ $image->title }}</h1>
    
    <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}">
</x-layout>