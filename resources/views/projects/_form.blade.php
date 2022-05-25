@csrf
<label class="form-label">
    Titulo:
</label>
    <input class="form-control" name="title" type="text" value="{{ old('title', $project->title) }}"/>
<br/>
<label class="form-label">
    URL:
</label>
    <input class="form-control" name="url" type="text" value="{{ old('url', $project->url) }}"/>
<br/>
<label class="form-label">
    Descripción:
</label>
    <textarea class="form-control" name="description">
        {{ old('description',$project->description) }}
    </textarea>
<br/>
<div class="d-grid ">
<button class="btn btn-outline-success">
    {{ $btn }}
</button>
</div>
