<!-- Start Nav -->
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Laravel Blog</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">

                           
                            <li class="nav-item {{Request::is('contact') ? "active" : ""}}">

                            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                              <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                              <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">

                              <a class="nav-link" href="/contact">Contact</a>
                            </li>
                      </ul>
                       <div class="nav navbar-nav  dropdown" align="right">
                              <a class="nav-link dropdown-toggle"   href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Dropdown link
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                      </div>
               </div>
        </nav>
        <!-- End Nav -->
4:06 PM 8/1/2018