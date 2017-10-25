@extends('layouts.admin.dashboard')

@push('head-link')
  <link href="/css/admin/products/catalog.css" rel="stylesheet">
@endpush

@push('sub-header-actions')
  <button class="btn btn-info">Botón 2</button>
@endpush

@section('content')
  <div id="admin-products-categories-index">
    <div class="products-wrapper">
      <div class="products-filters">
        <h5>Filtrar productos por</h5>
      </div>
      <div class="products-list-wrapper">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Value</th>
                <th></th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
