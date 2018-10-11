<div class="main-container">
    <div class="main-container--filters">

        <ul class="main-container--filters__list">

            <li class="main-container--filters__items main-container--filters__items-active">
                {{ __('אחרונים') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('היום') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('השבוע') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('החודש') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('השנה') }}
            </li>

        </ul>

    </div>

    <div class="main-container--feed">

        <ul class="main-container--feed__list">
            <li class="main-container--feed__item">

                <a href="#">
                    <div class="feed-item feed-item--first">

                        <div class="feed-item__main-image" style="background-image: url('{{ url('assets/web/images/Plant5.gif') }}')"></div>

                        <div class="feed-item--content">
                            <div class="feed-item--content__main-title">to grow is good for you asdf asdf asdfasdf </div>

                            <div class="feed-item--content__author-image" style="background-image: url('{{ url('assets/web/images/user-images.png') }}')"></div>
                            <div class="feed-item--content__first-author-name">Dudy . 12.12.1222</div>
                            <br>
                            <div class="feed-item--content__first-categories">#weed #shroms</div>

                            <div class="feed-item--content__first-action">
                                <div class="feed-item--content__comments-count">3</div>
                                <div class="feed-item--content__likes-count">2</div>

                            </div>

                        </div>

                    </div>
                </a>

                <a href="#">
                    <div class="feed-item">

                        <div class="feed-item--content">

                            <div class="feed-item--content__author-image" style="background-image: url('{{ url('assets/web/images/user-images.png') }}')"></div>
                            <div class="feed-item--content__title">to grow is good for you asdf asdf asdfasdf </div>
                            <br>
                            <div class="feed-item--content__author-name">Dudy . 12.12.1222</div>
                            <br>

                            <div class="feed-item--content__categories">#weed #shroms</div>

                            <div class="feed-item--content__action">
                                <div class="feed-item--content__comments-count">3</div>
                                <div class="feed-item--content__likes-count">2</div>
                            </div>

                        </div>

                    </div>
                </a>

            </li>
        </ul>

    </div>
</div>