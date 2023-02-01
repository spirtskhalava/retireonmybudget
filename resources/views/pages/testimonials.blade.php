@extends('layouts.default')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Our Community members testimonials</h2>
  </div>
</div><!-- End Breadcrumbs -->

<section id="testimonial" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row mb-5">
      <div class="col-12 content mb-3">
        <p>Retire on My Budget would like to sincerely thank all of those clients who took the time to tell their inspiring stories here on our website about how Retire on My Budget helped them to succeed in making the most important decision of their lives to transform all their sorrows into joy. Dreams are made possible with Retire on My Budget" One can never discover new oceans until one has the courage to lose sight of the shore."
        </br>~ S.O.Q.</p>
      </div>
      <div class="col-12 content">
        <iframe style="width: 100%; height: 500px;" src="https://www.youtube.com/embed/eovoar9ZSR4"></iframe>
      </div>
    </div>
    <?php foreach ($testimonials as $testimonial) { ?>
    <div class="row mb-3">
        <div class="col-12">
            <h3><?=$testimonial->title?></h3>
            <span><?=$testimonial->subtitle?></span>
        </div>
    </div>
    <div class="row mb-5">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="<?=$testimonial->image?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <p>
            <?=$testimonial->description?>
        </p>
      </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 mb-5" style="background: #08a2fc; height: 3px;"></div>
    </div>
    <?php } ?>
  </div>
</section>

@stop