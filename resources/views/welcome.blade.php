@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="card text-center" >
          <div class="card-body">
            <h5 class="card-title">Trouvez l’entreprise qui vous propose le meilleur salaire !</h5>
            <h2 class="card-text"><strong>Trouvez rapidement un emploi</strong></h2>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Insérer des mots-clés pour chercher" aria-label="" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Rechercher</span>
                </div>
            </div>
          </div>
        </div>
        
            <div class="card text-center bg-success">
              <div class="card-body">
                <h5 class="card-title">Facilitez votre recherche</h5>
                <h4 ><strong>Télécharger votre CV</strong></h4>
                <h6> On tranmset votre CV aux recruteurs</h6>
                <a href="#" class="btn btn-primary">Télécharger votre CV ici</a>
              </div>
           </div>
      </div>
     </div>
     <h4><strong>LISTES DES OFFRES</strong></h4>
            <div class="container"> 
              <div class="row justify-content-center">
                  @if(count($offres) >= 1)
                      @foreach($offres as $offre)
                      <div class="card col-sm-4">
                        <div class="card-body">
                          <h6><a href="/offres"><strong><u>{{$offre->titre}}</u></strong></a></h6>
                          <small>Lieu de travail:{{$offre->lieu_de_travail}}</small><br>
                          <small>Type de contrat:{{$offre->type_de_contrat}}</small><br>
                          <small>Secteur:{{$offre->secteur}}</small><br>
                          <small>Date limite de candidature:{{$offre->date_limite}}</small><br>
                          <small>Nombre de poste:{{$offre->nombre_de_poste}}</small>
                          <h6><u><strong>Déscription de poste</strong></u></h6>
                          <ul>
                            <li>{{$offre->description_de_poste}}</li>
                          </ul>
                          <small>Profil à cherché:{{$offre->profil_recherche}}</small>
                          <hr>
        
                        </div>
                      </div>
                        @endforeach
                      </div>
                       @else
                      <p>Aucune offres disponible !</p>
                   @endif
          </div>
        <footer>
          
        </footer>
   
@endsection
