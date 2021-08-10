<div>
  <div class="grid grid-cols-2">
            <div class="col-span-2 bg-yellow-400">
            <h2 >Menu</h2>
          </div>
          
                <ul class="  tm ">
                  <li><a href="">Inicio</a></li>
                  <li><a href="">Dasboard</a></li>
                 @foreach ($modulos as $item)
                 <li><a href="">{{$item->nombre}}</a></li> 
                 @endforeach
                   <li><a href=""></a></li> 
               
                  <li><a href="">Regresar</a></li>
                </ul>
              
              </div>
</div>
