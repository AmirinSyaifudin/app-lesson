
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
           <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('frontend/images/flags/ID.png') }}"/>
                  Coffee(Java)
                  {{--  <b class="caret"></b>  --}}
                </a>

          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

                  <li>
                      <a href="{{ route('login')}}">
                          <i class="fa fa-envelope-o"></i>
                          LOGIN
                      </a>
                  </li>
                   <li>
                      <a href="{{ route('register')}}">
                          <i class="fa fa-envelope-o"></i>
                          REGISTER
                      </a>
                  </li>
              </li>
         </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
