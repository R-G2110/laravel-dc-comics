<form
    class="delete-btn"
    action="{{ route('comics.destroy', $comic) }}" method="POST"
    onsubmit="return confirm('Sei sicuro di voler eliminare {{$comic->title}}?')"
>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn"><i class="fa-regular fa-trash-can"></i> Delete</button>
</form>
