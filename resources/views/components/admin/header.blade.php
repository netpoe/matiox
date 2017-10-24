<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4 header-left">
        <div>
          <a href="#" class="logo-wrapper">
            Matiox Deco
          </a>
        </div>
      </div>
      <div class="col-4 header-center"></div>
      <div class="col-4 header-right"></div>
    </div>
  </div>
</header>

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
