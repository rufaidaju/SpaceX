@extends('layout.layout') 

@section('script')
 <script type="text/javascript" src="{{ asset('js/oneRocket.js') }}"></script>  
@endsection

@section('search')
  <div class="form-inline my-2 my-lg-0 " id="url" >
    <input  class="form-control mr-sm-2" type="search"  placeholder="Search" aria-label="Search"    id="input"  required />
    <button class="btn search-btn  .btn-outline-success" type="submit" title="Search for a specific rocket" id="search">Search</button>
  </div>
@endsection 

@section('back-btn')
  <button class="btn  .btn-outline-success" type="submit" title="Back to home page" id="back"><a class="btn-link" href="/">Back</a></button>
@endsection

@section('rocket')
<!-- Main card -->
        <div class="card bg-dark text-white" id="main-card">
          <img src="https://www.spacex.com/sites/spacex/files/spacex_about_company_01_0.jpg" class="card-img" alt="Space-image">
          <div class="container  card-img-overlay">
            <div class="row"> 
                <div class="col-lg-9 card-content">
                  <h1 class="main-card-title">SpaceX</h1>
                  <p class="card-text">  SpaceX designs, manufactures and launches advanced rockets and spacecraft. The company was founded in 2002 to revolutionize space technology, with the ultimate goal of enabling people to live on other planets.</p>
                </div>
            </div>
          </div>      
        </div>
        <!-- Making history text -->
        <div class="container  making-history" id="making-history">
            <div class="row justify-content-md-center"> 
              <div class="col-lg-9 m "> 
                <h2 id="success">Making History</h2>
                <p class="lead">SpaceX has gained worldwide attention for a series of historic milestones. It is the only private company capable of returning a spacecraft from low Earth orbit, which it first accomplished in 2010. The company made history again in 2012 when its Dragon spacecraft became the first commercial spacecraft to deliver cargo to and from the International Space Station</p>
                <p class="lead">SpaceX successfully achieved the historic first reflight of an orbital class rocket in 2017, and the company now regularly launches flight-proven rockets. In 2018, SpaceX began launching Falcon Heavy, the world’s most powerful operational rocket by a factor of two.</p>
              </div> 
            </div>
        </div>
        <!-- Description and information about the rocket -->
        <div class="container  rocket-info" id="rocket-info">
            <div class="row justify-content-md-center"> 
              <div class="col-lg-9 m "> 
                <h1 class="rocket-name"></h1>
                <p class="lead description"></p>
                <p class="lead first-flight"></p>
              </div> 
            </div>
            <!-- Show rocket images -->
            <div id="rocket-images" class="wrapper justify-content-center" >
            </div> 
            <!-- Show more information about the rocket -->
            <div class="more-info container">  
            </div>
        </div>
@endsection