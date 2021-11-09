{{-- @include('common.modalHead')
<div class="row">
    <div class="col-sm-12 ">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fas fa-edit">
                    </span>
                </span>
            </div>
            <div class="col-sm-12 col-md-6">
                <input type="text" wire:model.lazy="nombre" class="form-control" placeholder="nombre">
             @error('nombre') <span class="text-danger er">{{ $message }}</span> @enderror
            </div>

             <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label >Medico</label>
                    <select wire:model.lazy="medico_id" class="form-control">
                        <option value="Elegir" selected>Elegir</option>
                        @foreach ($provincias as $p )
                        <option value="{{ $p->id }}" >{{ $p->nombre }}</option>
                        @endforeach
                    </select>
                    @error('medico_id') <span class="text-danger er">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
</div>
@include('common.modalFooter') --}}
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
            <label >Cantón</label>
            <select wire:model.lazy="canton_id" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                @foreach ($cantones as $c )
                <option value="{{ $c->id }}" >{{ $c->nombre }}</option>
                @endforeach
            </select>
            @error('provincia_id') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
@include('common.modalFooter')
