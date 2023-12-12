<header>
    <nav class="navbar bg-black d-flex">

        <div class="container-fluid">

          <a class="navbar-brand text-light"  href="{{route('home')}}" target="_blank">Vai al sito</a>

          <div class="d-flex ">

            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>

            <p class="text-light mx-4">{{Auth::user()->name}}</p>

            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn btn-outline-light" type="submit">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
              </button>
          </form>

          </div>

        </div>

      </nav>
</header>
