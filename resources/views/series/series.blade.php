<x-layout title='Series'>

    <a href="/series/create" class="btn btn-dark mb-2">Adicionar Séries</a>


    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
            <a class="btn btn-danger" href="{{ route('series.destroy', $serie->id) }}">Excluir</a>
        @endforeach


    </ul>
<br>
    <a class="btn btn-primary" href="{{route('series.destroyAll', $serie->id)}}">Escolha qual excluir</a>
</x-layout>
