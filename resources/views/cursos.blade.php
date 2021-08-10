<x-app-layout>
<div class="fondo">
    <section class="mb-10">
        <div class="top h-64 w-full  overflow-hidden relative" >
            <img src="{{asset('imagenes/cursos.jpg')}}" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
              <h1 class="super_titulo">Cursos</h1>
              
            </div>
          </div>
        </section>
       <section>
      
           <div class="container mx-auto">
            @foreach ($evento as $item)
            <div class="grid grid-cols-1 mb-4">
                <div class="border-2 border-yellow-400">
                    <div class="  md:flex  justify-start items-center gap-4">
                        <div class="p-4">
                            
                    <img alt="mountain" class="rounded-full h-32 w-32 flex ml-16 md:ml-0" src="{{$item->foto}}" />
                </div>
                <div class="items-center">
                    <h1 class="mb-2 pt-8"> {{$item->titulo}}</h1>
                    <h2 class="mb-2">{{$item->tipo->tipo}} en línea</h2>
                    <h2 class="mb-2"><i class="far fa-calendar-alt"></i> del {{$item->fechai}} al {{$item->fechaf}}</h2>
                    <h2><a href="{{url('curso/mostrar/'.$item->id)}}">Ver más</a></h2>
                </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
               
           
       </section>
            
           
                </div>
                <x-pie />
            </x-app-layout>