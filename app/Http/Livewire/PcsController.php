<?php

namespace App\Http\Livewire;

use App\Models\Modelo;
use App\Models\Pc;
use App\Models\Tipo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PcsController extends Component
{
    use WithPagination;

    public $pagination = 20, $search ='', $componentName, $pageTitle, $selected_id;

    public $nombre, $ram, $dd, $serie, $af, $ac, $modelo_id, $user_id , $unidad_id;

    public $modelos, $unidades; // revisar desoues usuarios

    // para jañar el tipo marca-modelo
    public  $tipos, $tipo_id;


    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "PCS";
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }


    public function render()
    {
        $this->tipos =  Tipo::all();

        //   sacar el modelo y las marcas con el join o no se

        if(strlen($this->search)> 0)
        {
            $data = Pc::where('af','like', '%'. $this->search .'%')
            ->paginate($this->pagination);
            $this->resetPage();
        }
        else
        {
            $data = Pc::orderBy('id','asc')
            ->paginate($this->pagination);
            //dd($data);
        }
        return view('livewire.pcs.component',  ['pcs' => $data]) ->extends('layouts.theme.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->nombre ='';
        $this->ram ='';
        $this->dd ='';
        $this->serie = '';
        $this->af ='';
        $this->ac ='';
        $this->modelo_id = 0;
        $this->user_id = 0;
        $this->unidad_id = 0;
        $this->selected_id=0;
        $this->search = null;
        $this->resetValidation();
        $this->resetPage();

    }
    public function Store()
    {
        $rules = [
            'nombre' => 'required|unique:pcs,nombre',
            'ram' => 'required',
            'dd' => 'required',
            'serie' => 'required',
            'af' => 'required',
            'modelo_id' => 'required',
            'user_id' => 'required',
            'unidad_id' => 'required',
        ];
        $messages =[
            'nombre.required' => 'El nombre del equipo es requerido',
            'nombre.unique' => 'El nombre del equipo  ya esta en uso, contacte con el adminnistrador ',
            'ram.required' => 'el tamaño de memoria RAM es requerida',
            'dd.required' => ' el tamaño de disco duro es requerido',
            'serie.required' => 'el número de serie es requerido',
            'af.required' => 'el activo fijo es requerido',
            'modelo_id.required' => 'el modelo  es requerido',
            'user_id.required' => 'el usuario del equipo  es requerido',
            'unidad_id.required' => 'la unidad  es requerida'
        ];
        $this->validate($rules,$messages);

        $pc = Pc::create([
            'nombre' => $this->nombre,
            'ram' =>$this->ram,
            'dd' =>$this->dd,
            'serie' =>$this->serie,
            'af' =>$this->af,
            'ac' =>$this->ac,
            'modelo_id' =>$this->modelo_id,
            'user_id' =>$this->user_id,
            'unidad_id' =>$this->unidad_id,
            ]);
        $pc->save();
        $this->resetUI();
        $this->emit('pc-added','PC registrada correctamente');

    }

    public function Edit($id)
    {
        $record =  Pc::find($id);
        $this->nombre = $record->nombre;
        $this->ram = $record->ram;
        $this->dd = $record->dd;
        $this->serie = $record->serie;
        $this->af = $record->af;
        $this->ac = $record->ac;
        $this->modelo_id = $record->modelo_id;
        $this->user_id = $record->user_id;
        $this->unidad_id = $record->unidad_id;
        $this->emit('show-modal', 'editar elemento');
    }
    public function Update()
    {
        $rules = [
            'nombre' => "required|unique:pcs,nombre,{$this->selected_id}",
            'ram' => 'required',
            'dd' => 'required',
            'serie' => 'required',
            'af' => 'required',
            'modelo_id' => 'required',
            'user_id' => 'required',
            'unidad_id' => 'required',

        ];
        $messages = [
            'nombre.required' => 'El nombre del equipo es requerido',
            'nombre.unique' => 'El nombre del equipo  ya esta en uso, contacte con el adminnistrador ',
            'ram.required' => 'el tamaño de memoria RAM es requerida',
            'dd.required' => ' el tamaño de disco duro es requerido',
            'serie.required' => 'el número de serie es requerido',
            'af.required' => 'el activo fijo es requerido',
            'modelo_id.required' => 'el modelo  es requerido',
            'user_id.required' => 'el usuario del equipo  es requerido',
            'unidad_id.required' => 'la unidad  es requerida'
        ];
        $this->validate($rules,$messages);
        $pc = Pc::find($this->selected_id);
        $pc->update([
            'nombre' => $this->nombre,
            'ram' =>$this->ram,
            'dd' =>$this->dd,
            'serie' =>$this->serie,
            'af' =>$this->af,
            'ac' =>$this->ac,
            'modelo_id' =>$this->modelo_id,
            'user_id' =>$this->user_id,
            'unidad_id' =>$this->unidad_id
        ]);
        $this->resetUI();
        $this->emit('pc-updated', 'Unidad  Actualizada ');

    }

    protected $listeners = [

        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Pc $pc)
    {
        //$tratamiento = Tratamiento::find($id);
        $pc->delete();
        $this->resetUI();
        $this->emit('pc-deleted','Unidad eliminada correctamente');
    }


}
