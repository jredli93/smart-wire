<section class="contact-wrap">
    <div class="contact" id="contact">
        <h1 class="contact-title">{{ __('text.contact-link')}}</h1>
        <div class="contact-info-wrap">    
            <div class="info">
                <h2 class="info-title">SMARTFIREBLOCK</h2>
                <span class="info-subtitle">{{ __('text.contact-address')}}</span>
            </div>
            <div class="info">
                <h2 class="info-title"><a href="mailto:office@smartreblock.rs">office@smartreblock.rs</a></h2>
                <span class="info-subtitle"><u><a href='tel:+381 60 339 44 07'>+381 60 339 44 07</a></u></span>
            </div>
        </div>
        <div class="contact-form">
           <form action="#" method="POST" class="form" name="contactForm">
               <input type="text" class="input" name="contact-name" placeholder="{{ __('text.form-name')}}" required>
               <input type="email" class="input" name="contact-email" placeholder="{{ __('text.form-email')}}" name="Email" required>
               <textarea class="textarea" name="contact-ta" cols="30" rows="5" name="Messsage" placeholder="{{ __('text.form-message')}}" required></textarea>
               <button class="cta-download">
                {{-- <i class="fas fa-paper-plane cta-icon fa-3x"></i> --}}
                <span class="cta-text">{{ __('text.send-button')}}</span></button>
           </form>
        </div>
    </div>
    <div id='map'></div>
</section>