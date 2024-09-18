@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Saldos Fiducredicorp Vista</h1>
        <p>Útima actualización XXXXX</p>
        
        @foreach($trusts as $trust)
        <div class="card p-2 shadow">
          <h3>{{ $trust->name }} | {{ $trust->code }}</h3>
          {{ $trust->totalBalance() }}
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Fic</th>
                <th>Saldo Total</th>
                <th>Saldo Disponible</th>
              </tr>
            </thead>
            <tbody>
              @foreach($trust->cifs as $cif)
              <tr>
                <td>
                  <h5>{{ $cif->name }}</h5>
                  {{ $cif->code }}
                </td>
                <td>
                  {{ $cif->lastBalance()->total ?? 'NA' }}
                </td>
                <td>
                  {{ $cif->lastBalance()->available ?? 'NA' }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
