<x-app-layout>
    <div class="fondo">
        <div class="container mx-auto">
            <div class="flex justify-center px-6 pt-12 mb-4">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div
                        class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                        style="background-image: url('{{asset('imagenes/login.jpg')}}')"
                    ></div>
                    <!-- Col -->
                    <div class="w-full lg:w-1/2 card_curso p-5 rounded-lg lg:rounded-l-none">
                        <h2>Inicia sesión</h2>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-yellow-400 rounded" method="POST" action="{{ route('login') }}">
                             @csrf
                             <x-jet-validation-errors class="mb-4" />
                            <div class="mb-4">
                                
                                <x-jet-label class="block mb-2 text-sm font-bold text-gray-700" for="email" value="{{ __('Email') }}" />
    
                                <x-jet-input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email"
                                    type="email"
                                    placeholder="Email"
                                    name="email" :value="old('email')" required autofocus />
                            </div>
                            <div class="mb-4">
                                
                                <x-jet-label class="block mb-2 text-sm font-bold text-gray-700" for="password" value="{{ __('Password') }}" />
    
                                <x-jet-input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    type="password"
                                    placeholder="******************"
                                    name="password" required autocomplete="current-password" />
                                <p class=" text-red-500">Por favor pon tu clave </p>
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="mb-6 text-center">
                                <x-jet-button class="ml-4">
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a
                                    class="inline-block text-2xl text-red-800 align-baseline hover:text-blue-800"
                                    href="{{route('register')}}"
                                >
                                    Crea una cuenta
                                </a>
                            </div>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="inline-block text-xl text-red-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu clave?') }}
                                    </a>
                                @endif
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <x-pie />
    </x-app-layout>
    