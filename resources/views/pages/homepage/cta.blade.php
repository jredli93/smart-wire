<section class="cta-wrap">
    <div class="cta-content">
        <h1 id="cta-heading" data-aos="fade-right" class="cta-heading">{{ __('text.pdf-text')}}</h1>
        @if(app()->getLocale() == "en")
        <button onclick="window.open('/assets/catalogue.v02.SFB.eng.pdf')" class="cta-download">
            <i class="fas fa-file-pdf cta-icon fa-3x"></i>
            <span class="cta-text">{{ __('text.catalog-cta')}}</span></button>
        @else
        <button onclick="window.open('/assets/katalog.v02.SFB.srp.pdf')" class="cta-download">
            <i class="fas fa-file-pdf cta-icon fa-3x"></i>
            <span class="cta-text">{{ __('text.catalog-cta')}}</span></button>
        @endif

    </div>
</section>