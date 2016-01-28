<nav class="navbar navbar-default">
  	<div class="container">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="{{ Route('home') }}">eCommerce</a>
    	</div>
    	<ul class="nav navbar-nav">
        	<li><a href="{{ Route('home') }}">Home</a></li>
      	</ul>
        @if(Auth::user())
            <p class="pull-right" style="line-height: 50px; margin: 0; padding: 0;">Welcome back! <a href="{{ Route('user.logout') }}">Logout</a></p>
        @else
          	<ul class="nav navbar-nav navbar-right">
          		<li><a href="#" data-toggle="modal" data-target="#login_modal">Login</a></li>
          		<li><a href="#" data-toggle="modal" data-target="#register_modal">Register</a></li>
          	</ul>
        @endif
  	</div>
</nav>