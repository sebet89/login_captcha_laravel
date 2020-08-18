@extends('layouts.app')

@section('title', 'Meu Perfil')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meu Perfil') }}</div>

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" value="{{ auth()->user()->name }}" name="name"
                            placeholder="Nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" value="{{ auth()->user()->email }}" name="email"
                            placeholder="E-mail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="password" placeholder="Senha" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm_senha">Confirmar Senha</label>
                            <input type="password" name="confirm_senha" placeholder="Confirmar Senha" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info float-right">Atualizar Perfil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
