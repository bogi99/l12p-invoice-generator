<div>
    <form action="{{ Request::url()}}/{{ $id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $id }}" >
        <input type="submit" value="Delete" >
    </form>
</div>