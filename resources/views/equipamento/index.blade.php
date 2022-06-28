@extends('layouts.app')

@section('title', 'Listagem de Equipamento')

@section('styles')
<link rel="stylesheet" href="{{ url('styles\equipamentos\index.css') }}">
@endsection

@section('content')
    <ul style="padding: 0rem 13rem; list-style-type: none;">
        <li>
            <div class="d-flex">
                <img class="me-3" src="{{ url('image\equipamentos\Torno_Mecanico_500mm.png') }}" alt="Imagem de um equipamento">
                <div class="flex-column flex-grow-1" style="margin-right: 6rem;">
                    <h3 class="fs-5 fw-semibold" style="color: #44babc;">Equipamento de Automação Industrial</h3>
                    <p class="fw-bold" style="font-size: small; ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, quos eius! Aspernatur incidunt iure consequuntur alias quibusdam debitis atque optio laboriosam perferendis modi! Nemo beatae pariatur nobis accusantium necessitatibus? Voluptate?</p>
                </div>
                <div class="flex-column">
                    <button class="px-0" style="border-style: none;"><img style="width: 2rem; height: auto; border-style: none;" src="{{ url('image\equipamentos\icons\trash.svg') }}" alt=""></button>
                    <button class="px-0" style="border-style: none;"><img style="width: 2rem; height: auto; border-style: none;" src="{{ url('image\equipamentos\icons\message.svg') }}" alt=""></button>
                </div>
            </div>
            <hr class="equipHR">
        </li>
        <li>
            <div class="d-flex">
                <img class="me-3" src="{{ url('image\equipamentos\Torno_Mecanico_500mm.png') }}" alt="Imagem de um equipamento">
                <div class="flex-column flex-grow-1" style="margin-right: 6rem;">
                    <h3 class="fs-5 fw-semibold" style="color: #44babc;">Equipamento de Automação Industrial</h3>
                    <p class="fw-bold" style="font-size: small; ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, quos eius! Aspernatur incidunt iure consequuntur alias quibusdam debitis atque optio laboriosam perferendis modi! Nemo beatae pariatur nobis accusantium necessitatibus? Voluptate?</p>
                </div>
                <div class="flex-column">
                    <button class="px-0" style="border-style: none;"><img style="width: 2rem; height: auto; border-style: none;" src="{{ url('image\equipamentos\icons\trash.svg') }}" alt=""></button>
                    <button class="px-0" style="border-style: none;"><img style="width: 2rem; height: auto; border-style: none;" src="{{ url('image\equipamentos\icons\message.svg') }}" alt=""></button>
                </div>
            </div>
            <hr class="equipHR">
        </li>
        @foreach($equipamentos as $equipamento)
            @if($equipamento->status == 'ativo')
                <li>
                    <div class="d-flex">
                        <img class="me-3" src='{{ asset("image/equipamentos/"."$equipamento->foto") }}' alt="Imagem de um equipamento">
                        <div class="flex-column flex-grow-1" style="margin-right: 6rem;">
                            <h3 class="fs-5 fw-semibold" style="color: #44babc;">{{ $equipamento->nome }}</h3>
                            <p class="fw-bold" style="font-size: small; ">{{ $equipamento->descricao }}</p>
                        </div>
                        <div class="flex-column" style="max-width: 2rem;">
                            <!-- Comentado para quando implementado -->
                            {{-- @if(Auth::user()->permissao == 'admin') --}}
                                <button class="px-0" style="border-style: none;" type="button" data-bs-toggle="modal" data-bs-target="#ModalExcluir">
                                    <img style="width: 2rem; height: auto; border-style: none;" src="{{ asset('image/equipamentos/icons/trash.svg') }}" alt="">
                                </button>
                            {{-- @endif --}}
                            <button class="px-0" style="border-style: none;">
                                <img style="width: 2rem; height: auto; border-style: none;" src="{{ asset('image/equipamentos/icons/message.svg') }}" alt="">
                            </button>

                            <div class="modal fade" id="ModalExcluir" tabindex="-1" aria-labelledby="ModalExcluir" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Exclusão de Equipamento</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Atenção! Tem certeza que deseja excluir o equipamento? Essa ação não poderá ser desfeita.</p>
                                        </div>

                                        <div class="modal-footer justify-content-start">
                                            <form action="{{ route('equipamento.destroy', ['equipamento' => $equipamento->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="equipHR">
                </li>
            @endif
        @endforeach
    </ul>
@endsection