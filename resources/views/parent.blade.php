parent
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="dropdown-item" type="submit">
        <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
        Logout
    </button>
</form>
