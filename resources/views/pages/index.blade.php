@extends('layouts.master')

@section('title')
<title>Telefoonboek</title>

@section('main')
<!-- <div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Telefoonboek</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Voornaam</td>
          <td>Achternaam</td>
          <td>Telefoonnummer</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($telefoon_boeks as $telefoonboek)
          <tr>
            <td>{{$telefoonboek->id}}</td>
            <td>{{$telefoonboek->voornaam}}</td>
            <td>{{$telefoonboek->achternaam}}</td>
            <td>{{$telefoonboek->telefoonnummer}}</td>
            <td>
            <button class="btn btn-info" value="edit"></button>
            </td>
            <td>
            <button class="btn btn-danger" value="delete"></button>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div> -->

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
        <!-- Weergeef bericht als de gegevens met succes zijn opgeslagen of verwijderd. 'success' is gedefinieerd in TelefoonBoekController-->
        @if(session()->has('succes'))
            <div class="alert alert-success">
                {{ session()->get('succes') }}
            </div>
        @endif
        <!-- Header -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Telefoonboek beheren</h1>
                <p class="lead">
                  Op deze pagina kunt u het telefoonboek beheren. 
                  In het onderstaande tabel heeft u inzage op de gegevens uit het telefoon boek en kunt u de gegevens beheren.
                </p>
            </div>
        </div>

        <!-- Formulier waar je de gegevens kan invoeren -->
            <div class="card">
                <div class="card-body">
                    <div>
                        <form action="{{ route('telefoon_boeks.store')}}" method="post">
                            <table class="table table-borderless table-striped">
                            @csrf
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Voornaam</th>
                                    <th scope="col">Achternaam</th>
                                    <th scope="col">Telefoonnummer</th>
                                    <th scope="col" colspan = 2>Acties</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($telefoon_boeks as $telefoonboek)
                                    <tr>
                                      <td>{{$telefoonboek->id}}</th>
                                      <td>{{$telefoonboek->voornaam}}</td>
                                      <td>{{$telefoonboek->achternaam}}</td>
                                      <td>{{$telefoonboek->telefoonnummer}}</td>
                                      <td>
                                        <button class="btn btn-info" value="edit">Edit</button>
                                      </td>
                                      <td>
                                        <button class="btn btn-danger" value="delete">Verwijder</button>
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </form>
                        <a class="btn btn-primary" href="{{ url('/telefoonboek') }}">Voeg toe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection