<div class="search-wrapper" id="search-wrapper">
  <header class="search-wrapper-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 header-left">
          <div>
            <input type="search" class="form-control form-control-lg" placeholder="u: p:" autofocus id="search-input">
          </div>
        </div>
        <div class="col-sm-4 header-center"></div>
        <div class="col-sm-4 header-right">
          <nav>
            <button class="btn btn-secondary" id="search-wrapper-close-trigger">Cerrar</button>
          </nav>
        </div>
      </div>
    </div>
  </header>
</div>

<script>
  (function(global){
    var btnSearchTrigger = document.getElementById('btn-search-trigger');
    var btnCloseSearchTrigger = document.getElementById('search-wrapper-close-trigger');
    var searchWrapper = document.getElementById('search-wrapper');
    var searchInput = document.getElementById('search-input');
    var siteWrapper = document.getElementById('site-wrapper');
    btnSearchTrigger.addEventListener('click', function(event){
      siteWrapper.className += ' site-wrapper--move';
      searchWrapper.className += ' search-wrapper--on';
      searchInput.focus();
    });
    btnCloseSearchTrigger.addEventListener('click', function(event){
      siteWrapper.classList.remove('site-wrapper--move');
      searchWrapper.classList.remove('search-wrapper--on');
      searchInput.value = '';
    });
  })(window);
</script>
