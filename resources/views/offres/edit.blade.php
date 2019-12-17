@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Modifier offres</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('offres.index') }}"> Retour</a>
	        </div>
	    </div>
	</div>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <strong>Whoops!</strong>
				Il y a eu quelques problèmes avec votre saisie.<br><br>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
		{!! Form::open(['action' => ['OffresController@update', $offre->id], 'method' => 'POST'])	!!}
		
				@csrf
        		@method('PUT')
        		<div class="container">
        			<div class="row">
        			<div class="col-xs-4 col-sm-4 col-md-4" hidden>
						<div class="form-group">
			                <strong>Id user:</strong>
			                <input type="text"  value="{{ $offre->id_user}}" name="id user" class="form-control" placeholder="Id user">
	            		</div>
					</div>
					
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Titre:</strong>
				                <input type="text" value="{{ $offre->titre}}" name="titre" class="form-control" placeholder="Titre du poste">
		            		</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Lieu:</strong>
				                <input type="text" value="{{ $offre->lieu_de_travail }}"name="lieu_de_travail" class="form-control" placeholder="Lieu de travail">
		            		</div>
						</div>
					
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Secteur:</strong>
				                <input type="text" value="{{ $offre->secteur}}"name="secteur" class="form-control" placeholder="Secteur">
		            		</div>
						</div>
											
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Nombre:</strong>
				                <input type="text" value="{{ $offre->nombre_de_poste}}"name="nombre_de_poste" class="form-control" placeholder="Nombre de poste">
		            		</div>
						</div>
						
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
								<strong>Date de publication:</strong>
				              <div class='input-group date' id='datetimepicker1'>
				              	<input type="text" value="{{ $offre->date_de_publication}}"name="date_de_publication" class="form-control" placeholder="Date de publication">
				              	<span class="input-group-addon">
				              		<span class="glyphicon glyphicon-calendar"></span>
				              	</span>
				              </div>  
		            		</div>
						</div>
						

						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
								<strong>Date limite:</strong>
				              <div class='input-group date' id='datetimepicker2'>
				              	<input type="text" value="{{ $offre->date_limite}}"name="date_limite" class="form-control" placeholder="Date limite de candidature">
				              	<span class="input-group-addon">
				              		<span class="glyphicon glyphicon-calendar"></span>
				              	</span>
				              </div>  
		            		</div>
						</div>
						
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Profil:</strong>
				                <input type="text" value="{{ $offre->profil_recherche}}"name="profil_recherche" class="form-control" placeholder="Profil à rechercher">
		            		</div>
						</div>
						
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Type de contrat:</strong>
				                <input type="text" value="{{ $offre->type_de_contrat}}"name="type_de_contrat" class="form-control" placeholder="ex:CDI">
		            		</div>
						</div>

						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="form-group">
				                <strong>Description:</strong>
				                <textarea class="form-control" style="height:150px" name="description_de_poste" placeholder="Description du poste">{{ $offre->description_de_poste}}</textarea>
		            		</div>
						</div>
						
						<div class="col-xs-4 col-sm-4 col-md-4 text-center">
		                	<button type="submit" class="btn btn-primary">Editer votre article</button>
		        		</div>
		        	</div>
	        	</div>
	        </div>
		        		{!! Form::close() !!}	        	
@endsection
