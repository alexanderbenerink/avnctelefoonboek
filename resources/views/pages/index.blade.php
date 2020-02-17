@extends('layouts.master')
<?php
use App\TelefoonBoek;
?>
@section('title')
<title>Telefoonboek</title>
@section('main')

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<body>
    <div class="content">
      <!-- Melding wanneer iets met succes is verwijder/ge-edit.-->
      <div class="col-sm-12">
        @if(session()->get('succes'))
          <div class="alert alert-success">
            {{ session()->get('succes') }}  
          </div>
        @endif
      </div>

      <!-- Begin Jumbotron header -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-5">Telefoonboek beheren</h1>
            <p class="lead">
              Op deze pagina kunt u het telefoonboek beheren. 
              In het onderstaande tabel heeft u inzage op de gegevens uit het telefoon boek en kunt u het vanaf hier beheren.
            </p>
            <!-- Zoek input -->
            <div class="col-md-3">
              <form action="/search" method="GET">
                <div class="input-group">
                  <input class="form-control" type="search" name="search" autocomplete="off" placeholder="Zoek gegevens op.."></input>
                </div>
              </form>
            </div>
        </div>
      </div>
      <!-- Eind Jumbotron header -->

      <!-- Begin Gegevens beheren -->
        <div class="card">
          <div class="card-body" style="background-color: #f5f5f5;">
            <div class="table-responsive">
              <form class="form-inline" action="{{ route('telefoon_boeks.store')}}" method="POST">
                <table class="table">
                @csrf
                  <caption><a class="btn btn-primary" href="{{ url('/toevoegen') }}">Voeg toe</a></caption>
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ID @sortablelink('id', '')</th>
                      <th scope="col">Voornaam @sortablelink('voornaam', '')</th>
                      <th scope="col">Achternaam @sortablelink('achternaam', '')</th>
                      <th scope="col">Telefoonnummer @sortablelink('telefoonnummer', '')</th>
                      <th scope="col" colspan = 2>Acties</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($telefoon_boeks as $telefoonboek)
                    <tr>
                      <th scope="row">{{$telefoonboek->id}}</th>
                      <td>{{$telefoonboek->voornaam}}</td>
                      <td>{{$telefoonboek->achternaam}}</td>
                      <td>{{$telefoonboek->telefoonnummer}}</td>
                      <td><a class="btn btn-info" value="edit" href="{{ route('telefoon_boeks.edit',$telefoonboek->id)}}">Edit</a></td>
                      <td>
                        <form action="{{ route('telefoon_boeks.destroy',$telefoonboek->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" value="delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {!! $telefoon_boeks->appends(\Request::except('page'))->render() !!}
              </form>
            </div>
          </div>
        </div>
      <!-- Eind Gegevens beheren -->
      </div>
    </div>
    <div class="container">
</body>

<!-- <i class="icon-sort"></i> -->

@endsection