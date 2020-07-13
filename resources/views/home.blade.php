@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{--Você está logado!--}}

                    <div class="card-group">
                        <div class="card text-white bg-danger">
                            <div class="card-body">
                                <h6 class="card-title">Estudos atrasados</h6>
                                <p class="card-text text-center">@if(isset($estudosEmAtraso)) {{ $estudosEmAtraso }} @else 0  @endif</p>
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h6 class="card-title">Estudos em andamento</h6>
                                <p class="card-text text-center">@if(isset($estudosEmAndamento)) {{ $estudosEmAndamento }} @else 0  @endif</p>
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h6 class="card-title">Estudos concluídos</h6>
                                <p class="card-text text-center">@if(isset($estudosConcluidos)) {{ $estudosConcluidos }} @else 0  @endif</p>
                                {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection