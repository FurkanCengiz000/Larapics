<h1>All Images</h1>

<a href="{{ route('images.create') }}">Upload Image</a>

@if ($message = session('message'))
    <div>{{ $message }}</div>
@endif

@foreach ($images as $image)
    <div>
        <a href="{{ $image->permalink() }}">
            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="300">
        </a>
    </div>
    
    <a href="{{ $image->route('edit') }}">Edit</a> |
    <form action="{{ $image->route('destroy') }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')

        <button onclick="return confirm('Are you sure?')" type="submit">Delete</button>

    </form>

@endforeach