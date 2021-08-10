<x-app-layout> 
    <div class="fondo">
    <section class="bg-yellow-400 mb-8">
        <div class="container mx-auto " >           
            <div class="grid grid-cols-1 md:flex ">
                <div class="md:w-1/3 p-8">
                  
                    </div>
                    <div class="md:w-1/2">
                        <h1 class="mb-4">{{$curso->tipo->tipo}} en línea</h1>
                        <div class="grid grid-cols-1  mb-4">
                        <div><h2 ><i class="far fa-clock"></i>{{$curso->horai}} a {{$curso->horaf}}</h2></div>
                        <div ><h2><i class="far fa-calendar-alt"></i>Del {{$curso->fechai}} al {{$curso->fechaf}}</h2></div>
                        </div>
                        <p>{{$curso->descripcion}}</p>
                        <h1>Presio</h1>
                        <div class="flex justify-center gap-4">
                          <div ><h2>{{$curso->presio->pesos}} pesos </h2></div>
                          <div ><h2>{{$curso->presio->dolares}} dolares</h2></div>
                        
                         
                        </div>
                        </div>
                
              </div>
        </div>
        </section >
       <section>
        <div class=" container mx-auto grid justify-items-center gap-6 ">
            
                <div class="mb-12 card_curso ">
                    <h1 class="mb-2"> Que veras en esta plática</h1> 
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 ">
                      @foreach ($metas as $item)
                          
                    
                        <li><p><i class="far fa-check-circle"></i> {{$item->meta}}</p></li>
                        
                        @endforeach
                    </ul>
                </div>
        </div>
       </section>
      <section class="mb-4">
        <div class="container mx-auto grid justify-items-center ">
          <div class="card_curso">
            <h1>Temario</h1>
            @foreach ($modulos as $item)
            <article  class="row " x-data="{ open: false }">
                 <header class="   px-2 py-2 cursor-pointer" x-on:click="open = !open">
                   
                     <h2 class="bg-yellow-400 px-4 md:px-24"> {{$item->nombre}} {{$item->titulo}}</h2>
                 </header>
             <div class="bg-white" x-show="open">
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2">
                    @foreach ($item->temas as $tema)
                        
                   
                    <li>{{$tema->tema}}</li>
                    
                    @endforeach
                </ul>
             
             </div>
            </article> 
             @endforeach
        </div>
          </div>
         
       
      </section>
      <section >
        <div class=" container mx-auto md:grid justify-items-center md:gap-6 ">
            
          <div class="mb-12 card_curso ">
            <h1 class="mb-4" >Que obtendras</h1>
           
            <h2 class="mb-2">Una consulta psicológica gratis</h2>
            <h2 class="mb-2">Acceso al video durante 30 días</h2>
        
          
            @can('enrolled', $curso)
<button class="regitred"><a href="{{route('continuar', $curso)}}">continuar</a> </button>
@else
<form action="{{route('checkout', $curso)}}" method="post">
@csrf
<div class="grid grid-cols-1 place-items-center md:grid justify-items-center">
<button class="regitred " type="submit">comprar </button>
</div>
</form>
@endcan
         
          </div>
        </div>
      </section>
    </div>
    <x-pie />
</x-app-layout> 