<x-app-layout> 
<div class="fondo " >
  
  <section class="bg-yellow-400 mb-8">
             
       
               <h1>Bienvenido</h1>
            
               <h2>{{$curso->titulo}}</h2>
              
    </section >
    <section class="mb-4">
      
      <div class="container mx-auto">
         <div class="grid grid-cols-6 gap-8">
            <section>
            <div class="shadow  fixed">
          
               <x-menu :modulos="$modulos" />
            </div>
         </section>
         
            <div class=" col-span-5 shadow"> <h2 class="mb-8 ">Selecciona un módulo</h2>
               <section>
               <div class="md:flex items-center gap-2 md:gap-4 pl-32" >
                  @foreach ($curso->modulos as $item)
                  <div class=" card_curso "><h2>{{$item->nombre}}</h2>
                     
                  </div>
                  
                   @endforeach
                   
                   
                </div>
                <div class="pt-4">
                  <h1 class="text-red-400">Importante</h1>
                  <h2>Las conferencias serán completamente en vivo</h2>
                  <h2>La hora mencionada es de la ciudad de México</h2>
                  <h2>Favor de checar la diferencia de horario con tu estado o país.</h2>
                  <h2 class="mb-4">Serán por la plataforma zoom</h2>
                </div>
                <div class="pt-4">
                  <h1 class="text-red-400">Importante</h1>
                  <h2>Las conferencias serán completamente en vivo</h2>
                  <h2>La hora mencionada es de la ciudad de México</h2>
                  <h2>Favor de checar la diferencia de horario con tu estado o país.</h2>
                  <h2 class="mb-4">Serán por la plataforma zoom</h2>
                </div>
                </div>
                
               </section>
            </div> 
         
         </div> 
    </div>
       
     
    </section>
 
  

</x-app-layout> 
</div>