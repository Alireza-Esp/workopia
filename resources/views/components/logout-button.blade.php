<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="text-white hover:underline">
        <i class="fa-solid fa-sign-out"></i> Logout
    </button>
</form>