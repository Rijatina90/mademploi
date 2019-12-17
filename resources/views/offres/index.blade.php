@extends('layouts.app')

@section('content')
	
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div align="right">
                <a class="btn btn-success" href="{{ route('offres.create') }}"> Créer nouvelle offre</a>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Titre</th>
                        <th>Lieu</th>
                        <th>Type de contrat</th>
                        <th>Secteur</th>
                        <th>Nombre de poste</th>
                        <th>Description</th>
                        <th>Date de publication</th>
                        <th>Date fin candidature</th>
                        <th>Profil recherché</th>
                        <th width="500px;">Action</th>
                    </tr>
                    @foreach ($offres as $offre)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $offre->titre }}</td>
                        <td>{{ $offre->lieu_de_travail }}</td>
                        <td>{{ $offre->type_de_contrat }}</td>
                        <td>{{ $offre->secteur }}</td>
                        <td>{{ $offre->nombre_de_poste }}</td>
                        <td>{{ $offre->description_de_poste }}</td>
                        <td>{{ $offre->date_de_publication }}</td>
                        <td>{{ $offre->date_limite }}</td>
                        <td>{{ $offre->profil_recherche }}</td>
                        <td>
                            <form action="{{ route('offres.destroy',$offre->id) }}" method="POST">
               
                                <a class="btn btn-info" href="{{ route('offres.show',$offre->id) }}">Voir</a>
                
                                <a class="btn btn-primary" href="{{ route('offres.edit',$offre->id) }}">Editer</a>
               
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    {!! $offres->links() !!}
@endsection