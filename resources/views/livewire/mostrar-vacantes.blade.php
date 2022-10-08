<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-1">
                <a href="{{route('vacantes.show',$vacante->id)}}" class="text-xl font-bold">
                    {{$vacante->titulo}}
                </a>
                <p class="text-sm text-gray-600 font-bold">{{$vacante->empresa}}</p>
                <p class="text-sm text-gray-400">Ultimo día de postulación: {{$vacante->ultimo_dia->format('d/m/Y')}}</p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="{{route('candidatos.index',$vacante)}}" class="bg-azul-3 py-2 px-4 rounded-lg text-white text-center text-xs font-bold uppercase">
                    Candidatos
                </a>
                <a href="{{route('vacantes.edit',$vacante->id)}}" class="bg-azul-1 py-2 px-4 rounded-lg text-white text-center text-xs font-bold uppercase">
                    Editar
                </a>
                <button wire:click="$emit('mostrarAlerta',{{$vacante->id}})" class="bg-rojo-1 py-2 px-4 rounded-lg text-white text-center text-xs font-bold uppercase">
                    Eliminar
                </button>
            </div>
        </div>

    @empty
        <p class="p-3 text-center text-gray-800">No hay vacantes que mostrar</p>
    @endforelse
</div>

<div class="mt-10">
    {{$vacantes->links()}}
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    Livewire.on('mostrarAlerta', vacanteId =>{
        Swal.fire({
            title: 'Eliminar Vacante?',
            text: "Una vacante eliminada no se puede recuperar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, ¡Eliminar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
        if (result.isConfirmed) {
            //Emitir un evento hacia el componente de livewire
            Livewire.emit('eliminarVacante', vacanteId)
            Swal.fire(
            'Eliminado!',
            'La vacante ha sido eliminada.',
            'success'
            )
        }
        })
    })
</script>
@endpush
