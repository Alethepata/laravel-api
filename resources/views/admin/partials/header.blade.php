<header>
    <nav class="navbar bg-black d-flex">

        <div class="container-fluid">

          <a class="navbar-brand text-light"  href="{{route('home')}}" target="_blank">Vai al sito</a>

          <div class="d-flex ">

            <div class="container-fluid">
              <form action="{{route('admin.projects.index')}}" class="d-flex" role="search" method="GET">
                @csrf
                <input class="form-control me-2" name="search" type="search" placeholder="Search">
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
