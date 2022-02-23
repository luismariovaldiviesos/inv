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
                                <th class="text-white table-th text-center">TIPO</th>
                                <th class="text-white table-th text-center">MARCA</th>
                                <th class="text-white table-th text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($modelos as $mod)
                                <tr>
                                    <td class="text-center"><h6>{{$mod->id}}</h6></td>
                                    <td class="text-center"><h6> {{$mod->nombre}}</h6></td>
                                    <td class="text-center"><h6> {{$mod->tipo->nombre}}</h6></td>
                                    <td class="text-center"><h6> {{$mod->marca->nombre}}</h6></td>

                                    <td class="text-center">
                                        <a href="javascript:void(0)"
                                        wire:click="Edit({{$mod->id}})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                         {{-- segundo  metodo para validar que no se elimine si tiene
                                        los cantones edificios  --}}

                                        <a href="javascript:void(0)"
                                        onClick="Confirm({{ $mod->id }})"
                                        class="btn btn-dark " title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$modelos->links()}}
                </div>

            </div>

        </div>

    </div>

    @include('livewire.modelos.form')

</div>


<script>

    document.addEventListener('DOMContentLoaded', function(){

        // evento que viene desde el Edit
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

        // evento que viene desde el Store
        window.livewire.on('modelo-added', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });

         // evento que viene desde el Update
         window.livewire.on('modelo-updated', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });
        window.livewire.on('modelo-deleted', Msg=>{
            noty(Msg)
        });


    });

     // para eliminar envia un emit con el id al fornt donde se debe cachar en los listeners

     function Confirm(id ,tis, perifericos, compus)
     {
        if(tis > 0)
         {
             swal('NO SE PEUDE ELIMINAR EL MODELO  PORQUE TIENE IMPRESORAS, TELEFONO O SCANNERS RELACIONADOS')
             return ;
         }
         if(perifericos > 0)
         {
             swal('NO SE PEUDE ELIMINAR EL MODELO  PORQUE TIENE PERIFERICOS RELACIONADOS')
             return ;
         }
         if(compus > 0)
         {
             swal('NO SE PEUDE ELIMINAR EL MODELO PORQUE TIENE COMPUTADORAS RELACIONADAS')
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
