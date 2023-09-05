@extends('template')

@section('content')
    <div>
        <div class="container mx-auto px-4 h-24 flex items-center justify-between">
            <div class="font-black">
                Logo
            </div>
            <ul class="ml-auto space-x-3 flex items-center">
                <li>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-800 hover:underline">Como reservar</a>
                </li>
                <li>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-800 hover:underline">Sobre nós</a>
                </li>
                <li>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-800 hover:underline">Informações</a>
                </li>
                <li>
                    <a href="#" class="text-sm text-gray-600 hover:text-gray-800 hover:underline">Contato</a>
                </li>
            </ul>
        </div>
    </div>


    <div>
        <div
            style="background: url('https://wamhoteis.com.br/wp-content/uploads/2021/10/Entretenimento-Banner-4-1920x500-1-1.png'); height:460px">
            <div class="container mx-auto px-4 h-full flex items-center justify-center">
                <div>
                    <div class="text-center">
                        <h1 class="text-gray-200 text-3xl mb-2">Onde você quer ir?</h1>
                        <p class="text-green-100">Escolha o estado e cidade para achar os melhores resorts.</p>

                    </div>


                    <div class="mt-5 m-auto">
                        <form action="" class="space-x-4">
                            <select name="" id=""
                                class="bg-grey-50 px-3 py-2 border-gray-300 rounded-sm text-gray-500">
                                <option value="">Escolha o estado</option>
                            </select>

                            <select name="" id=""
                                class="bg-grey-50 px-3 py-2 border-gray-300 rounded-sm text-gray-500 mr-3">
                                <option value="">Escolha o estado</option>
                            </select>

                            <button class="inline-flex items-center text-yellow-900 bg-orange-400 font-medium px-3 py-2 rounded ">
                                <svg class="w-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                  </svg>
                                Pesquisar
                                resorts</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div>
        <div class="container mx-auto px-4 py-10">
            <div class="flex">
                <div>
                    <div class="text-sm text-gray-400 font-medium">Resort em destaque</div>
                    <div class="text-2xl text-gray-500">Ecoresort Praia do Forte Bahia</div>
                    <div class="text-sm text-gray-400 font-medium">Hotel qualidade 5 estrelas</div>
                    <div class="text-sm text-gray-400 font-medium mt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus praesentium dolorum libero
                            facere veniam quae enim! Similique eos dignissimos tenetur quaerat saepe sunt cumque optio quo,
                            incidunt autem labore quod.</p>
                    </div>

                    <button class="text-yellow-900 bg-orange-400 font-medium px-3 py-2 rounded mt-10">Solicitar
                        resorts</button>
                </div>
                <div class="flex-shrink-0 ml-auto">
                    <img src="https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia6486/caracteristicas-do-coqueiro-e-do-ambiente-ideal-para-seu-desenvolvimento-cpt.jpg"
                        width="450" />
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container mx-auto px-4 mt-4">
            <h3 class="text-2xl text-center text-gray-500 font-semibold mb-5">Conheça mais resorts</h3>

            <div class="grid grid-cols-4 grid-rows-2 gap-6">
                <div class="relative bg-red-200 col-span-2 row-span-2 rounded-lg overflow-hidden ">
                    <div class="absolute bottom-0 pl-4 pb-4 text-white-600 font-bold">
                        Beach Park Resort
                    </div>
                    <img src="https://d18m3re1tsq8hv.cloudfront.net/wp-content/uploads/2019/05/resorts-brasil-pacotes-resorts-promocao-resort-club-med-rio-das-pedras-resort-brasil-club-med-rio-das-pedras-new.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="bg-red-200 col-span-2 rounded-lg overflow-hidden h-40">
                    <img src="https://www.melhoresdestinos.com.br/wp-content/uploads/2019/05/pacote-club-med-rio-das-pedras-capa2019-01-820x430.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="bg-red-200 rounded-lg overflow-hidden">
                    <img src="https://d18m3re1tsq8hv.cloudfront.net/wp-content/uploads/2016/10/resorts-brasil-resort-club-med-rio-das-pedras-area-externa-09.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="bg-red-200 rounded-lg overflow-hidden">
                    <img src="https://magazine.zarpo.com.br/wp-content/uploads/2020/02/conheca-os-15-melhores-resorts-do-brasil_zarpo.jpg" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>




    <div>
        <div class="container mx-auto px-4 mt-5 text-center" style="margin-top: 100px">
            <select name="" id="" class="px-3 py-2 bg-grey-500 rounded-md">
                <option value="">Escolha estado</option>
            </select>
            <select name="" id="" class="px-3 py-2 bg-grey-500 rounded-md">
                <option value="">Escolha cidade</option>
            </select>
            <button class="bg-orange-400 px-3 py-2 rounded-md">Pesquisar</button>
        </div>

    </div>

    <br>
    <br>
    <br>
@endsection
