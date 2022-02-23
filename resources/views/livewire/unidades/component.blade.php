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
                                <th class="text-white table-th">ID</th>
                                <th class="text-white table-th">NOMBRE</th>
                                <th class="text-white table-th">EDIFICIO</th>
                                <th class="text-white table-th">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($unidades as $uni)
                                <tr>
                                    <td><h6>{{$uni->id}}</h6></td>
                                    <td><h6> {{$uni->nombre}}</h6></td>
                                    <td><h6> {{$uni->edificio->nombre}}</h6></td>


                                    <td>


                                        <a href="javascript:void(0)"
                                        wire:click="Edit({{$uni->id}})"
                                        class="btn btn-dark mtmobile" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                         {{-- segundo  metodo para validar que no se elimine si tiene
                                        los cantones edificios  --}}

                                        <a href="javascript:void(0)"
                                        onClick="Confirm({{ $uni->id }},
                                        {{ $uni->pcs->count() }})"
                                        class="btn btn-dark " title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$unidades->links()}}
                </div>

            </div>

        </div>

    </div>

    @include('livewire.unidades.form')

</div>


<script>

    document.addEventListener('DOMContentLoaded', function(){

        // evento que viene desde el Edit
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

        // evento que viene desde el Store
        window.livewire.on('unidad-added', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });

         // evento que viene desde el Update
         window.livewire.on('unidad-updated', Msg=>{
            $('#theModal').modal('hide');
            noty(Msg)
        });
        window.livewire.on('unidad-deleted', Msg=>{
            noty(Msg)
        });


    });

     // para eliminar envia un emit con el id al fornt donde se debe cachar en los listeners

     function Confirm(id, tis, perifericos, compus) // perifericos cps etc para validar
     {
         if(tis > 0)
         {
             swal('NO SE PEUDE ELIMINAR LA UNIDAD PORQUE TIENE IMPRESORAS, TELEFONO O SCANNERS RELACIONADOS')
             return ;
         }
         if(perifericos > 0)
         {
             swal('NO SE PEUDE ELIMINAR LA UNIDAD PORQUE TIENE PERIFERICOS RELACIONADOS')
             return ;
         }
         if(compus > 0)
         {
             swal('NO SE PEUDE ELIMINAR EL EDIFICIO PORQUE TIENE COMPUTADORAS RELACIONADAS')
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
