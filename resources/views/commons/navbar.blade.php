<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" >Yotto Motto</a>


            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    
                    <span>
                            <a href="{{route('users.edit', ['id'=> Auth::User()->id] )}}" class="glyphicon glyphicon-home" style='font-size:24pt; margin-left: 15px; margin-top: 10px; color: white;'></a>
                        </span>

                        <span>
                            <a href="/" class="glyphicon glyphicon-list" style='font-size:22pt; margin-left: 15px; margin-top: 10px; color: white;'></a>
                        </span>
                        
                        <span>
                            <a href="{{route('users.index', ['id'=> Auth::User()->id] )}}" class="glyphicon glyphicon-search" style='font-size:24pt; margin-left: 15px; margin-top: 10px; color: white;'></a>
                        </span>
                       
                      
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nickname }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                            </ul>
                            
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>