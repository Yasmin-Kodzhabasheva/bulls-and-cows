<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <p>Bulls and Cows</p>
      
            <a href="/home" class="text-dark text-decoration-none  btn btn-sm btn">Home</a>

            <a href="/account" class="text-dark text-decoration-none  btn btn-sm btn">Account</a>

    </div>
    
    <div class="container-fluid">
        <form action="/logout" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-sm btn-secondary">Sign Out</button>
          </form>
    </div>
    
    </div>
</nav>