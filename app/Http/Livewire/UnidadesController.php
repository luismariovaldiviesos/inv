<?php

namespace App\Http\Livewire;

use App\Models\Edificio;
use App\Models\Unidad;
use Livewire\Component;
use Livewire\WithPagination;

class UnidadesController extends Component
{
    use WithPagination;

    public $pagination = 10, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre, $edificio_id;

    public $edificios;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Unidades";
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $this->edificios = Edificio::all();

        if(strlen($this->search)> 0)
        {
            $data = Unidad::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Unidad::orderBy('id','asc')
            ->paginate($this->pagination);
        }
        return view('livewire.unidades.component',  ['unidades' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->nombre ='';
        $this->selected_id=0;
        $this->edificio_id = 0;
        $this->search = null;
        $this->resetValidation();
        $this->resetPage();

    }

    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:unidads,nombre',
            'edificio_id' => 'required'
        ];
        $messages =[
            'nombre.required' => 'El nombre de la unidad es requerido',
            'nombre.unique' => 'El nombre de la unidad  ya esta en uso ',
            'edificio_id.required' => 'El edificio al que pertenece la unidad  es requerida'
        ];
        $this->validate($rules,$messages);

        $unidad = Unidad::create([
            'nombre' => $this->nombre,
            'edificio_id' =>$this->edificio_id
            ]);
        $unidad->save();
        $this->resetUI();
        $this->emit('unidad-added','Unidad registrada correctamente');

    }

    public function Edit($id)
    {
        $record =  Unidad::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->edificio_id =  $record->edificio_id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:unidads,nombre,{$this->selected_id}",
            'edificio_id' => 'required'

        ];
        $messages = [
            'nombre.required' => 'El nombre de la unidad es requerida',
            'nombre.unique' => 'El nombre de la unidad ya esta en uso ',
            'edificio_id.required' => 'El edificio al que pertenece la unidad es requerido'
        ];
        $this->validate($rules,$messages);
        $unidad = Unidad::find($this->selected_id);
        $unidad->update([
            'nombre'=> $this->nombre,
            'edificio_id' =>$this->edificio_id
        ]);
        $this->resetUI();
        $this->emit('unidad-updated', 'Unidad  Actualizada ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Unidad $unidad)
    {
        //$tratamiento = Tratamiento::find($id);
        $unidad->delete();
        $this->resetUI();
        $this->emit('unidad-deleted','Unidad eliminada correctamente');
    }


}
