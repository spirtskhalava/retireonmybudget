@extends('layouts.default')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<script defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY', 'AIzaSyA7mbLxbIaMQJH4cU7IoVl-P7hjHNGECiY') }}&libraries=places&callback=initMap"></script>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Find Cool People Like You</h2>
  </div>
</div><!-- End Breadcrumbs -->

<section id="connect-people" class="about">
    <div class="container" data-aos="fade-up">
      <form id="cool-people-form">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <label>Name</label>
              <input class="filter-username form-control" name="filterUsername" type="text"></select>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <label>Destinations</label>
              <select class="filter-cities form-control" name="filterCities[]" multiple="multiple"></select>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-2">
              <label>Origin cities</label>
              <select class="filter-home-cities form-control" name="filterHomeCities[]" multiple="multiple"></select>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-2">
              <label>Gender</label>
              <select class="filter-gender form-control" name="filterGender">
                <option value="">All</option>
                @foreach ($genders as $gender)
                  <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
              </select>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-3 col-md-6 col-12 mt-2">
              <label>Hobbies</label>
              <select class="filter-hobbies form-control" name="filterHobbies[]" multiple="multiple"></select>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-2">
              <label>Languages</label>
              <select class="filter-languages form-control" name="filterLanguages[]" multiple="multiple"></select>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-2">
              <label>Budget</label>
              <select class="filter-budgets form-control" name="filterBudget">
                <option value="">All</option>
                @foreach ($budgets as $budget)
                  @if ($budget->max_amount)
                  <option value="{{ $budget->id }}">{{$budget->min_amount}} - {{$budget->max_amount}}</option>
                  @else
                  <option value="{{ $budget->id }}">{{$budget->min_amount}} +</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-2">
              <button id="filter-search-btn" class="btn btn-primary mt-4" type="button">
                Search
                <div id="filter-search-btn-loading" class="spinner-border" role="status" style="display: none">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </button>
            </div>
        </div>
      </form>
      <div class="row mt-4">
        <div class="col-lg-12">
          <div id="map" style="width: 100%; height: 300px; display: none;"></div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 cool-people-tbl-container" style="">
        </div>
      </div>
    </div>
</section>
@include('pages.chat-box')
@stop

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">

let map;
let service;
let infowindow;
let markers = [];

function initMap() {
  infowindow = new google.maps.InfoWindow();
    map = new google.maps.Map(document.getElementById("map"), {
    minZoom: 2,
  });
}

function createMarker(place) {

  image_url = "/assets/img/red_maker.png";

  const image = {
    url: image_url,
    size: new google.maps.Size(15, 24),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 24),
  };
  const marker = new google.maps.Marker({
    map,
    icon: image,
    position: place.geometry.location,
  });
  google.maps.event.addListener(marker, "click", () => {
    infowindow.setContent("<h5 class='pt-2'><b>" + place.username + "</b></br>" + place.name + "<h5/><a class='btn btn-info chat-toggle' data-id='"+place.user_id+"' data-user='"+place.username+"'>Connect</a>");
    infowindow.open(map, marker);
  });
  markers.push(marker);
}

function setMapOnAll(map) {
  for (let i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

function deleteMarkers() {
  setMapOnAll(null);
  markers = [];
}

function buildMapMakers(places) {
  let count = 0;

  var bounds = new google.maps.LatLngBounds();

  for (var i = places.length - 1; i >= 0; i--) {

      var item = places[i];

      var place = {
        "geometry": {"location": new google.maps.LatLng(item.latitude, item.longitude)},
        "name": item.place,
        "username": item.username,
        "user_id": item.user_id
      };

      bounds.extend(place.geometry.location);
      createMarker(place);
  }

  map.fitBounds(bounds);

  if (places.length > 0) {
    $("#map").show();
  }
  return;
}

$(document).ready(function() {

  $('.filter-cities').select2({
    placeholder: 'Select a City',
    ajax: {
      url: '/cities',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    text: item.name,
                    id: item.city_id
                }
            })
        };
      },
      cache: true
    }
  });
  $('.filter-home-cities').select2({
    placeholder: 'Select a City',
    ajax: {
      url: '/cities',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    text: item.name,
                    id: item.city_id
                }
            })
        };
      },
      cache: true
    }
  });
  $('.filter-hobbies').select2({
    placeholder: 'Select a Hobbie',
    ajax: {
      url: '/hobbies',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    text: item.name,
                    id: item.id
                }
            })
        };
      },
      cache: true
    }
  });
  $('.filter-languages').select2({
    placeholder: 'Select a Language',
    ajax: {
      url: '/languages',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
                return {
                    text: item.name,
                    id: item.id
                }
            })
        };
      },
      cache: true
    }
  });

  $('#filter-search-btn').click(function() {
    
    $("#filter-search-btn-loading").show();

    $.ajax({
      url: "/search-cool-people",
      data: $("#cool-people-form").serialize()
    }).done(function(response) {
      
      let response_parsed = $.parseJSON(response);
      let users = response_parsed['users'];
      let html = "";

      buildMapMakers(response_parsed['places']);

      html += "<table class='table cool-people-tbl'>";
      html += "<thead class=''>";
      html += "<tr>";
      html += "<th scope='col'></th>";
      html += "<th scope='col'>Name</th>";
      html += "<th scope='col'>Age</th>";
      html += "<th scope='col'>Destinations</th>";
      html += "<th scope='col'>Origin City</th>";
      html += "<th scope='col'>Hobbies</th>";
      html += "<th scope='col'>Budget</th>";
      html += "<th scope='col'>Gender</th>";
      html += "<th scope='col'>Languages</th>";
      html += "<th scope='col'></th>";
      html += "</tr>";
      html += "</thead>";
      for (var pos in users) {
        html += "<tr>"
        html += "<td><img src='" + users[pos]['picture'] + "' style='max-height: 50px; max-width: 50px'/></td>";
        html += "<td>" + users[pos]['name'] + "</td>";
        html += "<td>" + users[pos]['age'] + "</td>";
        html += "<td>" + users[pos]['destination_cities'] + "</td>";
        html += "<td>" + users[pos]['origin_city'] + "</td>";
        html += "<td>" + users[pos]['hobbies'] + "</td>";
        html += "<td>" + users[pos]['budget'] + "</td>";
        html += "<td>" + users[pos]['gender'] + "</td>";
        html += "<td>" + users[pos]['languages'] + "</td>";
        html += "<td><a href='javascript:void(0);' class='chat-toggle' data-id='"+users[pos]['id']+"' data-user='"+users[pos]['name']+"'>Connect</a></td>";
        html += "</tr>";
      }
      html += "</table>";

      $(".cool-people-tbl-container").html(html);

      $("#filter-search-btn-loading").hide();

    });
  })
})
</script>

@stop