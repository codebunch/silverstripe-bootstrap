<section <% if $LinkID %>id="$LinkID" <% end_if %>>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">$Title</h2>
        <hr class="my-4">
      </div>
    </div>
    <div class="mb-5">$SmallDescription</div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center">
        <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
        <p>$SiteConfig.Mobile</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
        <p>
          <a href="mailto:$SiteConfig.Email">$SiteConfig.Email</a>
        </p>
      </div>
    </div>
  </div>
</section>