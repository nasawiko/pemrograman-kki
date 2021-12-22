
<div class="modal fade" id="report" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">POST TUGAS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- INPUT -->
      <form method="post" action="/posts">
        @csrf
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="title"><i class="fas fa-calendar-alt fa-lg"></i></span>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" placeholder="Title" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="slug"><i class="fas fa-calendar-alt fa-lg"></i></span>
          <input type="text" class="form-control  @error('slug') is-invalid @enderror" placeholder="slug" id="slug" name="slug" required autofocus value="{{ old('slug') }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="categories_id"><i class="fas fa-calendar-alt fa-lg"></i></span>
          <select class="form-select" name="categories_id" value="{{ old('division') }}">
            <option selected>Division</option>
            <option value="1">Mekanikal</option>
            <option value="2">Elektrikal</option>
            <option value="3">HVAC</option>
            <option value="4">Elektronika</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="posts_id"><i class="fas fa-calendar-alt fa-lg"></i></span>
          <input type="text" class="form-control" value="{{ $posting->id ?? 'none' }}" placeholder="posts_id" id="posts_id" name="posts_id" disabled>
        </div>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-audio-description fa-lg"></i></span>
          <textarea class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" aria-label="With textarea" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
          @error('deskripsi')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <!-- END INPUT -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">submit</button>
      </div>
   
    </div>
  </div>
</div>
</form>




