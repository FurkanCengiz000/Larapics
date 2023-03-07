<h1>Edit New Image</h1>

<form action="{{ $image->route('update') }}" method="POST">
    @csrf
    @method('PUT')

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
</form>