@extends('layouts.master')

@section('title')
<title>Telefoonboek</title>

@section('main')

<body>
  <div class="flex-center position-ref full-height">
    <div class="content">
      <!-- Weergeef bericht als de gegevens met succes zijn opgeslagen of verwijderd. 'success' is gedefinieerd in TelefoonBoekController-->

      <div class="col-sm-12">
        @if(session()->get('succes'))
          <div class="alert alert-success">
            {{ session()->get('succes') }}  
          </div>
        @endif
      </div>

      <!-- Header -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Telefoonboek beheren</h1>
            <p class="lead">
              Op deze pagina kunt u het telefoonboek beheren. 
              In het onderstaande tabel heeft u inzage op de gegevens uit het telefoon boek en kunt u het vanaf hier beheren.
            </p>
        </div>
        <!-- begin van formulier form. Zoek knop voor formulier. -->
        <form class="form-inline" action="{{ route('telefoon_boeks.store')}}" method="post">
        <!-- <input class="form-control mr-sm-1" type="search" placeholder="Zoek gebruiker" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoek</button> -->
      </div>

      <!-- Gegevens beheren -->
      <div class="card">
        <div class="card-body">
          <div>
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
              <a class="btn btn-info" value="edit" href="{{ route('telefoon_boeks.edit',$telefoonboek->id)}}">Edit</a>
              </td>
              <td>
                <form action="{{ route('telefoon_boeks.destroy',$telefoonboek->id)}}" method="POST">
                @csrf
                @method('DELETE')
                  <button class="btn btn-danger" value="delete" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
              </tr>
              @endforeach
            </tbody>
            </table>
            </form>
            <!-- Eind van formulier. -->
            <a class="btn btn-primary" href="{{ url('/telefoonboek') }}">Voeg toe</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
@endsection