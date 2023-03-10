<x-layout title="Upload New Image" >
    <h1>Upload New Image</h1>
    
    <x-form action="{{ route('images.store') }}" enctype="multipart/form-data">
    
        <div>
            <label for="file">File</label>
            <input type="file" name="file" id="file"><br>
            @error('file')
                {{ $message }}
            @enderror
        </div>
    
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                {{ $message }}
            @enderror
        </div>
    
        <button type="submit">Upload</button>
    </x-form>
</x-layout>