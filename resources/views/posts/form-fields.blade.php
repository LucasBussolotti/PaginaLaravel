<label>
    Title <br/>
    <input type="text" name="title" value="{{old ('title',$post->title)}}">
    <br>
    @error('title')
        <small style="color:red">{{ $message }}</small>
    @enderror
</label><br/>
<label>
    Body<br/>
    <textarea name="body">{{old ('body',$post->body)}}</textarea>
    <br>
    @error('body')
        <small style="color:red">{{ $message }}</small>
    @enderror
</label><br/>