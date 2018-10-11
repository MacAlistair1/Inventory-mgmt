<div class="blog-footer text-center bg-dark fixed-bottom" style="position:fixed">
<p class="lead"><mark style="color:red">&copy; 2018 {{ config('app.name', 'Inventory Management') }} | Developed by</mark> <a href="facebook.com/Mac.alistair1">Jeeven Lamichhane</a></p>
<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="text-decoration:none;">
                                    <span class="sidebar-mini">L</span>
                                    <span class="sidebar-normal">Log out</span>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                </a>
</div>
