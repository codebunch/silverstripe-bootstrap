<section class="p-0" <% if $LinkID %>id="$LinkID" <% end_if %> >
  <div class="container-fluid p-0">
    <div class="row no-gutters popup-gallery">
      <% loop $Portfolio %>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="$FullSizeImage.url">
            <img class="img-fluid" src="$Thumbnail.url" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  $Category
                </div> 
                <div class="project-name">
                  $ProjectName
                </div>
              </div>
            </div>
          </a>
        </div>
      <% end_loop %>
    </div>
  </div>
</section>