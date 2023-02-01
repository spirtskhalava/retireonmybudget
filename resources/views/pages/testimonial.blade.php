@extends('layouts.default')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2><?=$testimonial->title?></h2>
    <span><?=$testimonial->subtitle?></span>
  </div>
</div><!-- End Breadcrumbs -->

<section id="testimonial" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="<?=$testimonial->image?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <p>
            <?=$testimonial->description?>
        </p>
      </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
          <a class="btn btn-primary" href="/testimonials">Read more testimonials</a>
        </div>
    </div>

  </div>
</section>

@stop