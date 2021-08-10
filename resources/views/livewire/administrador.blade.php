<div>
    <!-- component -->



    <div class="flex" style="font-family: Arial;" x-data="{ open: true }">
        <div class="sidebar h-screen" style="width: 260px;" x-show="open">
            <div>
                <div class="text-purple-200 bg-purple-700 h-14 mx-auto block px-4 py-5">
                    {{ Auth::user()->name }}
                </div>
                <div class="h-screen bg-purple-700">
                    <div class="" style="font-size: 14px;">
                        <a href=""
                            class="h-12 px-4 py-3 text-purple-800 tracking-wider block bg-white font-medium border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">Dashboard</a>
                        <a href=""
                            class="h-12 px-4 py-3 text-white tracking-wider block bg-purple-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">Products</a>
                        <a href=""
                            class="h-12 px-4 py-3 text-white tracking-wider block bg-purple-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">Sales</a>
                        <a href=""
                            class="h-12 px-4 py-3 text-white tracking-wider block bg-purple-600 font-thin border-b-2 border-purple-800 hover:text-purple-800 hover:bg-white">Orders</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full z-10">
            <div
                class="sticky top-0 bg-purple-600 header bg-white h-14 px-10 py-4 border-b-4 border-purple-900 flex items-center justify-between">
                <div class="flex items-center space-x-12 text-sm">
                    <i class="hover:text-purple text-xl fas fa-bars font-thin cursor-pointer text-white"
                        @click="open = !open"></i>
                    <a href=""
                        class="hover:text-purple-400 text-white  tracking-wider font-thin"><span>Dashboard</span></a>
                    <a href="" class="hover:text-purple-400 text-white  tracking-wider font-thin">User</a>
                    <a href="" class="hover:text-purple-400 text-white  tracking-wider font-thin">Settings</a>
                </div>
                <div class="flex items-center space-x-8 text-gray-400 text-base px-4 py-2">
                    <span class="relative inline-block cursor-pointer">
                        <i class="fas fa-bell font-thin"></i>
                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-1  py-0.5 text-xs font-thin leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span>
                    </span>
                    <span class="relative inline-block cursor-pointer">
                        <i class="fas fa-list font-thin"></i>
                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-0.5 text-xs font-thin leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-purple-600 rounded-full">99</span>
                    </span>
                    <span class="relative inline-block cursor-pointer">
                        <i class="fas fa-envelope font-thin"></i>
                        <span
                            class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-0.5 text-xs font-thin leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-yellow-600 rounded-full">9</span>
                    </span>
                    <i class="fas fa-user-circle fa-lg font-thin cursor-pointer"></i>
                    <i class="fas fa-cog fa-2x font-thin text-white cursor-pointer animate animate-spin hover:text-green-500"
                        style="animation-duration: 7000ms;"></i>
                </div>
            </div>
            <div
                class="sticky top-14 header bg-white h-12 px-10 py-4 border-b-2 border-gray-200 flex items-center justify-between">
                <div class="flex items-center space-x-2 text-gray-400 text-base">
                    <span class="text-black tracking-wider font-thin text-sm">Home</span>
                    <span>/</span>
                    <span class="tracking-wide text-sm">
                        <span class="hover:underline cursor-pointer"
                            style="color: #20a8d8; font-weight: 100;">Admin</span>
                    </span>
                    <span>/</span>
                    <span class="text-black tracking-wider font-thin text-sm text-opacity-50">Dashboard</span>
                </div>
                <div class="flex items-center space-x-6 text-gray-400 text-base text-black">
                    <i class="fas fa-comment-alt mr-1 text-purple-500"></i>
                    <a href="" class="mr-3 text-black">
                        <i class="fas fa-chart-line text-purple-500"></i>
                        <span
                            class="hover:text-purple-400 text-black text-opacity-50 tracking-wider font-thin">Dashboard</span>
                    </a>
                    <a href="" class="text-black">
                        <i class="fas fa-cog text-purple-500"></i>
                        <span
                            class="hover:text-purple-400 text-black text-opacity-50 tracking-wider font-thin">Setting</span>
                    </a>
                </div>
            </div>
            <div class="body">
                <div class="p-8" style="background-color: #E4E5E6;">
                    <div class="main  ">
                        <input class="w-full h-16 px-3 rounded mb-8 focus:outline-none focus:shadow-outline text-xl px-8 shadow-lg" type="search" wire:model="buscar" />

                      <!-- component -->
<div class="text-gray-900 bg-gray-200">
    
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">celular</th>
                    <th class="text-left p-3 px-5">correo</th>
                    <th></th>
                </tr>
                @foreach ($users as $item)
                    
                
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5">{{$item->nombre}}</td>
                    <td class="p-3 px-5">{{$item->celular}}</td>
                    <td class="p-3 px-5">{{$item->correo}}</td>
                    
                    <td class="p-3 px-5 flex justify-end"><i class="far fa-eye"></i> <button wire:click="edit({{ $item->id }})"><i class="fas fa-pencil-alt pl-2"></i> </button><i class="fas fa-trash pl-2"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
                          
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
