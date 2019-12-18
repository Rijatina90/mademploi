<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $offre->id }}">
  Pustuler
</button>
@if (\Session::has('success'))
    @if ( \Session::get('success.id_offre') == $offre->id)
      <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success.message') !!}</li>
        </ul>
    </div>
    @endif
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter{{ $offre->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="{{ route('posttule') }}"  method="post">
        {{csrf_field()}}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">
            <strong>Postuler</strong>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Material form contact -->
                
            <input type="hidden" id="id_offre" name="id_offre" value="{{ $offre->id }}">
            <!-- Name -->
            <div class="form-group row mt-3">
              <label class="col-sm-3 col-form-label text-left" for="nom_complet">Nom complet :</label>
              <div class="col-sm-9">
                <input type="text" id="nom_complet" name="nom_complet" class="form-control">
              </div>
            </div>
            <!-- Telephone -->
            <div class="form-group row">
              <label class="col-sm-3 col-form-label text-left" for="telephone">Telephone :</label>
              <div class="col-sm-9">
                <input type="text" id="telephone" class="form-control" name="telephone">
              </div>
            </div>
            <!-- cv -->
            <div class="form-group row">
              <label class="col-sm-3 col-form-label text-left" for="cv">Cv</label>
              <div class="col-sm-9">
                <input type="text" id="cv" class="form-control-file" name="cv">
              </div>
            </div>
            {{-- E-mail --}}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label text-left" for="email">E-mail :</label>
            <div class="col-sm-9">
              <input type="email" id="email" class="form-control" name="email">
            </div>
          </div>
          {{-- Message --}}
          <div class="form-group row">
            <label class="col-sm-3 col-form-label text-left" for="message_motivation">Message :</label>
            <div class="col-sm-9">
              <textarea id="message_motivation" name="message_motivation" class="form-control md-textarea" rows="3"></textarea>
            </div>
          </div>
          <!-- Material form contact -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>