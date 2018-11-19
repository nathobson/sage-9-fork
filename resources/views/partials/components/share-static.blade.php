<a class="share-trigger no-button">Share article</a>

<section class="share-modal">

    <p class="share-modal__title">Share: {{ News::share_static()->title }}</p>

    <div class="share-modal__content">
        <div class="share-modal__close">
            <img src="@asset('images/close.svg')" width="30">
        </div>
        <div class="share-modal__icons">
            <a href="{{ News::share_static()->twitter }}" target="_blank">
                @svg('share-twitter.svg', 'share-modal__icon share-modal__icon--twitter')
                <div class="share-modal__text"><p>Twitter</p></div>
            </a>
            <a href="{{ News::share_static()->facebook }}" target="_blank">
                @svg('share-facebook.svg', 'share-modal__icon share-modal__icon--facebook')
                <div class="share-modal__text"><p>Facebook</p></div>
            </a>
            <a href="{{ News::share_static()->linkedin }}" target="_blank">
                @svg('share-linkedin.svg', 'share-modal__icon share-modal__icon--linkedin')
                <div class="share-modal__text"><p>LinkedIn</p></div>
            </a>
            <a href="{{ News::share_static()->email }}">
                @svg('share-email.svg', 'share-modal__icon share-modal__icon--email')
                <div class="share-modal__text"><p>Email</p></div>
            </a>
        </div>
    </div>
</section>