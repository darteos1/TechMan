@extends('layouts.app')

@section('title', 'Listagem de Equipamento')

@section('styles')
<link rel="stylesheet" href="{{ url('styles\equipamentos\index.css') }}">
@endsection

@section('content')
    <ul class="pe-5" style="list-style-type: none;">
        <li>
            <div class="d-flex">
                <img class="me-3 equipIMG" src="{{ url('image\equipamentos\Torno_Mecanico_500mm.png') }}" alt="Imagem de um equipamento">
                <div class="flex-column">
                    <h3 class="fw-semibold fst-italic" style="color: grey;">Equipamento de Automação Industrial</h3>
                    <p class="fst-italic" style="color: grey; width: 75%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare, magna vitae volutpat fringilla, turpis tortor scelerisque libero, eu lobortis nisi eros ultrices lacus. Duis nec feugiat arcu. In rhoncus ut est sed semper. Nam est justo, condimentum et turpis a, gravida pulvinar est. Nunc venenatis tincidunt justo, sit amet porttitor lorem ultricies dignissim. Nullam nibh dui, pulvinar eu elit at, eleifend tincidunt turpis. Cras non sapien orci. Maecenas ut rhoncus nunc.</p>
                    <div class="flex-row">
                        <button style="border-style: none;"><img class="equipBTN" src="{{ url('image\equipamentos\icons\comentario.png') }}" alt=""></button>
                        <button style="border-style: none;"><img class="equipBTN" src="{{ url('image\equipamentos\icons\deletar.png') }}" alt=""></button>
                    </div>
                </div>
            </div>
            <hr class="equipHR">
        </li>
    </ul>
@endsection