@extends('etudiants.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Liste</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/etudiants/create') }}" class="btn btn-success btn-sm" title="Add New etudiants">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajout Etudiant
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Semestre</th>
                                        <th>Matiere</th>
                                        <th>Note1</th>
                                        <th>Examen</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($etudiant as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nom }}</td>
                                        <td>{{ $item->Prenom }}</td>
                                        <td>{{ $item->Semestre }}</td>
                                        <td>{{ $item->Matiere }}</td>
                                        <td>{{ $item->Note1 }}</td>
                                        <td>{{ $item->Examen }}</td>            
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection