@extends('layouts.admin.auth')

@push('head-link')
  <link href="/css/admin/auth/login.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container-sm">
    <h1>Regístrate</h1>
    <form method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}

      <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Correo electrónico</label>

        <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </fieldset>

      <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Contraseña</label>

        <input id="password" type="password" class="form-control form-control-lg" name="password" required>

        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </fieldset>

      <fieldset class="form-group">
        <label for="password-confirm">Confirmar contraseña</label>

        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required>
      </fieldset>

      <fieldset class="form-group">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Registrate <i class="icon-chevron-right"></i></button>
      </fieldset>
    </form>
  </div>
@endsection
