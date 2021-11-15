<?php
get_header();
?>
<div class="hero"></div>
<div class="container-fluid intro" id="about">
    <h1 class="chain">175 Years Of Service</h1>
    <p class="text-intro">The Coatsi staff guarantees its customers a high quality service, thanks to the long experience gained over the years and the constant updating of the owners.</p>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 section-1 nopadding" id="work">
        </div>
        <div class="col-md-4 section-text nopadding">
            <h2 class="frame">Oldest Bike Shop In London</h2>
            <p class="frame">Our store offers the best of the production of the largest bicycle brands such as: Atala, Whistle, Fuji, KTM, Kross, Lapierre and others. 
            </p>
            <div class="small-featured-img seat-red">
                <div class="arrow"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 section-text nopadding">
            <h2 class="mech">Quality and Tradition</h2>
            <p class="mech">Choosing our store means choosing a highly qualified service, 
courtesy and competence: our experts will always be able to provide you with advice to identify the most suitable solution for every need. </p>
            <div class="thin-sep"></div>
        </div>
        <div class="col-md-8 section-2 nopadding">
        </div>
    </div>
</div>
<div id="contact" class="container">
    <h2 class="logo-header">ride safe, ride better</h2>
</div>
<article>

  <?php
  if (have_posts()) {

    while (have_posts()) {

      the_post();
      the_content();
    }
  }
  ?>

</article>

<?php
get_footer();
?>