@extends('layouts.default')

@section('content')

<script defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY', 'AIzaSyA7mbLxbIaMQJH4cU7IoVl-P7hjHNGECiY') }}&libraries=places&callback=initMap"></script>

@if (!empty($include_hero))
  @include('includes.hero')
@endif

@if (empty($include_hero))
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Compare</h2>
  </div>
</div><!-- End Breadcrumbs -->
@endif

<!-- ======= About Section ======= -->
<section id="compare" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group float-start">
          <label>Filter by your monthly budget or city cost</label>
          <style>
          .multiselect {
            width: 100%;
          }

          .multiselect label {
            color: black;
            padding-left: 5px;
            position: relative;
          }

          .selectBox {
            position: relative;
          }

          .selectBox select {
            width: 100%;
          }

          .selectBox .bx {
            position: absolute;
            right: 5px;
            top: 10px;
          }

          .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
          }

          #checkboxes {
            display: none;
            border: 1px #dadada solid;
            position: absolute;
            z-index: 999;
            width: 300px;
          }

          #checkboxes label {
            display: block;
          }

          #checkboxes label:hover {
            background-color: #1e90ff;
          }

          .tableFixHead { 
            overflow: auto; 
            max-height: 800px; 
          }
          .tableFixHead .tbl-cities thead th { 
            position: sticky; 
            top: 0; z-index: 1; 
            background: #f1f1f1;
          }
          .tbl-cities  { border-collapse: collapse; width: 100%; }

          </style>
          <div class="multiselect">
            <div class="selectBox" onclick="showCheckboxes()">
              <span class="bx bx-chevron-down"></span>
              <select class="form-control">
                <option>All budgets & cities</option>
              </select>             
              <div class="overSelect"></div>
            </div>
            <div id="checkboxes">
              <label for="one" style="background-color: #86007d; color: white;">
                <input name="map-color" type="checkbox" id="one" checked value="1"/> $ 600 - 800 (1 - 99)</label>
              <label for="two" style="background-color: #0000f9; color: white;">
                <input name="map-color" type="checkbox" id="two" checked value="2"/> $ 800 - 1,200 (100 - 199)</label>
              <label for="three" style="background-color: #008018; color: white;"">
                <input name="map-color" type="checkbox" id="three" checked value="3"/> $ 1,200 - 1,600 (200 - 299)</label>
              <label for="four" style="background-color: #ffff41">
                <input name="map-color" type="checkbox" id="four" checked value="4"/> $ 1,600 - 2,200 (300 - 399)</label>
              <label for="five" style="background-color: #ffa52c">
                <input name="map-color" type="checkbox" id="five" checked value="5"/> $ 2,200 - 2,800 (400 - 499)</label>
              <label for="six" style="background-color: #ff0018; color: white;">
                <input name="map-color" type="checkbox" id="six" checked value="6"/> $ 2,800 or more (500 or more)</label>
            </div>
          </div>
        </div>
        <div class="leyend mt-5 float-end">
          <label>Lowest</label>
          <label class="color" data-ranking="1" style="background-color: #86007d"></label>
          <label class="color" data-ranking="2" style="background-color: #0000f9"></label>
          <label class="color" data-ranking="3" style="background-color: #008018"></label>
          <label class="color" data-ranking="4" style="background-color: #ffff41"></label>
          <label class="color" data-ranking="5" style="background-color: #ffa52c"></label>
          <label class="color" data-ranking="6" style="background-color: #ff0018"></label>
          <label>Highest</label>
        </div>
      </div>
      <div class="col-lg-12">
        <div id="map" style="width: 100%; height: 300px"></div>
      </div>
      <div class="col-lg-12 mt-3">
        <div class="row">
          <div class="col-md-8 col-6">
            <h3>Cities</h3>
          </div>
          <div class="col-md-4 col-6">

          <a class="btn btn-info float-end" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#help-modal"><i class="bx bx-question-mark"></i> <span style="font-size: 14px;">Need help comparing cities click here</span></a>
            
            @if (!Auth::guest())
            <button id="delete-selection" style="display: none;" type="button" class="btn btn-danger float-end me-2" title="Delete selection" data-bs-toggle="modal" data-bs-target="#delete-selection-modal">
              <i class="bx bx-x"></i>
            </button>           
            <button id="save-compare" style="display: none;" type="button" class="btn btn-success float-end me-2" title="Save cities compared" data-bs-toggle="modal" data-bs-target="#save-compare-modal">
              <i class="bx bx-save"></i>
            </button>
            @endif

            @if (!Auth::guest())
            <select id="user-cities-compare" class="form-select float-end me-2" style="width: auto; max-width: 50%;">
                  <option value="0">Select Selection Saved </option>
              @foreach ($user_cities_compare_list as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
            @endif

          </div>
        </div>
        <div class='row'>
          <div class="col-md-4 form-group">
            <label id="search-city-label">Where do you live now?</label>
            <input type="text" class="form-control mb-2" id="search-city" placeholder="Type and Pick City"/>
            <input type="hidden" name="compare-city" id="search-city-id">
          </div>
          <div class="col-md-4 form-group">
            <button class="btn btn-primary mt-4" type="button" id="select-compare">Next</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row city-tabs mt-2" style="display: none">
      <div class="col-lg-12">
        <button class="btn mr-2 city-tab btn-purple" data-value="prices">Prices</button>
        <button class="btn mr-2 city-tab btn-blue" data-value="healthcare">Health Care</button>
        <button class="btn mr-2 city-tab btn-green" data-value="pollution">Pollution</button>
        <button class="btn city-tab btn-yellow" data-value="traffic">Traffic</button>
        <button class="btn mr-2 city-tab btn-red" data-value="crime">Crime</button>
      </div>
    </div>
    <div class="row cities tableFixHead mt-2" id="cities">
    </div>
  </div>
</section><!-- End About Section -->

<div class="modal" id="save-compare-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Save Cities</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" id="selection-id" value="0">
          <input type="hidden" id="selection-city-ids">
          <div>
            <p id="selection-cities"></p>
          </div>
          <div class="mb-3">
            <label for="selection-name" class="col-form-label">Selection Name:</label>
            <input type="text" class="form-control" id="selection-name" aria-describedby="selection-name-feedback" required>
            <div id="selection-name-feedback" class="invalid-feedback">
              Please write a name for your selection
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="save-selection" class="btn btn-primary">
          Save Selection
          <div id="selection-loading" class="spinner-border" role="status" style="display: none">
            <span class="visually-hidden">Loading...</span>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="delete-selection-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-header flex-column">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="icon-box">
            <i class="bx bx-x-circle bx-md text-danger"></i>
          </div>		
          <div class="justify-content-center">				
            <h4 class="modal-title w-100">Are you sure?</h4>	       
          </div> 
        </div>
        <div class="modal-body">
          <p>Do you really want to delete this saved selection? This process cannot be undone.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirm-delete-selection">
            Delete
            <div id="delete-selection-loading" class="spinner-border" role="status" style="display: none">
              <span class="visually-hidden">Loading...</span>
            </div>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal" id="help-modal" tabindex="-1">
    <div class="modal-dialog" style="max-width: 1024px;">
        <div class="modal-content">
            <iframe class="help-video" style="height: 600px;" src="https://www.youtube.com/embed/MdQnbdbCuxU?enablejsapi=1&version=3&playerapiid=ytplayer"></iframe>
        </div>
    </div>
</div>

@if (!empty($include_hero))
  @include('includes.home')
@endif

@stop

@section('scripts')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script defer type="text/javascript">

let map;
let service;
let infowindow;
let markers = [];

var cities = {};

var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'USD'
});

function initMap() {
  infowindow = new google.maps.InfoWindow();
    map = new google.maps.Map(document.getElementById("map"), {
    minZoom: 2,
  });
}

function createMarker(place) {

  var image_url = "";

  if (place.ranking < 100) {
    image_url = "/assets/img/purple_maker.png";
  }
  if (place.ranking >= 100 && place.ranking <= 199) {
    image_url = "/assets/img/blue_maker.png";
  }
  if (place.ranking >= 200 && place.ranking <= 299) {
    image_url = "/assets/img/green_maker.png";
  }
  if (place.ranking >= 300 && place.ranking <= 399) {
    image_url = "/assets/img/yellow_maker.png";
  }
  if (place.ranking >= 400 && place.ranking <= 499) {
    image_url = "/assets/img/orange_maker.png";
  }
  if (place.ranking >= 500) {
    image_url = "/assets/img/red_maker.png";
  }

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
    infowindow.setContent("<h4>" + place.ranking + ". " + place.name + ", " + place.country + "</h4><a class='btn btn-primary' onclick='selectMapCity(" + place.city_id + ")'>Select City to Compare</a>");
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

function numbeoCities() {
  var array = @json($cities);

  var cities_search = [];

  for (var i = array.length - 1; i >= 0; i--) {
    cities[array[i].city_id] = array[i];
    cities_search.push({ value: array[i].city_id, label: array[i].city + ", " + array[i].country})
  }
  numbeoRankingCities();
  setUpAutocomplete(cities_search);
}

function numbeoRankingCities() {
  var data = @json($rankCitiesCostOfLiving);
  let count = 0;

  var bounds = new google.maps.LatLngBounds();

  let map_colors = [];

  $("input:checkbox[name=map-color]:checked").each(function(){
    map_colors.push($(this).val());
  });

  for (var i = data.length - 1; i >= 0; i--) {

      var ranking = count + 1;

      var city_color;
      
      switch(true) {
        case ranking>=1 && ranking<100:
          city_color = 1;
          break;
        case ranking>=100 && ranking<200:
          city_color = 2;
          break;
        case ranking>=200 && ranking<300:
          city_color = 3;
          break;
        case ranking>=300 && ranking<400:
          city_color = 4;
          break;
        case ranking>=400 && ranking<500:
          city_color = 5;
          break;
        default:
          city_color = 6;
      }

      if (map_colors.includes(city_color.toString())) {

        var city = cities[data[i].city_id];

        var place = {
          "geometry": {"location": new google.maps.LatLng(city.latitude, city.longitude)},
          "name": city.city,
          "country": city.country,
          "city_id": city.city_id,
          "ranking": ranking
        };

        bounds.extend(place.geometry.location);
        createMarker(place);
      }

      count ++;
  }

  map.fitBounds(bounds);
  return;
}

function setUpAutocomplete(cities_search) {
  $( "#search-city" ).autocomplete({
    minLength: 2,
    source: cities_search,
    focus: function( event, ui ) {
      $( "#search-city" ).val( ui.item.label );
      return false;
    },
    select: function( event, ui ) {
      $( "#search-city" ).val( ui.item.label );
      $( "#search-city-id" ).val( ui.item.value );
      return false;
    }
  })
}

let sections = {};
let cities_selected = {};
let cities_length = 0;
let index_selected = "prices";

function selectMapCity(city_id) {
  if (validateCity(city_id)) {
    infowindow.close();
    selectCity(city_id).done(processCityResponse);
  }
}

function selectCity(city_id) {
  $("#compare").append('<div id="preloader"></div>');
  $('#preloader').fadeOut('slow');
  return $.ajax({
    url: "/search-city",
    data: {
      city_id: city_id,
      token: "{{ csrf_token() }}"
    }
  })
}

function validateCity(city_id) {
  if (cities_length == 10) {
    alert("You have the maximun number of cities selected");
    return false;
  }
  for (var pos in cities_selected) {
      if (cities_selected[pos].city_id == city_id) {
        return false;
      }
  }
  return true;
}

function processCityResponse(response) {
  $('#preloader').remove();
  response = $.parseJSON(response);
  cities_selected[cities_length] = response;
  cities_length ++;
  $("#search-city-id").val("");
  $("#search-city").val("");
  if (cities_length > 0) {
    $("#search-city-label").html("Where are you comparing?");
    $("#select-compare").html("Add");
  }
  buildCityInfo();
}


$(".city-tab").click(function() {
    if (index_selected != $(this).data('value')) {
      index_selected = $(this).data('value');
      $("#cities").html("");
      buildCityInfo();
    }
  })


  function checkIfUserActive() {
  let currUser=document.getElementById('current_user').value;
  return $.ajax({
    url: "/validateUser",
    data: {
      _token: "{{ csrf_token() }}",
      currUser:currUser
    },
    type: "post"
  })
} 

function buildCityInfo() {

  var html = "";

  if (cities_length > 0) {

    $(".city-tabs").show();
    $("#save-compare").show();

    if ($("#section-column").html() == undefined) {
      buildSections();
    }
   
    if (localStorage.getItem('status') == "active" ){
      html = "<table class='table tbl-cities'>";
      html += buildTableHead();
      html += buildTableBody();
      html += "</table>";
    }else if((document.getElementById('current_user')==undefined && index_selected=='prices')){
      html = "<table class='table tbl-cities'>";
      html += buildTableHead();
      html += buildTableBody();
      html += "</table>";
    }else{
      html = "<div class='col-12 mt-4'><div class='alert alert-primary' role='alert'>You must to <a href='/billing-portal'>login or upgrade your subscription plan</a> to see this section.</div></div>"
    }

    // if (localStorage.getItem('status') == "active" || (document.getElementById('current_user')==undefined && index_selected=='prices')) {
    //   html = "<table class='table tbl-cities'>";
    //   html += buildTableHead();
    //   html += buildTableBody();
    //   html += "</table>";
    // } else {
      
    //   html = "<div class='col-12 mt-4'><div class='alert alert-primary' role='alert'>You must to <a href='/billing-portal'>login or upgrade your subscription plan</a> to see this section.</div></div>"
    // }

  } else {
    $(".city-tabs").hide();
    $("#save-compare").hide();
    $("#delete-selection").hide();
    index_selected = "prices";
  }
 
  $("#cities").html(html);
}

function buildTableHead() {
  var html = "<thead class=''>";
  html += "<tr>";
  html += "<th scope='col'></th>";

  for (var pos in cities_selected) {
      html += "<th scope='col'><div style='cursor:grab' id='city" + cities_selected[pos]['city_id'] + "' data-pos='" + pos + "' ondrop='dropCity(event)' ondragover='allowDrop(event)' draggable='true' ondragstart='dragCity(event)'>" + cities_selected[pos]['name'] + " <button type='button' class='btn btn-danger close' aria-label='Remove' data-toggle='tooltip' data-placement='top' title='Remove City' onClick='removeCity(" + pos + ")'><span aria-hidden='true'><strong>&times;</strong></span></button></div></th>";
  }
  html += "</tr>";
  html += "</thead>";
  return html;
}

function buildTableBody() {
  var html = "<tbody>";
  for (var section in sections) {
    html += "<tr><td><strong>" + section + "</strong></td>";
    for (var pos in cities_selected) {
      html += "<td></td>";
    }
    html += "</tr>";
    for (var item_id in sections[section]) {
      if (index_selected == "prices") {
        var section_name = sections[section][item_id];
      } else {
        var section_name = item_id;
      }
      html += "<tr><td>" + section_name + "</td>";
      for (var pos in cities_selected) {

        if (cities_selected[pos][index_selected][section] != undefined && cities_selected[pos][index_selected][section][item_id] != undefined) {
          var item = cities_selected[pos][index_selected][section][item_id];
          if (index_selected == "prices") {
            if (item['average_price'] != undefined) {
              var value = Math.round(parseFloat(item['average_price']) * 100) / 100;
              if (item.name.includes("%")) {
                var value_text = value + "%";
              } else {
                var value_text = formatter.format(value);
              }
            } else {
              var value_text = "-";
            }
          } else {
            if (!item) {
              var value_text = "-";
            } else {
              var value_text = new Intl.NumberFormat().format(item);
            }
          }

          if (pos == 0) {
            html += "<td>" + value_text + "</td>";
          } else {
            var departure_city = cities_selected[0][index_selected][section][item_id];
            if (index_selected == "prices") {
              var difference = Math.round(parseFloat(item['average_price'])/parseFloat(departure_city['average_price']) * 100) - 100;
            } else {
              var difference = Math.round(parseFloat(item)/parseFloat(departure_city) * 100) - 100;
            }

            if (difference > 0) {
              html += "<td><label class='text-danger' title='" + difference + "%'>" + value_text + " <i class='bx bx-up-arrow-alt'></i><span style='font-size: 11px'>+" + difference + "%</span></label></td>";
            }
            if (difference < 0) {
              html += "<td><label class='text-success' title='" + difference + "%'>" + value_text + " <i class='bx bx-down-arrow-alt'></i><span style='font-size: 11px'>" + difference + "%</span></label></td>";
            }
            if (difference == 0) {
              html += "<td>" + value_text + "</td>";
            }
          }
        } else {
          html += "<td>-</td>";
        }
      }
      html += "</tr>";
    }
  }
  html += "</tbody>";
  return html;
}

function buildSections(response) {
  sections = {};
  var items = cities_selected[0][index_selected];
  for (var section in items) {
    sections[section] = {};
    for (var item_id in items[section]) {
      if (index_selected == "prices") {
        sections[section][item_id] = items[section][item_id]['name'];
      } else {
        sections[section][item_id] = items[section][item_id];
      }
    }
  }
}

function removeCity(pos) {
  delete cities_selected[pos];
  sortCities();
  if (cities_length == 0) {
    $("#search-city-label").html("Where do you live now?");
    $("#select-compare").html("Next");
  }
}

function sortCities() {
  var temp_array = cities_selected;
  cities_selected = {};
  var count = 0;
  for (var pos in temp_array) {
    cities_selected[count] = temp_array[pos];
    count++;
  }
  cities_length = count;

  buildCityInfo();
}

function allowDrop(ev) {
  ev.preventDefault();
}

function dragCity(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function dropCity(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");

  var old_pos = $("#" + data).data("pos");
  var new_pos = $("#" + ev.target.id).data("pos");

  var item = cities_selected[old_pos];
  removeCity(old_pos);

  if (new_pos < cities_length) {
    var temp_array = cities_selected;
    cities_selected = {};
    var count = 0;

    for (var pos in temp_array) {
      temp_item = temp_array[pos];
      if (pos == new_pos) {
        cities_selected[count] = item;
        count ++;
      }
      cities_selected[count] = temp_item;
      count ++;
    }

    cities_length = count;

  } else {
    cities_selected[new_pos] = item;
    cities_length += 1;
  }

  buildCityInfo();
}

var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}





function reloadSelectionList() {
  $("#compare").append('<div id="preloader"></div>');
  $('#preloader').fadeOut('slow');
  return $.ajax({
    url: "/selections",
    data: {
      token: "{{ csrf_token() }}"
    }
  })
}

function processSelectionsResponse(response, selection_id) {
  response = $.parseJSON(response);
  if (response.success){
    var html = '<option value="0">Select Selection Saved </option>';
    for (var pos in response.selections) {
      var item = response.selections[pos];
      html += '<option value="' + item.id + '">' + item.name + '</option>';
    }
    $("#user-cities-compare").html(html);
    $("#user-cities-compare").val(selection_id);
    if (selection_id > 0) {
      $("#delete-selection").show();
      $("#user-cities-compare").change();
    } else {
      cleanCities();
    }
  }
  $('#preloader').remove();
}

function cleanCities() {
  $("#cities").html("");
  cities_selected = {};
  cities_length = 0;
  buildCityInfo();
}


var selection_modal = new bootstrap.Modal(document.getElementById('save-compare-modal'), {
    keyboard: false
})

var delete_selection_modal = new bootstrap.Modal(document.getElementById('delete-selection-modal'), {
    keyboard: false
})

$(document).ready(function() {

  numbeoCities();

  $("#select-compare").click(function() {
    if ($("#search-city-id").val() != "") {
      if (validateCity($("#search-city-id").val())) {
        selectCity($("#search-city-id").val()).done(processCityResponse);
        checkIfUserActive().done(function(res) {
          localStorage.removeItem("status");
          localStorage.setItem("status",JSON.parse(res)[0].stripe_status);
        });  
      }
    } else {
      alert("Select a city");
    }

  })

  $("[name=map-color]").click(function(){
    deleteMarkers();
    numbeoRankingCities();
  });

  $(".leyend .color").click(function() {
    if ($(this).data("ranking") != $("#map-color").val()) {
      $("#map-color").val($(this).data("ranking"));
      $("#map-color").change();
    }
  })

  $('[data-toggle="tooltip"]').tooltip();



  $("#header").removeClass("fixed-top");
  $(".breadcrumbs").css("margin-top", "0px");

  $("#save-compare").click(function() {

    var save_compare_cities = [];
    var save_compare_city_ids = []; 

    for (var pos in cities_selected) {
        save_compare_city_ids.push(cities_selected[pos]['city_id']);
        save_compare_cities.push(cities_selected[pos]['name']);
    }

    if ($("#user-cities-compare").val() > 0) {
      $("#selection-id").val($("#user-cities-compare").val());
      $("#selection-name").val($("#user-cities-compare option:selected").text());
    } else {
      $("#selection-id").val(0);
      $("#selection-name").val("");
    }

    $("#selection-cities").html(save_compare_cities.join("</br>"));
    $("#selection-city-ids").val(save_compare_city_ids.join("|"));
  });

  $("#save-selection").click(function() {

    $("#selection-loading").show();
    
    if ($("#selection-name").val() == "") {
      $("#selection-name").addClass("is-invalid");
      return;
    }
    
    $("#selection-name").removeClass("is-invalid");

    $.ajax({
      url: "/save-compare-selection",
      data: {
        id: $("#selection-id").val(),
        name: $("#selection-name").val(),
        cities: $("#selection-city-ids").val(),
        token: "{{ csrf_token() }}"
      }
    }).done(function(response) {

      var result = $.parseJSON(response);

      $("#selection-loading").hide();

      if (result.success == true) {
        selection_modal.hide();
        reloadSelectionList().done(function(new_response) {
          processSelectionsResponse(new_response, result.id);
        });      
      }
        
    });
  })

  $("#user-cities-compare").change(function() {

    $("#compare").append('<div id="preloader"></div>');
    $('#preloader').fadeOut('slow');

    $.ajax({
      url: "/selection",
      data: {
        id: $(this).val(),
        token: "{{ csrf_token() }}"
      }
    }).done(function(response) {

      var result = $.parseJSON(response);

      if (result.success == true) {

        cities_selected = result.cities;
        cities_length = result.cities.length;

        $("#delete-selection").show();
        
        buildCityInfo();
      } else {
        cleanCities();
      }

      $('#preloader').remove();
        
    });
  })

  $("#confirm-delete-selection").click(function() {

    $("#delete-selection-loading").show();

    $.ajax({
      url: "/delete-compare-selection",
      data: {
        id: $("#user-cities-compare").val()
      }
    }).done(function(response) {

      var result = $.parseJSON(response);

      $("#delete-selection-loading").hide();

      if (result.success == true) {
        delete_selection_modal.hide();
        reloadSelectionList().done(function(new_response) {
          processSelectionsResponse(new_response, 0);
        });
      }
        
    });
    var help_modal = new bootstrap.Modal(document.getElementById('help-modal'), {
        keyboard: false
    });
  });

  $("#help-modal").on('hidden.bs.modal', function(){
      $('.help-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
  });

});

</script>

@stop
