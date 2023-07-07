<header class="bg-dark py-3">
    <div class="container">
        <h1 class="text-center text-primary">Boolean Projects Git Hub</h1>
    </div>
</header>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Boolean</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse"             id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Progetti
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/admin/projects">Lista Progetti</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/admin/projects/trashed">Cestino</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        
        
    </div>

    <div class="d-flex justify-content-end m-3" style="width:130px">
        {{-- <div class="mx-1">
            <a class="" href="http://127.0.0.1:8001/admin">
                Dashboard
            </a>
        </div> --}}
    
        <div class="mx-1">
            <a class="">
                Profile
            </a>
        </div>
        
        <form method="POST" action="http://127.0.0.1:8001/logout">
            <div class="mx-1">
                <input type="hidden" name="_token" value="ol7QPW5TpZ36gwVPX9nsXt6peIMOMkta4B4vtb4u">
                <a class="" href="http://127.0.0.1:8001/logout" onclick="event.preventDefault();
                this.closest('form').submit();">
                Log Out
                </a>
            </div>  
        </form>
    </div>
        
   
    
</nav>