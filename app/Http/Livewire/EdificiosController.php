<?php

namespace App\Http\Livewire;

use App\Models\Canton;
use App\Models\Edificio;
use Livewire\Component;
use Livewire\WithPagination;

class EdificiosController extends Component
{

    use WithPagination;

    public $pagination = 15, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre, $canton_id;

    public $cantones;

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Edificios";
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $this->cantones = Canton::all();

        if(strlen($this->search)> 0)
        {
            $data = Edificio::where('nombre','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Edificio::orderBy('id','asc')
            ->paginate($this->pagination);
        }
        return view('livewire.edificios.component',  ['edificios' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->nombre ='';
        $this->selected_id=0;
        $this->canton_id = 0;
        $this->search = null;
        $this->resetValidation();
        $this->resetPage();

    }

    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:cantons,nombre',
            'canton_id' => 'required'
        ];
        $messages =[
            'nombre.required' => 'El nombre del edificio es requerido',
            'nombre.unique' => 'El nombre del edificio ya esta en uso ',
            'canton_id.required' => 'El cantón al que pertenece el edificio es requerido'
        ];
        $this->validate($rules,$messages);

        $canton = Edificio::create([
            'nombre' => $this->nombre,
            'canton_id' =>$this->canton_id
            ]);
        $canton->save();
        $this->resetUI();
        $this->emit('edificio-added','Edificio registrado correctamente');

    }

    public function Edit($id)
    {
        $record =  Edificio::find($id);
        $this->nombre = $record->nombre;
        $this->selected_id = $record->id;
        $this->canton_id =  $record->canton_id;
        $this->emit('show-modal', 'editar elemento');
    }

    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:edificios,nombre,{$this->selected_id}",
            'canton_id' => 'required'

        ];
        $messages = [
            'nombre.required' => 'El nombre del edificio es requerido',
            'nombre.unique' => 'El nombre del edificio ya esta en uso ',
            'canton_id.required' => 'El cantón al que pertenece el edificio es requerido'
        ];
        $this->validate($rules,$messages);
        $edificio = Edificio::find($this->selected_id);
        $edificio->update([
            'nombre'=> $this->nombre,
            'canton_id' =>$this->canton_id
        ]);
        $this->resetUI();
        $this->emit('edificio-updated', 'Edificio  Actualizado ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Edificio $edificio)
    {
        //$tratamiento = Tratamiento::find($id);
        $edificio->delete();
        $this->resetUI();
        $this->emit('edificio-deleted','Edificio eliminado correctamente');
    }

}
