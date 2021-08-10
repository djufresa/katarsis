<x-app-layout>
   <div class="fondo">
    <section class="espasio">
        <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url({{asset('imagenes/fondo.jpg')}});">
         <div class="flex items-center justify-center h-full w-full bg-gray-400 bg-opacity-50">
               
                    <div class="grid grid-cols-1 gap-4">
                    <div class="super_titulo "> Psicología Katarsis</div>
                    @auth
                    <div class=" grid grid-cols-1 md:grid-cols-3">
                       <div class="md:col-start-2 dash " > 
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                         </div>
                            
                         
                    </div>
                    @else
                    <div class="grid grid-cols-1 md:grid-cols-2">
                    <div><button class="login">
                      <a href="{{ route('login') }}">Login</a>
                    </button>
                  </div>
                    <div>
                      <div><button class="regitred">
                        <a href="{{ route('register') }}">Registrate</a>
                      </button></div>
                    </div>
                   </div>
                    @endauth
      </div>
      </section>
      <section class="espasio">
          <h1 class="mb-8 bg-yellow-400">Bienvenido</h1>
          
        <div class="container mx-auto ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 leading-relaxed">
                
                <div><img class="border-2 border-yellow-400 w-screen rounded-lg " src="{{asset('imagenes/foto1.jpg')}}" alt="" ></div>
            <div ><h2>Soy Daniel Jufresa</h2><p >Sufrí dos años ansiedad, sentía miedo por todo, a salir a la calle, al ir al cine, a que darme solo en casa, a subirme un avión o inclusive a un taxi; no entendía que me pasaba, ni porque tenía una terrible angustia todo el tiempo. Empecé a buscar psicólogo y psiquiatras me decían que tenia de todo, algunos me dijeron lo que tenía era un trastorno de ansiedad, pero no me explicaban de que se trataba, los psiquiatras me medicaban, pero no sentía mejoría. Así que empecé averiguar por mi cuenta. Fue así como me enamoré de la psicología y decidí estudiar la carrera, actualmente soy pasante y me dedico a dar pláticas sobre ansiedad, depresión, entre otras.
                Te invito a que estés pendiente de mis pláticas y de mis artículos
               </p></div>
           
            </div>
            
           
      </section>

      
      <section class="mb-8">
          <h1 class="mb-6 bg-yellow-400">Colaboradores</h1>
          <div class="grid grid-cols-1 gap-10 md:grid-cols-6">
              <div class=" border-2 border-yellow-400 md:col-span-2 md:col-start-2"><img src="{{asset('imagenes/alejandra.jpg')}}" alt="" style="width: 100%;">
                   <h2>Alejandra Garcia</h2>
                   <h3>Licenciada en psicología por la Universidad de Guanajuato. Ponente de varios cursos y seminiarios así, como conferencista de Colectivo Katarsis</h3>
            </div>
             
              <div class="border-2 border-yellow-400 md:col-span-2 md:col-start-4"><img src="{{asset('imagenes/silvia.jpg')}}" alt="">
                    <h2>Sivia Araya</h2>
                    <h3>Egresada de la licenciatura en Psicología Clínica de la Universidad Fidélitas de Costa Rica. Especialista en ataques de pánico. Autora del libro Confie y Viva sin Pánico</h3>
            </div>
          </div>
      </section>
      
            
     <x-pie />
    </div>
</x-app-layout>