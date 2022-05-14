@csrf
<label>
    Titulo:
    <br/>
    <input name="title" type="text" value="{{ old('title', $project->title) }}"/>
</label>
<br/>
<label>
    URL:
    <br/>
    <input name="url" type="text" value="{{ old('url', $project->url) }}"/>
</label>
<br/>
<label>
    Descripción:
    <br/>
    <textarea name="description">
        {{ old('description',$project->description) }}
    </textarea>
</label>
<br/>
<button>
    {{ $btn }}
</button>
