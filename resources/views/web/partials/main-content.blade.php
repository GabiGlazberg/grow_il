<div class="main-container">
    <div class="main-container--filters">

        <ul class="main-container--filters__list">

            <li class="main-container--filters__items main-container--filters__items-active">
                {{ __('latest') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('today') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('week') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('month') }}
            </li>

            <li class="main-container--filters__items">
                {{ __('year') }}
            </li>

        </ul>

    </div>

    <div class="main-container--feed">

        <ul class="main-container--feed__list">
            <li class="main-container--feed__item">

                <div class="feed-item" style="background-image: url('{{ url('assets/web/images/Plant5.gif') }}')">

                </div>

            </li>
        </ul>

    </div>
</div>