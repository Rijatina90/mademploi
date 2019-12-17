@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-lg-4 margin-tb">
            <div class="pull-left">
                <h2> Voir offre</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('offres.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Titre:</strong>
                    {{ $offre->titre }}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Lieu de travail:</strong>
                    {{ $offre->lieu_de_travail }}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Type de contrat:</strong>
                    {{ $offre->type_de_contrat }}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Secteur:</strong>
                    {{ $offre->secteur }}
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Desciption:</strong>
                    {{ $offre->description_de_poste }}
                </div>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Nombre de poste:</strong>
                    {{ $offre->nombre_de_poste }}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Date de publication:</strong>
                    {{ $offre->date_de_publication }}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Date limite:</strong>
                    {{ $offre->date_limite }}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Profil rechercher:</strong>
                    {{ $offre->profil_recherche }}
                </div>
            </div>
        </div>
    </div>
@endsection