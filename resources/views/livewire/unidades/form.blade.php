@include('common.modalHead')
<div class="row">
    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="nombre" class="form-control" placeholder="nombre del edificio">
             @error('nombre') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label >Edificio</label>
            <select wire:model.lazy="edificio_id" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                @foreach ($edificios as $e )
                <option value="{{ $e->id }}" >{{ $e->nombre }}</option>
                @endforeach
            </select>
            @error('edificio_id') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
@include('common.modalFooter')
