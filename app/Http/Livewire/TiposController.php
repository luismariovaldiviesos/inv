<?php

namespace App\Http\Livewire;

use App\Models\Tipo;
use Livewire\Component;
use Livewire\WithPagination;

class TiposController extends Component
{
    use WithPagination;

    public $pagination = 10, $search ='', $componentName, $pageTitle, $selected_id;
    public $nombre;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Tipo de Equipos";
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {

        if(strlen($this->search)> 0)
        {
            $data = Tipo::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Tipo::orderBy('id','asc')
            ->paginate($this->pagination);
        }
        return view('livewire.tipos.component',  ['tipos' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->nombre ='';
        $this->selected_id=0;
        $this->search = null;
        $this->resetValidation();
        $this->resetPage();

    }

    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:tipos,nombre',

        ];
        $messages =[
            'nombre.required' => 'El nombre de la unidad es requerido',
            'nombre.unique' => 'El nombre de la unidad  ya esta en uso '

        ];
        $this->validate($rules,$messages);

        $tipo = Tipo::create([
            'nombre' => $this->nombre
            ]);
        $tipo->save();
        $this->resetUI();
        $this->emit('tipo-added','Tipo registrado correctamente');

    }

    public function Edit($id)
    {
        $record =  Tipo::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:tipos,nombre,{$this->selected_id}"

        ];
        $messages = [
            'nombre.required' => 'El nombre del tipo es requerido',
            'nombre.unique' => 'El nombre del tipo ya esta en uso '
        ];
        $this->validate($rules,$messages);
        $tipo = Tipo::find($this->selected_id);
        $tipo->update([
            'nombre'=> $this->nombre
        ]);
        $this->resetUI();
        $this->emit('tipo-updated', 'Tipo  Actualizado ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Tipo $tipo)
    {
        //$tratamiento = Tratamiento::find($id);
        $tipo->delete();
        $this->resetUI();
        $this->emit('tipo-deleted','Unidad eliminada correctamente');
    }
}
