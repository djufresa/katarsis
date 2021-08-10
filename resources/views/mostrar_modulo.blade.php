<x-app-layout> 
    <div class="fondo">
        <section class="bg-yellow-400 mb-8">
            <div class="grid grid-cols-1  ">
                <div>
                  
                   <h1> {{$modulo->nombre}}</h1>
                   <h2>{{$modulo->titulo}}</h2>
                    </div>
                    
        </div>
            </section >
            <section>
                <section class="mb-4">
                    <div class="container mx-auto">
                       <div class="grid grid-cols-6 gap-8">
                          <div class="shadow">
                             <x-menu :modulos="$modulos" />
                          </div>
                          <div class=" col-span-5 shadow">

                        <div class="grid grid-cols-2 ">
                            <div class="card_curso">
                                <h2>Temas del curso</h2>
                                @foreach ($modulo->temas as $item)
                                <h3>{{$item->tema}}</h3>
                                @endforeach
                                <h3></h3>
                            </div>
                        </div>
                            otra cosa
                         
                           </div>
                           
                          </div>
                       </div>
                     
                   
            </section>
    </div>
</x-app-layout> 