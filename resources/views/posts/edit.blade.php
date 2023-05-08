<x-layouts.app 
    :title="$post->title">
    
    <h1>Edit form</h1>
    
    <form method="POST" action="{{route('posts.update', $post)}}">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Update</button>
        <br/>


    </form>


    <a href="{{ route ('posts.index')}}">Regresar</a>

</x-layouts.app>