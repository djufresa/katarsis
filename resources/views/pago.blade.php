<x-app-layout>
<div class="fondo">
  <div class="w-full bg-grey-500">
    <div class="container mx-auto py-8">
        <div class="w-96 mx-auto bg-yellow-400 rounded shadow">

            <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Forma de pago
            </div>

            <form  method="post" action="{{route('pay', $curso)}}">
              @csrf
                <div class="py-4 px-8">

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Nombre:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                            name="student_id" id="student_id" value="{{Auth::user()->name}}" >
                 
                    </div>


                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Email</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                            name="student_name" id="student_name" value="{{Auth::user()->email}}" >
                  
                    </div>

                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Conferencia:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                            name="course_name" id="course_name" value="{{$curso->titulo}}" >
                        <p id=error_creater_id></p>
                    </div>


                         <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2">Presio:</label>
                        <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text"
                            name="addmission_date" id="addmission_date" value="{{$curso->presio->dolares}} dolares">
                        <p id=error_intake_year></p>
                    </div>
                    <div class="mb-4">
                        <button
                            class="mb-2 mx-16 rounded-full py-1 px-24 bg-red-500 " type="submit">
                          
                            Pagar
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
<!--  Application Details End -->



                </div>
            </form>

        </div>

    </div>
</div>
 
</div>
</x-app-layout>