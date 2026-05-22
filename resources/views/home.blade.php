@extends('layouts.app')

@section('title', 'LUXURY | Premium Outdoor Living & Teak Collections')

@section('content')

    {{-- ==============================
         CINEMATIC VIDEO CAROUSEL HERO
         ============================== --}}
    <section class="hero-carousel" id="home">

        {{-- Slide 1 – Infinity Pool Villa --}}
        <div class="carousel-slide active" data-index="0">
            <div class="slide-bg" data-anim="zoom-in"
                 style="background-image: url('{{ asset('assets/images/hero_background.png') }}');"></div>
            <div class="slide-overlay"></div>
        </div>

        {{-- Slide 2 – Lena Collection --}}
        <div class="carousel-slide" data-index="1">
            <div class="slide-bg" data-anim="pan-right"
                 style="background-image: url('{{ asset('assets/images/lena_collection.png') }}');"></div>
            <div class="slide-overlay"></div>
        </div>

        {{-- Slide 3 – Aeris Collection --}}
        <div class="carousel-slide" data-index="2">
            <div class="slide-bg" data-anim="pan-left"
                 style="background-image: url('{{ asset('assets/images/aeris_collection.png') }}');"></div>
            <div class="slide-overlay"></div>
        </div>

        {{-- Slide 4 – Arc Alum Collection --}}
        <div class="carousel-slide" data-index="3">
            <div class="slide-bg" data-anim="zoom-out"
                 style="background-image: url('{{ asset('assets/images/arc_alum_collection.png') }}');"></div>
            <div class="slide-overlay"></div>
        </div>

        {{-- Slide 5 – Arc Teak Collection --}}
        <div class="carousel-slide" data-index="4">
            <div class="slide-bg" data-anim="drift-up"
                 style="background-image: url('{{ asset('assets/images/arc_teak_collection.png') }}');"></div>
            <div class="slide-overlay"></div>
        </div>



        {{-- Background Audio --}}
        <audio id="hero-audio" loop>
            <source src="https://cdn.pixabay.com/download/audio/2022/01/18/audio_d0a13f69d2.mp3?filename=ambient-piano-amp-strings-10711.mp3" type="audio/mpeg">
        </audio>

        {{-- Audio Control Button --}}
        <button class="audio-toggle-btn" id="audio-toggle-btn" aria-label="Toggle Audio">
            <svg id="icon-unmute" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" style="display:none;">
                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                <path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path>
            </svg>
            <svg id="icon-mute" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                <line x1="23" y1="9" x2="17" y2="15"></line>
                <line x1="17" y1="9" x2="23" y2="15"></line>
            </svg>
        </button>

    </section>

    <!-- Inspired By Nature Section (Collections Horizontal Scroll) -->
    <section class="inspired-section" id="collections">
        <div class="container">
            <div class="inspired-header">
                <h2 class="inspired-title">INSPIRED BY NATURE, PERFECTED BY CRAFT</h2>
                <a href="#" class="inspired-link" onclick="scrollToSection('collections'); return false;">
                    <span>ALL COLLECTION</span>
                    <span>&nearr;</span>
                </a>
            </div>
            
            <div class="collections-slider-container">
                <div class="collections-slider">
                    @foreach($collections as $collection)
                        <div class="collection-card" onclick="openDrawer('{{ $collection->slug }}')">
                            <div class="collection-img-box">
                                <img src="{{ asset($collection->image_path) }}" alt="{{ $collection->name }}" class="collection-img">
                                <div class="collection-overlay"></div>
                            </div>
                            <div class="collection-info">
                                <div class="collection-name-box">
                                    <h3 class="collection-card-name">{{ $collection->name }}</h3>
                                    <span class="collection-card-designer">by {{ $collection->designer ?? 'Luxury Studio' }}</span>
                                </div>
                                <div class="collection-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                        <line x1="7" y1="17" x2="17" y2="7"></line>
                                        <polyline points="7 7 17 7 17 17"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Designed For Living (About / Story Section) -->
    <section class="story-section" id="story">
        <div class="container">
            <div class="story-grid">
                <div class="story-info">
                    <span class="story-subtitle">DESIGNED FOR LIVING</span>
                    <h3 class="story-title">THE ART OF BESPOKE OUTDOOR SPACES</h3>
                    <p class="story-desc">
                        Every piece in the Luxury portfolio is born from a desire to elevate outdoor experiences. We source only the finest sustainably harvested grade-A teak and marry it with weather-resistant high-performance raw materials.
                    </p>
                    <p class="story-desc">
                        Our designs reflect structural lightness and clean lines, creating architectural dialogues between modern masonry and organic landscaping. Enjoy durability that endures generations.
                    </p>
                    <button class="story-btn" onclick="scrollToSection('contact')">REQUEST CATALOGUE</button>
                </div>
                <div class="story-img-box">
                    <img src="{{ asset('assets/images/arc_teak_collection.png') }}" alt="Luxury Teak Dining Set">
                </div>
            </div>
        </div>
    </section>

    <!-- Inquiry / Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-title-box">
                        <span class="contact-subtitle">EXPERIENCE LUXURY</span>
                        <h3 class="contact-title">DISCUSS YOUR VISION WITH US</h3>
                    </div>
                    <p class="contact-desc">
                        Whether you are an architect designing a high-end luxury resort, or a private client seeking to furnish a premium terrace, our design consultants are ready to assist you. We offer bespoke dimensions, material selections, and worldwide shipping.
                    </p>
                    <div class="contact-details">
                        <div class="contact-detail-item">
                            <span class="contact-detail-label">OFFICE & SHOWROOM</span>
                            <span class="contact-detail-value">Jalan Sunset Road No. 888, Seminyak, Bali, Indonesia</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="contact-detail-label">PHONE INQUIRIES</span>
                            <span class="contact-detail-value">+62 (361) 987 6543</span>
                        </div>
                        <div class="contact-detail-item">
                            <span class="contact-detail-label">EMAIL COMMUNICATIONS</span>
                            <span class="contact-detail-value">concierge@luxury.com</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <form class="contact-form" id="inquiry-form" action="{{ route('inquiry.submit') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="name" class="form-input" placeholder=" " required id="inq-name">
                                <label for="inq-name" class="form-label">YOUR FULL NAME</label>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-input" placeholder=" " required id="inq-email">
                                <label for="inq-email" class="form-label">EMAIL ADDRESS</label>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-input" placeholder=" " id="inq-phone">
                                <label for="inq-phone" class="form-label">PHONE NUMBER (OPTIONAL)</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-input" placeholder=" " id="inq-subject">
                                <label for="inq-subject" class="form-label">SUBJECT OF INTEREST</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" class="form-input form-textarea" placeholder=" " required id="inq-message"></textarea>
                            <label for="inq-message" class="form-label">OUTLINE YOUR PROJECT OR INQUIRY DETAILS</label>
                        </div>
                        
                        <button type="submit" class="submit-btn" id="inquiry-submit-btn">SUBMIT REQUEST</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
// ----- Carousel Engine -----
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        const playBtn = document.getElementById('carousel-play-btn');
        const counterCurrent = document.getElementById('counter-current');
        const totalSlides = slides.length;
        let currentIndex = 0;
        let isPlaying = true;
        const slideDuration = 6000; // ms per slide
        let slideTimer;

        function goToSlide(index) {
            index = (index + totalSlides) % totalSlides;
            slides[currentIndex].classList.remove('active');
            if (indicators.length > 0) indicators[currentIndex].classList.remove('active');
            
            slides[index].classList.add('active');
            if (indicators.length > 0) indicators[index].classList.add('active');
            
            if (counterCurrent) counterCurrent.textContent = (index + 1).toString().padStart(2, '0');
            if (indicators.length > 0) {
                indicators.forEach((ind, i) => ind.classList.toggle('done', i < index));
            }
            currentIndex = index;
            resetTimer();
        }

        function nextSlide() { goToSlide(currentIndex + 1); }
        function prevSlide() { goToSlide(currentIndex - 1); }

        function resetTimer() {
            if (slideTimer) clearTimeout(slideTimer);
            if (isPlaying) slideTimer = setTimeout(nextSlide, slideDuration);
        }

        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        if (indicators.length > 0) {
            indicators.forEach((ind, i) => ind.addEventListener('click', () => goToSlide(i)));
        }
        if (playBtn) {
            playBtn.addEventListener('click', () => {
                isPlaying = !isPlaying;
                const label = playBtn.querySelector('#play-label');
                const pauseIcon = playBtn.querySelector('#icon-pause');
                const playIcon = playBtn.querySelector('#icon-play');
                if (isPlaying) {
                    label.textContent = 'PAUSE';
                    pauseIcon.style.display = '';
                    playIcon.style.display = 'none';
                    resetTimer();
                } else {
                    label.textContent = 'PLAY';
                    pauseIcon.style.display = 'none';
                    playIcon.style.display = '';
                    if (slideTimer) clearTimeout(slideTimer);
                }
            });
        }
        resetTimer();

        // Audio Control
        const heroAudio = document.getElementById('hero-audio');
        const audioBtn = document.getElementById('audio-toggle-btn');
        const iconMute = document.getElementById('icon-mute');
        const iconUnmute = document.getElementById('icon-unmute');

        if (audioBtn && heroAudio) {
            audioBtn.addEventListener('click', () => {
                if (heroAudio.paused) {
                    heroAudio.play().catch(e => console.log('Audio play failed', e));
                    iconMute.style.display = 'none';
                    iconUnmute.style.display = 'block';
                } else {
                    heroAudio.pause();
                    iconMute.style.display = 'block';
                    iconUnmute.style.display = 'none';
                }
            });
        }
        // End of Carousel Engine

        // Collection Cards Scroll and Hover Parallax Effect
        const collectionImages = document.querySelectorAll('.collection-img');
        const collectionCards = document.querySelectorAll('.collection-card');
        const hoverStates = new Map();

        collectionCards.forEach((card, index) => {
            hoverStates.set(index, { isHovered: false });
            card.addEventListener('mouseenter', () => {
                hoverStates.set(index, { isHovered: true });
                updateCardParallax();
            });
            card.addEventListener('mouseleave', () => {
                hoverStates.set(index, { isHovered: false });
                updateCardParallax();
            });
        });

        function updateCardParallax() {
            collectionImages.forEach((img, index) => {
                const rect = img.parentElement.getBoundingClientRect();
                const viewHeight = window.innerHeight;
                
                if (rect.bottom >= 0 && rect.top <= viewHeight) {
                    // Distance of the collection image container from the viewport center
                    const elementCenter = rect.top + rect.height / 2;
                    const screenCenter = viewHeight / 2;
                    const distance = elementCenter - screenCenter;
                    
                    // Map distance to relative scroll translation offset
                    const offset = (distance / screenCenter) * -35; // shift range
                    
                    const isHovered = hoverStates.get(index)?.isHovered;
                    const scale = isHovered ? 1.12 : 1.02; // hover zoom scale coordinated with translation
                    
                    img.style.transform = `translateY(${offset}px) scale(${scale})`;
                }
            });
        }

        window.addEventListener('scroll', updateCardParallax);
        window.addEventListener('resize', updateCardParallax);
        // Run initially to position cards correctly based on scroll placement
        updateCardParallax();

        // AJAX Contact Inquiry form submission
        const inquiryForm = document.getElementById('inquiry-form');
        const inquirySubmitBtn = document.getElementById('inquiry-submit-btn');

        inquiryForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Disable button and set visual feedback
            inquirySubmitBtn.disabled = true;
            inquirySubmitBtn.innerText = "TRANSMITTING...";

            const formData = new FormData(inquiryForm);
            const data = {};
            formData.forEach((value, key) => data[key] = value);

            fetch(inquiryForm.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(res => {
                inquirySubmitBtn.disabled = false;
                inquirySubmitBtn.innerText = "SUBMIT REQUEST";
                
                if (res.success) {
                    showToast('Request Received', res.message, 'success');
                    inquiryForm.reset();
                } else {
                    showToast('Submission Failed', res.message || 'Validation error occured.', 'error');
                }
            })
            .catch(err => {
                console.error(err);
                inquirySubmitBtn.disabled = false;
                inquirySubmitBtn.innerText = "SUBMIT REQUEST";
                showToast('Submission Error', 'Please check your inputs and try again.', 'error');
            });
        });
    </script>
@endsection
