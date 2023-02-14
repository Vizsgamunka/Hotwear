@extends('layouts.app')

@section('head')
<meta name="modell" content="{{ $modell->modell_id }}">
<script type='module' src="{{asset('script/termek.js')}}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <img class="card-img-top" src="{{ url($modell->kep) }}" alt="{{ $modell->nev }}">
                <div class="card-body">
                    <h5 id="m-nev" class="card-title"></h5>
                    <p class="card-text">Leírás: {{ $modell->leiras }}</p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="text-center"><i id="ar"></i></h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="row">
                            <div class="col-5">
                                <label for="meretek">Méret</label>
                                <select id='meretek' class="form-control"></select>
                            </div>

                            <div class="col-3">
                                <label for="mennyiseg">Mennyiség</label>
                                <input id="mennyiseg" type="number" class="form-control" step="1" min="1" value="1"></input>
                            </div>
                            <div class="col-4">
                                <label for="gomb"> </label>
                                <button type="button" id="gomb" class="btn btn-primary btn-sm">Kosárba</button>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Szezon: {{ $modell->szezon }}</li>
                    <li class="list-group-item">Tervezte: {{ $modell->tervezoObj->nev }}</li>
                    <li class="list-group-item">kategória: {{ $modell->kategoriaObj->nev }}</li>
                    <li class="list-group-item">Maximális rendelhető: {{ $modell->max_mennyiseg }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection