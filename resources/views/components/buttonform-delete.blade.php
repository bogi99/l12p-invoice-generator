<div>
    <form action="{{ Request::url()}}/{{ $id }}" method="POST" >
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $id }}" >
        <input type="submit" value="Delete" >
    </form>
</div>