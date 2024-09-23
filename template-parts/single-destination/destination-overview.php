<!-- If the Section is appear in single Destination page example Nepal then:

add class bg-white section-padding-y

-->

<section class="destination-overview section-gap <?php if (!is_page('nepal')) echo ' bg-white section-padding-y'; ?>"
  id="overview">
  <div class=" container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="do-content">
          <div class="section-title">
            <h2>Wonders and
              <span>Overview of Nepal</span>
            </h2>
          </div>
          <div class="inner-content">
            <div class="text-wrapper text-expandable">
              <div class="text-read-more ">
                <p>Nepal is a beautiful landlocked country located in South Asia between India and China. Nepal lies in
                  the southern part of the Himalayas and occupies 8 high mountains out of the 14 highest peaks that are
                  above 8000m/29031.69291ft including Mount Everest at 8848.86m. Nepal is well known for being the
                  world's richest country in terms of high Mountains, amazing natur</p>

                <p>Nepal is a beautiful landlocked country located in South Asia between India and China. Nepal lies in
                  the southern part of the Himalayas and occupies 8 high mountains out of the 14 highest peaks that are
                  above 8000m/29031.69291ft including Mount Everest at 8848.86m. Nepal is well known for being the
                  world's richest country in terms of high Mountains, amazing natur</p>
              </div>
            </div>
            <a href="#" class="bh-btn bh-btn-underlined handle-client-read-more">Load More</a>

            <div class="highlights">
              <h5>Nepal Highlights</h5>
              <ul>
                <li class="d-flex justify-content-start align-item-center">
                  <span>Capital</span>
                  <span>Kathmandu</span>
                </li>
                <li class="d-flex justify-content-start align-item-center">
                  <span>Government</span>
                  <span>Federal democratic republic</span>
                </li>
                <li class="d-flex justify-content-start align-item-center">
                  <span>Religion</span>
                  <span>Hindu 82%, Buddhist 10%, Islam 4%, Kirati 3%, Christian 2%</span>
                </li>
                <li class="d-flex justify-content-start align-item-center">
                  <span>Population</span>
                  <span>~30 Million</span>
                </li>
                <li class="d-flex justify-content-start align-item-center">
                  <span>Life expectancy</span>
                  <span>72 yrs</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="do-image"
          style="background:url(<?php echo get_parent_theme_file_uri()?>/assets/images/placeholder-33.png) no-repeat center/cover fixed">
          <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/image-shape.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>