<div class="dropdown">
    <button
      class="user dropdown-toggle"
      type="button"
      data-bs-toggle="dropdown"
      aria-expanded="false">
      {{ Auth::user()->name }}
    </button>
    <ul class="dropdown-menu">
      <li>
        <a class="dropdown-item" href="#">Profile</a>
      </li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
        </x-dropdown-link>
      </form>
    </ul>
</div>