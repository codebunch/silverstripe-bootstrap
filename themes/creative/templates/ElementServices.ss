<section <% if $LinkID %>id="$LinkID" <% end_if %>>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">$Title</h2>
        <hr class="my-4">
      </div>
    </div>
  </div>
  <div class="container"> 
    <div class="row">
      <% loop $Service %>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="$Icon"></i>
            <h3 class="mb-3">$Title</h3>
            <p class="text-muted mb-0">$Description</p>
          </div>
        </div>
      <% end_loop %>
    </div>
  </div>
</section>