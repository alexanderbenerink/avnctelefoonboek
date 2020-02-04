@extends('layouts.master')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Voeg toe</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('telefoon_boeks.store') }}">
          @csrf
          <div class="form-group">    
              <label for="id">ID</label>
              <input type="text" class="form-control" name="id"/>
          </div>

          <div class="form-group">
              <label for="voornaam">Voornaam</label>
              <input type="text" class="form-control" name="voornaam"/>
          </div>

          <div class="form-group">
              <label for="achternaam">Achternaam</label>
              <input type="text" class="form-control" name="achternaam"/>
          </div>
          <div class="form-group">
              <label for="telefoonnummer">Telefoonnummer</label>
              <input type="text" class="form-control" name="telefoonnummer"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Voeg toe</button>
      </form>
  </div>
</div>
</div>
@endsection