@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="img/bg.png" alt="">
            </div>
        </div>

        <section class="hero">
        <div class="container">
            <div class="hero__body">
                <!-- hero media -->
                <div class="hero__media">
                    <div class="hero__img-wrap">
                        <img
                            src=" img/pet-01.png"
                            alt=""
                            class="hero__img"
                        />
                        <!-- decor -->
                        <img
                            src=" img/decor-01.svg"
                            alt=""
                            class="hero__decor hero__decor-left"
                        />
                        <img
                            src=" img/decor-02.svg"
                            alt=""
                            class="hero__decor hero__decor-right"
                        />
                    </div>

                    <div class="hero__img-wrap hero__img-wrap-small">
                        <img src=" img/pet-02.png" alt="" class="hero__img hero__img-small"/>
                    </div>

                    <div class="hero__list">
                        <!-- item 1 -->
                        <div class="hero-list-item">
                            <img class="hero-list-item__thumb" src=" img/pet-03.png" alt=""/>
                            <div class="hero-list-item__info">
                                <p class="hero-list-item__title">
                                    Pet Health
                                </p>
                                <div class="hero-list-item__skeleton"></div>
                                <div class="hero-list-item__skeleton" style="width: 39px"></div>
                            </div>
                        </div>

                        <div class="hero-list-item__separate"></div>

                        <!-- item 2 -->
                        <div class="hero-list-item">
                            <img class="hero-list-item__thumb hero-list-item__thumb-2" src=" img/pet-04.png" alt=""/>
                            <div class="hero-list-item__info">
                                <p class="hero-list-item__title">
                                    Pet Care
                                </p>
                                <div class="hero-list-item__skeleton"></div>
                                <div class="hero-list-item__skeleton" style="width: 39px"></div>
                            </div>
                        </div>

                        <div class="hero-list-item__separate"></div>

                        <!-- item 3 -->
                        <div class="hero-list-item">
                            <img class="hero-list-item__thumb" src=" img/pet-05.png" alt=""/>
                            <div class="hero-list-item__info">
                                <p class="hero-list-item__title">
                                    Pet Shop
                                </p>
                                <div class="hero-list-item__skeleton"></div>
                                <div class="hero-list-item__skeleton" style="width: 39px"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- hero content -->
                <section class="hero__content">
                    <h1 class="hero__content-title">
                        Ensuring Reliable & Top-Notch Pet Care Service
                    </h1>

                    <p class="hero__content-desc desc">
                        Discover the variety of services offered by PawPalls, 
                        including daycare, one-on-one walks, training sessions, 
                        and spa treatments.
                    </p>

                    <div class="hero__action">
                        <a href="/care" class="hero__action-btn btn">Book a Meet
                            <span class="btn__icon">
                                <svg
                                    width="5"
                                    height="6"
                                    viewBox="0 0 5 6"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M1.48584 0.5L3.98584 3L1.48584 5.5"
                                        stroke="#FD5056"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>
                        </a>
                        <a class="hero__action-link">Schedule a Call</a>
                    </div>
                </section>
            </div>
        </div>
    </section>
      <!-- end slider section -->
    </div>

        <!-- About 1-->
        <section class="about">
            <div class="container">
                <div class="about__body">
                    <div class="about__content">
                        <h2 class="about__content-title heading">
                            Best Agency For Your Pet!
                        </h2>
                        <p class="about__content-desc desc">
                            We’re here to help you be the best pet parent ever! 
                            Pallpaws was born with a strong vision to provide 
                            outstanding health and care services for pets, 
                            while fostering a friendly community atmosphere.
                        </p>

                        <div class="about__content-list">
                            <!-- item 1 -->
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <svg
                                        width="15"
                                        height="10"
                                        viewBox="0 0 15 10"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                                            stroke="#FFF2E5"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>

                                <p class="about-item__desc">
                                    Certified Groomer
                                </p>
                            </div>

                            <!-- item 2 -->
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <svg
                                        width="15"
                                        height="10"
                                        viewBox="0 0 15 10"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                                            stroke="#FFF2E5"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <p class="about-item__desc">Animal Lover</p>
                            </div>

                            <!-- item 3 -->
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <svg
                                        width="15"
                                        height="10"
                                        viewBox="0 0 15 10"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                                            stroke="#FFF2E5"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <p class="about-item__desc">
                                    20+ Years Experience
                                </p>
                            </div>

                            <!-- item 4 -->
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <svg
                                        width="15"
                                        height="10"
                                        viewBox="0 0 15 10"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                                            stroke="#FFF2E5"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </div>
                                <p class="about-item__desc">
                                    Pet Parent Of 3 Dogs
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="about__media">
                        <!-- card -->
                        <div class="about__box">
                            <p><strong>20+</strong> Years Experience</p>
                            <span class="about__box-decor"
                                ><img src=" img/about-02.svg" alt=""
                            /></span>
                        </div>

                        <figure class="about__img-wrap">
                            <img
                                src=" img/about-01.png"
                                alt=""
                                class="about__img"
                            />
                        </figure>

                        <!-- decor -->
                        <img
                            src=" img/about-03.svg"
                            alt=""
                            class="about__media-decor"
                        />
                    </div>

                    <!-- About 2-->

                    <div class="about__media">
                        <!-- card -->

                        <figure class="about__img-wrap about__img-wrap-bottom">
                            <img
                                src=" img/about-04.png"
                                alt=""
                                class="about__img-"
                            />

                            <!-- decor -->
                            <div>
                                <img
                                    src=" img/decor 8.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 9.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 10.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 11.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 12.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 13.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 13.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                                <img
                                    src=" img/decor 13.svg"
                                    alt=""
                                    class="about__decor-img"
                                />
                            </div>
                        </figure>
                    </div>
                    <div class="about__content">
                        <h2
                            class="about__content-title about__content-title-2 heading"
                        >
                            Taking A Vacation? So Is Your Pet.
                        </h2>
                        <p
                            class="about__content-desc about__content-desc-2 desc"
                        >
                            We offer long-term and short-term boarding. Every
                            dog has its own private, spacious room and daily
                            individual time in our large play yard.
                        </p>
                        <!-- Tab -->
                        <div class="tab">
                            <ul class="tab__list">
                                <!-- item 1 -->
                                <li class="tab__item">
                                    <img class="tab__item-icon" src=" img/icon-01.svg" alt=""/>
                                    <a href="javascript:void(0)" class="tab__item-name">
                                        Pet Boarding</a>
                                </li>

                                <!-- item 2 -->
                                <li class="tab__item">
                                    <img class="tab__item-icon" src=" img/icon-02.svg" alt=""/>
                                    <a href="javascript:void(0)" class="tab__item-name">
                                        Pet Daycare</a>
                                </li>

                                <!-- item 3 -->
                                <li class="tab__item">
                                    <img class="tab__item-icon" src=" img/icon-03.svg" alt=""/>
                                    <span class="tab__item-name">Pet Transport</span>
                                </li>
                            </ul>

                            <div class="tab__contents">
                                <div class="tab__content-item tab__content-item--active">
                                    <p class="tab__content-desc desc">
                                        While you're on holiday, here's where
                                        your furry friends will spend their
                                        time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Staff -->
        <section class="staff">
            <div class="container">
                <p class="staff__subtitle subtitle">Pet Care Staff</p>
                <h2 class="staff__title heading">Meet Our Team</h2>
                    <div class="staff__list">
                    @foreach ($staffs as $staff)
                        <div class="staff__item">
                            <figure class="staff__media">
                                <img src="{{ asset('img/' . $staff->photo) }}" alt="Staff" class="staff__img"/>
                                <span>
                                    <img src="{{ asset('assets/img/staff-decor-0' . $loop->iteration . '.svg') }}" alt="" class="staff__icon" />
                                </span>
                            </figure>
                            <h3 class="staff__item-name">{{ $staff->name }}</h3>
                            <p class="staff__item-subtitle">IT4</p>
                            <div class="staff__info">
                                <p class="staff__item-desc">
                                    @foreach ($staff->services as $service)
                                        {{ $service->name }}@if (!$loop->last), @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    <h2 class="qna__title heading">Frequently Asked Questions</h2>
    <span class="line"></span>
    <div class="qna__container">
        <ol>
            <li class="qna"> 
                <h3 class="question">How Do I Choose The Right Bag of Food?</h3>
                <p class="answer">
                    Read the ingredients. Ingredients are listed top to bottom by volume.
                    The highest quality foods list animal proteins as the first, second, or both ingredients. 
                    Ideally, it should list where that animal protein came from (ie – pork, beef, chicken, etc…).
                </p>
            </li>
            <li class="qna">
                <h3 class="question">How to Book A Service Appointments With PallPaws?</h3>
                <p class="answer">
                    From our homepage, please click the "book a meet" button, 
                    where you will be directed to contact us.
                    Kindly respond to each of the questions.
                    Once you've finished, submit your response and wait for an email from us, 
                    or you can look under the "Customer's Booking Time" in the "Pet Care" section."
                </p>
            </li>
            <li class="qna">
                <h3 class="question">Do Harness Actually Teach Pets to Pull?</h3>
                <p class="answer">
                    The short answer is no. 
                    It is natural for pets to resist a restraint when they feel the tug of a harness 
                    or collar and they want to remove that strain by breaking free. 
                    But it isn’t the pet’s reaction to the restraint that causes it to become a puller for life. 
                    It’s actually our treatment of this reaction as an owner.
                </p>
            </li>
        </ol> 
    </div>

    <h2 class="qna__title heading">Dangerous Foods for Pets!</h2>
    <span class="line"></span>
    <div class="qna__container">
        <ol>
            <li class="qna"> 
                <h3 class="question">Xylitol</h3>
                <p class="answer">
                    Candy, gum, toothpaste, baked goods, and some diet foods are sweetened with xylitol. 
                    It can cause your pet's blood sugar to drop and can also cause liver failure. 
                    Early symptoms include vomiting, lethargy, and coordination problems. 
                    Eventually, your pet may have seizures. Liver failure can happen within just a few days.
                </p>
            </li>
            <li class="qna">
                <h3 class="question">Alcohol</h3>
                <p class="answer">
                    Alcohol has the same effect on a pet’s liver and brain that it has on people.
                    Just a little beer, liquor, wine, or food with alcohol can be bad. 
                    It can cause vomiting, diarrhea, coordination problems, breathing problems, coma, even death. 
                    And the smaller your pet, the worse it can be.
                </p>
            </li>
            <li class="qna">
                <h3 class="question">Coffee, Tea, and Other Caffeins</h3>
                <p class="answer">
                    Caffeine can be fatal.  
                    Watch out for coffee and tea, even the beans and the grounds. 
                    Keep your pet away from cocoa, chocolate, colas, and energy drinks. 
                    Caffeine is also in some cold medicines and pain killers. 
                </p>
            </li>
        </ol> 
    </div>
@endsection