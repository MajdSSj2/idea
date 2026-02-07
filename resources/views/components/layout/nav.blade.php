<nav class="border-b border-border">
    <div class="max-w-6xl mx-auto flex items-center justify-between h-14 px-4">
        <div>
            <a href= "/">
                <img src="" alt="idea logo" width="100"> </img>
            </a>
        </div>

        <div class = "flex items-center flex gap-x-5 ">

            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button>logout</button>
                </form>
            @endauth

            @guest
            <a href="/register"  class="btn" >Register</a>
            <a href="/login">Sign In</a>    
            @endguest

        </div> 
    </div>
</nav>
