@extends('layouts.main')

@section('title', 'Jacson Eventos')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET" class="search-form">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </form>        
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <div id="cards-container" class="row">
            @php
                $count = 0;
            @endphp
            @foreach ($events as $event)
                @if ($count < 9)
                    @if ($count % 2 == 0)
                        <div class="w-100 d-md-none"></div>
                    @endif
                    <div class="card col-md-2 col-sm-6">
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">{{ count($event->users) }} Participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">Informações</a>
                        </div>
                    </div>
                @endif
                @php
                    $count++;
                @endphp
            @endforeach
            @if (count($events) == 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>
    </div>


@endsection
