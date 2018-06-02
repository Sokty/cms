@extends('main') <!-- extends from master page main -->
@section('title','| Contact') <!-- section of title yield to _head file -->
@section('content')
        <div class = "container"> <!-- Start Container -->
          <div class="row"><!-- start jubotron -->
                  <div class="col-md-12 col-offset-3">
                      <div class="jumbotron">
                          <h1 class="display-4">Contact</h1>
                          <p class="lead">Welcome to my blog and many thanks for 
                              interested in my blog.
                          </p>
                          
                      </div>
                      <form>
                          <div  class="form-group">
                              <label name="email">Email:</label>
                              <input  id="email" name="email" class="form-control">
                          </div>
                           <div  class="form-group">
                              <label name="subject">Subject:</label>
                              <input  id="subject" name="subject" class="form-control">
                          </div>
                          <div  class="form-group">
                              <label name="message">Message:</label>
                              <textarea id="message" name="message" class="form-control" 
                                     placeholder="Write your message here..">
                              </textarea>  
                          </div>
                          <input type="submit" class="btn btn-success">

                      </form>


                  </div>
          </div><!-- end jumbotron -->



        </div><!--End Container   -->
       
@endsection