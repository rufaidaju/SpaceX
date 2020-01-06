@extends('layout.layout') 
@section('title','-All Rockets')

@section('script')
  <script type="text/javascript" src="{{ asset('js/allRockets.js') }}"></script>
@endsection

@section('back-btn')
 <button class="btn .btn-outline-success back" type="submit" title="Back to home page" ><a class="btn-link" href="/">Back</a></button>
@endsection

@section('all')
  <!-- All Rockets -->
  <h1 class="all-rocket">All Rockets </h1>
  <!-- cards -->
  <div id="all-rocket" class="wrapper justify-content-center" >
  </div> 
  @endsection

                            
        
       
