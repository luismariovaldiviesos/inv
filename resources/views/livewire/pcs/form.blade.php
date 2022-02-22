@include('common.modalHead')
<div class="row">

    <div class="col-sm-12">
        <div class="form-group">
            <label >Escoger tipo</label>
            <select wire:model.lazy="tipo_id" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                @foreach ($tipos as $t )
                <option value="{{ $t->id }}" >{{ $t->nombre }}</option>
                @endforeach
            </select>
            @error('provincia_id') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="nombre" class="form-control" placeholder="nombre del equipo">
             @error('nombre') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="ram" class="form-control" placeholder="ram del equipo">
             @error('ram') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="dd" class="form-control" placeholder="disco duro del equipo">
             @error('dd') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="serie" class="form-control" placeholder="serie del equipo">
             @error('serie') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <input type="text" wire:model.lazy="af" class="form-control" placeholder="activo fijo del equipo">
             @error('af') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label >Modelo</label>
            {{-- <select wire:model.lazy="marca_id" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                @foreach ($marcas as $m )
                <option value="{{ $m->id }}" >{{ $m->nombre }}</option>
                @endforeach
            </select> --}}
            @error('provincia_id') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
@include('common.modalFooter')
