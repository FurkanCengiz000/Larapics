<x-layout title="Edit New Image">
    <h1>Edit New Image</h1>
    
    <x-form action="{{ $image->route('update') }}" method="PUT">
    
        <div>
            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="400">
        </div>
    
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $image->title) }}">
            @error('title')
                {{ $message }}
            @enderror
        </div>
    
        <button type="submit">Update</button>
    </x-form>
</x-layout>