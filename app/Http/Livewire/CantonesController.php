<?php

namespace App\Http\Livewire;

use App\Models\Canton;
use App\Models\Provincia;
use Livewire\Component;
use Livewire\WithPagination;

class CantonesController extends Component
{
    use WithPagination;

    public $pagination = 5, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre, $provincia_id;

    public $provincias;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Cantones";
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }


    public function render()
    {

        $this->provincias = Provincia::all();

        if(strlen($this->search)> 0)
        {
            $data = Canton::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Canton::orderBy('id','asc')
            ->paginate($this->pagination);
        }
        return view('livewire.cantones.component',  ['cantones' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->nombre ='';
        $this->selected_id=0;
        $this->provincia_id = 0;
        $this->search = null;
        $this->resetValidation();
        $this->resetPage();

    }

    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:cantons,nombre',
            'provincia_id' => 'required'
        ];
        $messages =[
            'nombre.required' => 'El nombre del cantón es requerido',
            'nombre.unique' => 'El nombre del cantón ya esta en uso ',
            'provincia_id.required' => 'La provincia a la que pertenece el cantón es requerida'
        ];
        $this->validate($rules,$messages);

        $canton = Canton::create([
            'nombre' => $this->nombre,
            'provincia_id' =>$this->provincia_id
            ]);
        $canton->save();
        $this->resetUI();
        $this->emit('canton-added','Cantón registrado correctamente');

    }

    public function Edit($id)
    {
        $record =  Canton::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->provincia_id =  $record->provincia_id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:cantons,nombre,{$this->selected_id}",
            'provincia_id' => 'required'

        ];
        $messages = [
            'nombre.required' => 'El nombre del cantón es requerido',
            'nombre.unique' => 'El nombre del cantón ya esta en uso ',
            'provincia_id.required' => 'La provincia a la que pertenece el cantón es requerida'
        ];
        $this->validate($rules,$messages);
        $canton = Canton::find($this->selected_id);
        $canton->update([
            'nombre'=> $this->nombre,
            'provincia_id' =>$this->provincia_id
        ]);
        $this->resetUI();
        $this->emit('canton-updated', 'Cantón  Actualizado ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Canton $canton)
    {
        //$tratamiento = Tratamiento::find($id);
        $canton->delete();
        $this->resetUI();
        $this->emit('canton-deleted','Cantón eliminado correctamente');
    }
}
