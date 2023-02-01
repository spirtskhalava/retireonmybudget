@extends('layouts.default')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Subscription Plans</h2>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Popular Courses Section ======= -->
<section id="plans" class="courses">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <p>Choose the plan you need</p>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
            <div class="text-center">
            <img src="/assets/img/plan1.jpg" class="img-fluid" alt="Retire on my budget Plan 1">
            </div>
            <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Plan 1</h4>
                <p class="price">FREE</p>
            </div>

            <h3><a>Basic</a></h3>
            <p>
            1. You will be able to compare worldwide cost of living and data like local salaries, rent, groceries, restaurants, utilities, clothing, transportation, sports and leisure, childcare, buy apartment price and mortgage %. </br>
            2. If you're not sure what city or place you would like to move or retire no problem. You will be able to open the world map and see the cost of living in different countries and cities around the world. 
            </p>
            </div>
        </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="course-item">
            <div class="text-center">
            <img src="/assets/img/plan2.jpg" class="img-fluid" alt="Retire on my budget Plan 2">
            </div>
            <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Plan 2</h4>
                <p class="price">$1.98</p>
            </div>

            <h3><a>Premium</a></h3>
            <p>
            Includes Plan # 1 plus important reports on healthcare, crime, pollution, traffic.  Weather and connecting to cool people like you with similar hobbies, languages, destinations, and monthly budgets coming soon subscribe to get updates.
            </p>
            </div>
        </div>          
        </div> <!-- End Course Item-->
        <div class="col-12 text-center mt-4"><a class="btn btn-primary" href="/register">Register</a></div>

        <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="course-item">
            <img src="/assets/img/plan3.jpg" class="img-fluid" alt="Retire on my budget Plan 3">
            <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Plan 3</h4>
                <p class="price">$25</p>
            </div>

            <h3><a>Unlimited</a></h3>
            <p>
                Includes PLAN # 1, PLAN # 2 and plus ...<br>
                1. Ask experts (both local and abroad)<br>
                2. Find local businesses and abroad<br>
                3. Find housing in your desired destination<br>
            </p>

            <a class="btn btn-primary" href="/register">Register</a>
            </div>
        </div>
        </div>--> <!-- End Course Item-->

    </div>

    </div>
</section><!-- End Popular Courses Section -->

@stop