@php
    $menu_privacy = config('footer_menu.menuPrivacy');
    $menu_social = config('footer_menu.menuSocial');
@endphp
<footer>
    <div class="container">

        <div class="privacy">
            <h4>DC Comics s.r.l</h4>
            <nav>
                <ul class="menu flex">
                    @foreach ($menu_privacy as $item)
                        <li>
                            <a href="">{{$item['text']}}</a>
                        </li>
                    @endforeach

                </ul>
            </nav>
        </div>

        <div class="social">
            <h5>Trovaci anche su:</h5>
            <nav>
                <ul class="menu flex">
                    @foreach ($menu_social as $item)
                        <li>
                            <a :href=""><i class="@php echo $item['text'] @endphp"></i></a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>

    </div>
</footer>
