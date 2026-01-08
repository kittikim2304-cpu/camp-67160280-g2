@csrf

<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $pokedex->name ?? '') }}">
    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label class="form-label">Type</label>
    <input type="text" name="type" class="form-control" value="{{ old('type', $pokedex->type ?? '') }}">
    @error('type')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label class="form-label">Species</label>
    <input type="text" name="species" class="form-control" value="{{ old('species', $pokedex->species ?? '') }}">
    @error('species')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="row">
    <div class="col-md-3 mb-3">
        <label class="form-label">Height</label>
        <input type="number" name="height" class="form-control" value="{{ old('height', $pokedex->height ?? '') }}">
        @error('height')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-3 mb-3">
        <label class="form-label">Weight</label>
        <input type="number" name="weight" class="form-control" value="{{ old('weight', $pokedex->weight ?? '') }}">
        @error('weight')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-2 mb-3">
        <label class="form-label">HP</label>
        <input type="number" step="0.01" name="hp" class="form-control" value="{{ old('hp', $pokedex->hp ?? '') }}">
        @error('hp')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-2 mb-3">
        <label class="form-label">Attack</label>
        <input type="number" step="0.01" name="attack" class="form-control" value="{{ old('attack', $pokedex->attack ?? '') }}">
        @error('attack')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-2 mb-3">
        <label class="form-label">Defense</label>
        <input type="number" step="0.01" name="defense" class="form-control" value="{{ old('defense', $pokedex->defense ?? '') }}">
        @error('defense')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Image URL</label>
    <input type="text" name="image_url" class="form-control" value="{{ old('image_url', $pokedex->image_url ?? '') }}">
    @error('image_url')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<button class="btn btn-primary">Save</button>
