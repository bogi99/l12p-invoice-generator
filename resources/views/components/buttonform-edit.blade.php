<div>
    <form action="{{ Request::url()}}/{{ $id }}/edit" method="POST" >
        @csrf
        @method('GET')
        <input type="hidden" name="id" value="{{ $id }}" >
        <input type="submit" value="Edit" >
    </form>
</div>