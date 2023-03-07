<h1>Upload New Image</h1>

<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

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
</form>