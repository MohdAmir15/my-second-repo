<x-app-wlayout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>{{$note->created_at}}</h1>
            <div class="note-buttons">
                <a href="{{route('note.edit',$note)}}" class="note-edit-button">Edit</a>
                <form action="{{route('note.destroy',$note)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="note">
        <div class="note-body">
            {{$note->note}}
        </div>
    </div>
</x-app-wlayout>
