@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group">
            <label >Descrição</label>
            <input type="text" class="form-control" placeholder="Entre com uma descrição">
        </div>
        <div class="form-group">
            <label>Cor</label>
            <input type="text" class="form-control" placeholder="Entre com uma cor">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection