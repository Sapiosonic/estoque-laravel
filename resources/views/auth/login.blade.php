@extends('principal')

@section('conteudo')

    <h1 class="text-xl font-bold mb-4">Bem-vindo de volta!</h1>

    <form action="{{ route('login') }}" method="post">
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" class="form-input">
        <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Senha" class="form-input">

        <div class="flex items-start justify-center space-x-2 pt-2">
                <a href="/" class="btn-secondary flex-l">Login</a>
                <button type="submit" class="btn-primary flex-1">Registrar</button>
            </div>
            {{-- errors --}}
            @if($errors->any())
                <div class="bg-red-50 px-4 py-2 mt-2 rounded-xl">
                    <ul class="text-sm text-red-500 pt-2 font-medium">
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </form>
@endsection
