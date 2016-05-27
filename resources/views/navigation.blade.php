<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Todo App</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               @if(Auth::check())
                 <li><a href="/todolists">My Lists</a></li>
                 <li><a href="/newtodolist">Create a list</a></li>
                 <li><a href="/settings">Settings</a></li>
               @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">              
              @if(!Auth::check())
                <li><a href="/signup">Sign up</a></li>
                <li><a href="/signin">Login</a></li>
              @else
                <li><a href="#">My profile</a></li>
                <li><a href="/signout">Logout</a></li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>