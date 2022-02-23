<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Tipo;
use Livewire\Component;
use Livewire\WithPagination;

class ModelosController extends Component
{
    use WithPagination;

    public $pagination = 20, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre, $marca_id, $tipo_id;

    public $marcas, $tipos;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Modelos";
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }


    public function render()
    {

        $this->marcas = Marca::all();
        $this->tipos =  Tipo::all();
        if(strlen($this->search)> 0)
        {
            $data = Modelo::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Modelo::orderBy('id','asc')
            ->paginate($this->pagination);
            //dd($data);
        }
        return view('livewire.modelos.component',  ['modelos' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->nombre ='';
        $this->selected_id=0;
        $this->marca_id = 0;
        $this->tipo_id = 0;
        $this->search = null;
        $this->resetValidation();
        $this->resetPage();

    }

    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:modelos,nombre',
            'marca_id' => 'required',
            'tipo_id' => 'required'
        ];
        $messages =[
            'nombre.required' => 'El nombre del modelos es requerido',
            'nombre.unique' => 'El nombre del modelos ya esta en uso ',
            'marca_id.required' => 'La marca a la que pertenece el modelo es requerida',
            'tipo_id.required' => 'El tipo al  que pertenece el modelo es requerido'
        ];
        $this->validate($rules,$messages);

        $modelo = Modelo::create([
            'nombre' => $this->nombre,
            'marca_id' =>$this->marca_id,
            'tipo_id' =>$this->tipo_id
            ]);
        $modelo->save();
        $this->resetUI();
        $this->emit('modelo-added','Modelo registrado correctamente');

    }

    public function Edit($id)
    {
        $record =  Modelo::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->marca_id =  $record->marca_id;
        $this->tipo_id =  $record->tipo_id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:modelos,nombre,{$this->selected_id}",
            'marca_id' => 'required',
            'tipo_id' => 'required'

        ];
        $messages = [
            'nombre.required' => 'El nombre del modelo es requerido',
            'nombre.unique' => 'El nombre del modelo ya esta en uso ',
            'marca_id.required' => 'La marca a la que pertenece el modelo es requerida',
            'tipo_id.required' => 'El tipo al  que pertenece el modelo es requerido'
        ];
        $this->validate($rules,$messages);
        $modelo = Modelo::find($this->selected_id);
        $modelo->update([
            'nombre'=> $this->nombre,
            'marca_id' =>$this->marca_id,
            'tipo_id' =>$this->tipo_id
        ]);
        $this->resetUI();
        $this->emit('modelo-updated', 'Modelo  Actualizado ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Modelo $modelo)
    {
        //$tratamiento = Tratamiento::find($id);
        $modelo->delete();
        $this->resetUI();
        $this->emit('modelo-deleted','Modelo eliminado correctamente');
    }
}
