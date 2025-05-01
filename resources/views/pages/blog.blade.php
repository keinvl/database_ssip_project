@extends('layout')

@section('title', 'Blog')

@section('content')
    <section class="blog">
        <div class="container">
            <h1 class="blog__title1 heading">Our Blog</h1>
            <div class="blog__list">
                <!-- blog 1 -->
                <section class="blog__item">
                    <div class="blog__bg">
                        <p class="blog__date">21 june 2024</p>
                        <figure class="blog__image">
                            <img src=" img/blog-1.png" alt="" class="blog__img"/>
                        </figure>
                    </div>

                    <h3>
                        <a class="blog__title2" href="#!">Building Bonds and Trusting Relationships with Your
                            Pets.</a>
                    </h3>
                    <p class="blog__info">
                        There isn’t a relationship around that can survive
                        without trust. My relationship with my dog Peyton is
                        deep...
                    </p>
                </section>

                <!-- blog 2 -->
                <section class="blog__item">
                    <div class="blog__bg">
                        <p class="blog__date">28 june 2024</p>
                        <figure class="blog__image">
                            <img src=" img/blog-2.png" alt="" class="blog__img"/>
                        </figure>
                    </div>

                    <h3 >
                       <a class="blog__title2" href="#!"> Celebrity pet photographer Grace Chon on taking ...</a>
                    </h3>
                    <p class="blog__info">
                        Doting pet parents have a relentless need to
                        constantly photograph every adorable pet moment...
                    </p>
                </section>

                <!-- blog 3 -->
                <section class="blog__item">
                    <div class="blog__bg">
                        <p class="blog__date">10 july 2024</p>
                        <figure class="blog__image">
                            <img
                                src=" img/blog-3.png" alt="" class="blog__img"/>
                        </figure>
                    </div>

                    <h3 >
                       <a class="blog__title2" href="#!"> 5 Simple Tricks To Create A More Conscious ...</a>
                    </h3>
                    <p class="blog__info">
                        It is easy to forget that animals are living
                        creatures with a beating heart.
                    </p>
                </section>

                <!-- blog 4 -->
                <section class="blog__item">
                    <div class="blog__bg">
                        <p class="blog__date">17 September 2024</p>
                        <figure class="blog__image">
                            <img src="img/blog-4.jpg" alt="" class="blog__img"/>
                        </figure>
                    </div>

                    <h3>
                        <a class="blog__title2" href="#!">Tips to Make Our Pets Feel Comfortable in The Cage</a>
                    </h3>
                    <p class="blog__info">
                        Two different categories of pet owners exist in the world.
                        The first is, like to let their pets roam freely. 
                        Second, prefer to limit their pet's movements to avoid accidents.
                    </p>
                </section>

                <!-- blog 5 -->
                <section class="blog__item">
                    <div class="blog__bg">
                        <p class="blog__date">30 September 2024</p>
                        <figure class="blog__image">
                            <img
                                src=" img/blog-5.png" alt="" class="blog__img"/>
                        </figure>
                    </div>

                    <h3 >
                       <a class="blog__title2" href="#!">Simple Methods for Fully Getting Rid of Fleas on Pets!</a>
                    </h3>
                    <p class="blog__info">
                        Another issue that confuses pet owners is when fleas show up on their pets. 
                        Fleas are external pests that cling to animals and suck their blood.
                        They can also be a source of infections for our furry companions.
                    </p>
                </section>

                <!-- blog 6 -->
                <section class="blog__item">
                    <div class="blog__bg">
                        <p class="blog__date">2 Oktober 2024</p>
                        <figure class="blog__image">
                            <img src="img/blog-6.jpg" alt="" class="blog__img"/>
                        </figure>
                    </div>

                    <h3 >
                       <a class="blog__title2" href="#!">Is Your Beloved Pet Showing a Lack of Appetite?</a>
                    </h3>
                    <p class="blog__info">
                        It's highly dangerous for pets to skip meals or water for even a single day. 
                        If the pet doesn't eat, it will get weak and its body will start to change 
                        in metabolic that can hurt its liver.
                    </p>
                </section>
            </div>
        </div>
    </section>
@endsection