<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use Livewire\Component;
use Livewire\WithPagination;

class MarcasController extends Component
{
    use WithPagination;


    public $pagination = 15, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Marcas";
    }


    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        if(strlen($this->search)> 0)
        {
            $data = Marca::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Marca::orderBy('id','asc')
            ->paginate($this->pagination);
        }
        return view('livewire.marcas.component',  ['marcas' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }


    public function resetUI()
    {
        $this->nombre ='';
        $this->selected_id=0;
        $this->resetValidation();
        $this->resetPage();

    }

    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:marcas,nombre'
        ];
        $messages =[
            'nombre.required' => 'El nombre de la marca es requerido',
            'nombre.unique' => 'El nombre de la marca ya esta en uso '
        ];
        $this->validate($rules,$messages);

        $marca = Marca::create([
            'nombre' => $this->nombre
        ]);
        $marca->save();
        $this->resetUI();
        $this->emit('marca-added','mARCA registrada correctamente');

    }


    public function Edit($id)
    {
        $record =  Marca::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:marcas,nombre,{$this->selected_id}"
        ];
        $messages = [
            'nombre.required' => 'Nombre de la marca es requerido',
            'nombre.unique' => 'Nombre de la marca ya existe'
        ];
        $this->validate($rules,$messages);
        $marca = Marca::find($this->selected_id);
        $marca->update([
            'nombre'=> $this->nombre
        ]);
        $this->resetUI();
        $this->emit('marca-updated', 'Marca Actualizada ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Marca $marca)
    {
        //$tratamiento = Tratamiento::find($id);
        $marca->delete();
        $this->resetUI();
        $this->emit('marca-deleted','Marca eliminada correctamente');
    }
}
