<div class="row sales layout-top-spacing">

    <div class="col-sm-12">

        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$componentName}} | {{$pageTitle}}</b>
                </h4>
                <ul class="tabs tab-pills">
                    <li>
                        <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal"
                         data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            @include('common.searchbox')

            <div class="widget-content">

                <div class="table-responsive">
                    <table class="table mt-1 table-bordered table-striped">
                        <thead class="text-white" style="background: #3B3F5C">
                            <tr>
                                <th class="text-white table-th text-center">ID</th>
                                <th class="text-white table-th text-center">NOMBRE</th>
                                <th class="text-white table-th text-center">EQUIPOS EN ESTA MARCA</th>
                                <th class="text-white table-th text-center">ACCIONES</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marcas as $marca)
                                <tr>
                                    <td class="text-center"><h6>{{$marca->id}}</h6></td>
                                    <td class="text-center"><h6> {{$marca->nombre}}</h6></td>
                                    <td class="text-center"><h6>
                                        @foreach ($marca->tipos as $tip  )
                                       <span class="badge badge-success"><h6 class="text-center">{{$tip->nombre}}</h6></span>
                                        @endforeach
                                    </td>
                                    <td class="text-center">


                                        <a href="javascript:void(0)"
                                        wire:click="Edit({{$marca->id}})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                         {{-- segundo  metodo para validar que no se elimine si tiene
                                        los cantones edificios  --}}

                                        <a href="javascript:void(0)"
                                        onClick="Confirm({{ $marca->id }}, {{ $marca->modelos->count() }})"
                                        class="btn btn-dark " title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$marcas->links()}}
                </div>

            </div>

        </div>

    </div>

    @include('livewire.marcas.form')

</div>


<script>

    document.addEventListener('DOMContentLoaded', function(){

        // evento que viene desde el Edit
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

        // evento que viene desde el Store
        window.livewire.on('marca-added', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });

         // evento que viene desde el Update
         window.livewire.on('marca-updated', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });
        window.livewire.on('marca-deleted', Msg=>{
            noty(Msg)
        });


    });



     function Confirm(id, modelos)
     {
        if(modelos > 0)
         {
             swal('NO SE PEUDE ELIMINAR LA MARCA , TIENE MODELOS RELACIONADOS')
             return ;
         }


         swal({
             title: 'CONFIRMAR',
             text: '¿ DESEA ELIMINAR EL REGISTRO ?',
             type: 'warning',
             showCancelButton: true,
             cancelButtonText: 'Cerrar',
             cancelButtonColor: '#fff',
             confirmButtonColor: '#3B3F5C',
             confirmButtonText: 'Aceptar'
         }).then(function(result){
             if(result.value)
             {
                 window.livewire.emit('deleteRow', id) //deleteRow va al listener del controller
                 swal.close()
             }
         })
     }

</script>
