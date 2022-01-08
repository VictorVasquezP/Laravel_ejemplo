<!-- header -->
<header>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="logo"><img src="images/logo.svg" /><a href="#">Victor <span>Manuel</span></a></div>
        <ul class="menu">
            <li>
                <a href="{{route('home')}}" class="menu-btn">Home
                    <span class="border border-top"></span>
                    <span class="border border-right"></span>
                    <span class="border border-bottom"></span>
                    <span class="border border-left"></span>
                </a>
            </li>
            <li>
                <a href="#posts" class="menu-btn">Posts
                    <span class="border border-top"></span>
                    <span class="border border-right"></span>
                    <span class="border border-bottom"></span>
                    <span class="border border-left"></span>
                </a>
            </li>
            <li>
                <a href="#contact" class="menu-btn">Contact
                    <span class="border border-top"></span>
                    <span class="border border-right"></span>
                    <span class="border border-bottom"></span>
                    <span class="border border-left"></span>
                </a>
            </li>
            <li>
                <a href="{{route('login')}}" class="menu-btn">Iniciar Sesión
                    <span class="border border-top"></span>
                    <span class="border border-right"></span>
                    <span class="border border-bottom"></span>
                    <span class="border border-left"></span>
                </a>
            </li>
            {{-- <li>
                <div class="boton-usuario">
                    <img src="images/member-03.jpg" alt="" srcset="">
                    <ul class="navbar-dropdown">
                        <li>
                            <a href="#!">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>