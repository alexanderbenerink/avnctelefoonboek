@extends('layouts.master')

@section('title')
<title>Telefoonboek aanpassen</title>

@section('main')

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
        
        <!-- Als velden leeg zijn of invalid (id & telnr., zie controller), geef error. -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        
        <!-- Weergeef bericht als de gegevens met succes zijn opgeslagen of verwijderd. 'success' is gedefinieerd in TelefoonBoekController-->
        @if(session()->has('succes'))
            <div class="alert alert-success">
                {{ session()->get('succes') }}
            </div>
        @endif
        
        <!-- Header -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Aanpassen</h1>
                <p class="lead">Pas in het onderstaande tabel de gegevens in.</p>
            </div>
        </div>

        <!-- Formulier waar je de gegevens kan aanpassen -->
            <div class="card">
                <div class="card-body">
                    <div>
                        <form method="post" action="{{ route('telefoon_boeks.update', $telefoon_boeks->id) }}">
                        @method('PATCH')
                        @csrf
                            <table class="table table-borderless">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Voornaam</th>
                                    <th scope="col">Achternaam</th>
                                    <th scope="col">Telefoonnummer</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><input class="form-control" name="id" placeholder="bijv. '1', '2' etc." value="{{ $telefoon_boeks->id }}"></th>
                                    <td><input class="form-control" name="voornaam" placeholder="bijv. John" value="{{ $telefoon_boeks->voornaam }}"></td>
                                    <td><input class="form-control" name="achternaam" placeholder="bijv. Doe" value="{{ $telefoon_boeks->achternaam }}"></td>
                                    <td><input class="form-control" name="telefoonnummer" placeholder="bijv. 06-12345678" value="{{ $telefoon_boeks->telefoonnummer }}"></td>
                                    <td><button type="submit" class="form-control btn-warning" value="update">Update</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@stop