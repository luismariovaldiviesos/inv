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
            <input type="text" wire:model.lazy="nombre" class="form-control" placeholder="nombre del modelo">
             @error('nombre') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label >Marca</label>
            <select wire:model.lazy="marca_id" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                @foreach ($marcas as $m )
                <option value="{{ $m->id }}" >{{ $m->nombre }}</option>
                @endforeach
            </select>
            @error('marca_id') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label >Tipo Dispositipo</label>
            <select wire:model.lazy="tipo_id" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                @foreach ($tipos as $t )
                <option value="{{ $t->id }}" >{{ $t->nombre }}</option>
                @endforeach
            </select>
            @error('tipo_id') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
@include('common.modalFooter')
