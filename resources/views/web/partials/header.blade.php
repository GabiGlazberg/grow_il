<div class="header">

    <div class="header--wrapper">

        <ul class="header--wrapper__list">

            <li class="header--wrapper__list__item">

                <div class="icon">
                    <img class="icon__image" src="{{ url('assets/web/images/Plant5.gif') }}" alt="">
                </div>

            </li>

            <li class="header--wrapper__list__item">

                <div class="search">
                    <input type="text" placeholder="{{ __('חיפוש') }}">
                </div>

            </li>

            <li class="header--wrapper__list__item">

                <div class="action">

                    <button class="action__user">
                        <img src="{{ url('assets/web/images/user-images.png') }}" alt="">
                    </button>

                    <div class="action__notification">
                        <img src="{{ url('assets/web/images/bell-512.png') }}" alt="">
                    </div>

                    <a href="/new-post" class="action__new-post">
                        {{  __('פוסט חדש') }}
                    </a>

                </div>

            </li>

        </ul>



    </div>

</div>