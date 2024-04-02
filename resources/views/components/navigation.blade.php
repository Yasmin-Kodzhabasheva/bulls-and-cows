<nav class="navbar navbar-expand-lg  bg-info ">
    <div class="d-flex w-100 justify-content-between align-items-center p-2">
        <h3 class="text-white">Bulls and Cows</h3>
        @auth
            <div class="w-25">
                <a href="/home" class="text-decoration-none  btn btn-sm btn-light">Home</a>
                <a href="/ranking" class="text-decoration-none  btn btn-sm btn-light">Ranking</a>
            </div>

            <div>
                <form action="/logout" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-sm btn-secondary">Sign Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="w-25">
                <a href="/" class="text-decoration-none btn btn-sm btn-light">Back</a>
            </div>
        @endguest

    </div>
</nav>