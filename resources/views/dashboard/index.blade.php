@extends('template.base')

@section('title', 'Histórico de vendas')

<style>
    .invalid {
        color: #fc3343;
        padding-left: 1px;
    }
</style>

@section('content')
    <div class="row g-3 my-2">
        <div class="card border border-0">
            <div class="card-header bg-white">
                <h5 class="h5 my-1">Histórico de Vendas Por Marca</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Marca</label>
                            <select id="brand_id" class="form-select">
                                <option value="">Selecione</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid d-none">
                                Selecione a marca.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Data Inicial</label>
                            <input type="date" class="form-control" id="start_date">
                            <div class="invalid d-none"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="form-label">Data Final</label>
                            <input type="date" class="form-control" id="end_date">
                            <div class="invalid d-none"></div>
                        </div>
                    </div>


                    <div class="row mt-2 text-center">
                        <div>
                            <button id="btnSubmit" type="button" class="btn btn-lg btn-dark">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="card border border-0">
            <div class="card-header bg-white">
                <h3 class="fs-4 my-2 text-center">HeatMap</h3>
            </div>
            <div class="card-body p-1 text-center">

                <div class="spinner-grow mt-3 primary-text d-none" style="width: 20rem; height: 20rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="col text-center" id="cardBody">
                    Preencha os filtros para gerar o gráfico.
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/heat-map.js') }}"></script>
@endsection
