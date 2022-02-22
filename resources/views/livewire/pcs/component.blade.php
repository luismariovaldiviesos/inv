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
                                <th class="text-white table-th">NOMBRE</th>
                                <th class="text-white table-th">SERIE</th>
                                <th class="text-white table-th">ACTIVO FIJO</th>
                                <th class="text-white table-th">MARCA</th>
                                <th class="text-white table-th">MODELO</th>
                                <th class="text-white table-th">UBICACION</th>
                                <th class="text-white table-th">USUARIO ASIGNADO</th>
                                <th class="text-white table-th">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pcs as $pc)
                                <tr>
                                    <td><h6> {{$pc->nombre}}</h6></td>
                                    <td><h6> {{$pc->serie}}</h6></td>
                                    <td><h6> {{$pc->af}}</h6></td>
                                    <td><h6> {{$pc->modelo->marca->nombre}}</h6></td>
                                    <td><h6> {{$pc->modelo->nombre}}</h6></td>
                                    <td><h6> {{$pc->unidad->edificio->nombre}}</h6></td>
                                    <td><h6> {{$pc->user->name}}</h6></td>


                                    <td>


                                        <a href="javascript:void(0)"
                                        wire:click="Edit({{$pc->id}})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                         {{-- segundo  metodo para validar que no se elimine si tiene
                                        los cantones edificios  --}}

                                        <a href="javascript:void(0)"
                                        onClick="Confirm({{ $pc->id }})"
                                        class="btn btn-dark " title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$pcs->links()}}
                </div>

            </div>

        </div>

    </div>

    @include('livewire.pcs.form')

</div>


<script>

    document.addEventListener('DOMContentLoaded', function(){

        // evento que viene desde el Edit
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

        // evento que viene desde el Store
        window.livewire.on('pc-added', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });

         // evento que viene desde el Update
         window.livewire.on('pc-updated', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });
        window.livewire.on('pc-deleted', Msg=>{
            noty(Msg)
        });


    });

     // para eliminar envia un emit con el id al fornt donde se debe cachar en los listeners

     function Confirm(id)
     {
        // if(tis > 0)
        //  {
        //      swal('NO SE PEUDE ELIMINAR EL MODELO  PORQUE TIENE IMPRESORAS, TELEFONO O SCANNERS RELACIONADOS')
        //      return ;
        //  }
        //  if(perifericos > 0)
        //  {
        //      swal('NO SE PEUDE ELIMINAR EL MODELO  PORQUE TIENE PERIFERICOS RELACIONADOS')
        //      return ;
        //  }
        //  if(compus > 0)
        //  {
        //      swal('NO SE PEUDE ELIMINAR EL MODELO PORQUE TIENE COMPUTADORAS RELACIONADAS')
        //      return ;
        //  }

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
