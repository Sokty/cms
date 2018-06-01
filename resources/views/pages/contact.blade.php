<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <!-- Start Nav -->
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Laravel Blog</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                            <li class="nav-item ">
                              <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item active">
                              <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </li>
                        </ul>
               </div>
        </nav>
        <!-- End Nav -->
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
       
      



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>