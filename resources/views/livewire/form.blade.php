<div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" wire:model.lazy="title">
    @error('title') <span>{{ $message }}</span>  @enderror
</div>

<div class="form-group">
    <label>Contenido</label>
    <textarea class="form-control" wire:model.lazy="body"></textarea>
    @error('body') <span>{{ $message }}</span> @enderror
</div>
