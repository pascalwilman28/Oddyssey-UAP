<div class="container">
    <form class="d-flex" method="GET" action="/find">
      <input class="form-control me-2" name="keyword" type="search" autocomplete="off" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary" type="submit">Search</button>
    </form>
    @error('keyword')
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="required-field">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @enderror
</div>