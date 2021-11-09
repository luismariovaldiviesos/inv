<?php

namespace App\Http\Livewire;

use App\Models\Provincia;
use Livewire\Component;
use Livewire\WithPagination;

class ProvinciasController extends Component
{

    use WithPagination;


    public $pagination = 5, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Provincias";
    }


    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        if(strlen($this->search)> 0)
        {
            $data = Provincia::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Provincia::orderBy('id','asc')
            ->paginate($this->pagination);
        }
        return view('livewire.provincias.component',  ['provincias' => $data]) ->extends('layouts.theme.app')
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
            'nombre' => 'required|unique:provincias,nombre'
        ];
        $messages =[
            'nombre.required' => 'El nombre de la provincia es requerido',
            'nombre.unique' => 'El nombre de la provincia ya esta en uso '
        ];
        $this->validate($rules,$messages);

        $provincia = Provincia::create([
            'nombre' => $this->nombre
        ]);
        $provincia->save();
        $this->resetUI();
        $this->emit('provincia-added','Provincia registrada correctamente');

    }


    public function Edit($id)
    {
        $record =  Provincia::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:provincias,nombre,{$this->selected_id}"
        ];
        $messages = [
            'nombre.required' => 'Nombre de la provincia es requerido',
            'nombre.unique' => 'Nombre de la provincia ya existe'
        ];
        $this->validate($rules,$messages);
        $provincia = Provincia::find($this->selected_id);
        $provincia->update([
            'nombre'=> $this->nombre
        ]);
        $this->resetUI();
        $this->emit('provincia-updated', 'Provincia Actualizada ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Provincia $provincia)
    {
        //$tratamiento = Tratamiento::find($id);
        $provincia->delete();
        $this->resetUI();
        $this->emit('provincia-deleted','Provincia eliminada correctamente');
    }



}
