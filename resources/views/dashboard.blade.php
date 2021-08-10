<x-app-layout>
    <div class="fondo">
    <h1 class="mb-2">Bienvenido</h1>
    <h2>Gracias por registrarte</h2>
    <div class="text-gray-900 ">
    
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-yellow-400 shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Curso</th>
                    <th class="text-left p-3 px-5">Fechas</th>
                    <th class="text-left p-3 px-5">Hora</th>
                    <th></th>
                </tr>
                @foreach ($cursos as $item)
                    
                
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5">{{$item->titulo}}</td>
                    <td class="p-3 px-5">{{$item->fechai}}{{$item->fechaf}}</td>
                    <td class="p-3 px-5">{{$item->horai}}</td>
                    
                    <td class="p-3 px-5 flex justify-end"><i class="far fa-eye"></i> <button wire:click="edit({{ $item->id }})"><i class="fas fa-pencil-alt pl-2"></i> </button><i class="fas fa-trash pl-2"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>

    
</x-app-layout>
