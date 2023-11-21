<div class="header-holder">
    <header id="header">
        <a id="logo" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="top">
                        <p><img src="{{ asset('images/top-location-icon.png') }}" alt="Ikonka lokalizacji"> al. Jana Pawła II 29, Warszawa</p>
                        <p><img src="{{ asset('images/top-phone-icon.png') }}" alt="Ikonka numeru telefonu"> <a href="tel:+48695051396">695 051 396</a></p>
                        <p><img src="{{ asset('images/top-mail-icon.png') }}" alt="Ikonka kontaktu e-mail"> <a href="mailto:sprzedazbalticwave@antczak.pl"> sprzedazbalticwave@antczak.pl</a></p>
                        <a href="{{ route('contact') }}" class="bttn">NAPISZ DO NAS</a>
                    </div>
                </div>
                <div class="col-12">
                    <nav>
                        <ul class="mb-0 list-unstyled">
                            <li><a href="/">HOME</a></li>
                            <li><a href="{{ route('investment') }}">APARTAMENTY</a></li>
                            <li>
                                <a href="">O INWESTYCJI</a>
                                <ul class="submenu mb-0 list-unstyled">
                                    <li><a href="{{ route('investor') }}">Inwestor</a></li>
                                    <li><a href="{{ route('architect') }}">O architekcie</a></li>
                                    <li><a href="{{ route('crowneplaza') }}">Crowne Plaza</a></li>
                                    <li><a href="">Galeria</a></li>
                                    <li><a href="{{ route('businessmodel') }}">Model biznesowy</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('location') }}">LOKALIZACJA</a></li>
                            <li><a href="{{ route('contact') }}">KONTAKT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>