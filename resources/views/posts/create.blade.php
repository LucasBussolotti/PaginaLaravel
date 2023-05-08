<x-layouts.app 
    title="Crea un nuevo post">
    
    <h1>Create new post</h1>
    
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <label>
            Title <br/>
            <input type="text" name="title">
        </label><br/>
        <label>
            Body<br/>
            <textarea name="body"></textarea>
        </label><br/>
        <button type="submit">Enviar</button>
        <br/>


    </form>

    <a href="{{ route ('posts.index')}}">Regresar</a>

</x-layouts.app>