<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
        .active {
            color: red;

        }
    </style>
</head>

<body class="bg-[#212121] scroll-smooth">

    <nav class="w-full fixed top-0 bg-[#F9F6EE] text-[#212121] z-50 ">
        <main class="container  mx-auto lg:px-16   md:px-10 px-4 flex items-center py-5 justify-between">
            <a href="#home" class="text-2xl font-bold">LittleDune</a>
            <div class="lg:flex gap-10 hidden text-lg font-semibold items-center">
             
                <a class="relative group nav-link" href="#services" data-section="services">
                    Services
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#skills" data-section="skills">
                    Skills
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#work" data-section="work">
                    Work
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
            
                <a href=""
                    class="bg-red-700 px-4 py-2 text-[#F9F6EE] hover:border-red-700 border hover:bg-[#F9F6EE] hover:text-red-700 duration-200 ease-in-out rounded-tr-2xl rounded-b-2xl">
                    Hire Me
                </a>
            </div>
        </main>
    </nav>

    <section id="home" class="h-screen ">
        <div
            class="w-[45%] rounded-br-[72px] relative p-20 text-[#F9F6EE] gap-3 aspect-square bg-red-700 flex flex-col justify-center">
            <div class="absolute w-3/4 right-0 top-0 translate-x-full">
                <img src="{{ asset('images/alif.jpg')}}" draggable="false" class="w-full" alt="">
                <p class="w-fit ms-auto mt-5">Follow on <a class="hover:text-red-700 duration-200 ease-in-out"
                        href="">Facebook</a> | <a class="hover:text-red-700 duration-200 ease-in-out"
                        href="">Instagram</a> | <a class="hover:text-red-700 duration-200 ease-in-out"
                        href="">Linkedln</a></p>

            </div>
            <small>Welcome to my profile</small>
            <h2 class="text-6xl font-semibold">I am <span class="text-[#212121]">Alif</span> Nur Sanubari</h2>
            <h2 class="text-7xl font-semibold">UI/UX Designer </h2>
            <p>I craft intuitive, visually captivating digital experiences by understanding user behavior to create
                delightful and empowering interfaces.</p>
            <a href=""
                class="border-[#F9F6EE] hover:bg-[#F9F6EE] font-bold duration-200 ease-in-out hover:text-red-700 w-fit border bg-transparent px-4 py-2 text-[#F9F6EE] rounded-tr-2xl rounded-b-2xl">Download
                CV</a>

        </div>
    </section>


    
    <section id="services" class="py-24  overflow-hidden text-white">
        <p class="text-center">My Services <span class="text-red-700">01</span></p>
        <main class="container mx-auto lg:px-24 md:px-10 px-4 mt-10 ">
            <div class="bg-neutral-900 rounded-br-[72px]  grid grid-cols-4 grid-rows-1">
                <div
                    class="w-full aspect-[5/6] duration-300 ease-in-out hover:-translate-y-3 flex flex-col text gap-4 p-4 hover:bg-red-700 rounded-br-[72px] ">
                    <h1 class="text-5xl font-bold">01</h1>
                    <h1 class="text-5xl font-bold">Web Design</h1>
                    <p>Im break down Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex reprehenderit fugiat
                        modi omnis iure aspernatur excepturi, sunt facere! Est, nostrum.</p>

                </div>
                <div
                    class="w-full aspect-[5/6] duration-300 ease-in-out hover:-translate-y-3 flex flex-col text gap-4 p-4 hover:bg-red-700 rounded-br-[72px] ">
                    <h1 class="text-5xl font-bold">02</h1>
                    <h1 class="text-5xl font-bold">Web Design</h1>
                    <p>Im break down Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex reprehenderit fugiat
                        modi omnis iure aspernatur excepturi, sunt facere! Est, nostrum.</p>

                </div>
                <div
                    class="w-full aspect-[5/6] duration-300 ease-in-out hover:-translate-y-3 flex flex-col text gap-4 p-4 hover:bg-red-700 rounded-br-[72px] ">
                    <h1 class="text-5xl font-bold">03</h1>
                    <h1 class="text-5xl font-bold">Web Design</h1>
                    <p>Im break down Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex reprehenderit fugiat
                        modi omnis iure aspernatur excepturi, sunt facere! Est, nostrum.</p>

                </div>
                <div
                    class="w-full aspect-[5/6] duration-300 ease-in-out hover:-translate-y-3 flex flex-col text gap-4 p-4 hover:bg-red-700 rounded-br-[72px] ">
                    <h1 class="text-5xl font-bold">04</h1>
                    <h1 class="text-5xl font-bold">Web Design</h1>
                    <p>Im break down Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex reprehenderit fugiat
                        modi omnis iure aspernatur excepturi, sunt facere! Est, nostrum.</p>

                </div>

            </div>

        </main>
    </section>

    <section id="skills" class="py-24  overflow-hidden text-[#F9F6EE]">
        <p class="text-center">My Skill <span class="text-red-700">02</span></p>
        <main class="container mx-auto lg:px-24 md:px-10 px-4 mt-10 grid grid-cols-6 grid-rows-1 gap-3">
            @foreach ($skill as $i)

                <div class="w-full  rounded-md shadow relative group bg-[#F9F6EE] p-3 text-[#212121]">
                    <img src="{{Storage::url($i->gambar)}}" draggable="false"
                        class="w-2/4 mx-auto aspect-square object-contain" alt="">
                    <h1 class="text-base text-red-700 font-semibold">{{$i->nama}}</h1>
                    <p class="text-xs ">{{$i->misal}}</p>

                </div>

                </div>

            @endforeach

        </main>
    </section>
    <section id="work" class="py-24  overflow-hidden text-[#F9F6EE]">
        <p class="text-center">My Work <span class="text-red-700">03</span></p>
        <main class="container mx-auto lg:px-24 md:px-10 px-4 mt-10 grid grid-cols-4 grid-rows-1 gap-3">
            @foreach ($works as $i)
                <div class="w-full aspect-[3/6] rounded-md shadow relative group bg-[#F9F6EE]">
                    <img src="{{ Storage::url($i->gambar) }}" draggable="false"
                        class="w-full top-0 left-0 h-full absolute mx-auto aspect-square object-cover" alt="">
                    <div class="relative z-10 h-full bg-neutral-950 group-hover:bg-opacity-50 duration-200 ease-in-out bg-opacity-20 w-full p-4 flex flex-col justify-end">
                        <h1 class="text-7xl font-bold absolute top-1/2 group-hover:opacity-0 duration-200 ease-in-out -translate-y-1/2 left-1/2 -translate-x-1/2">{{ $loop->iteration }}</h1>
                        <h1 class="  text-2xl font-semibold">{{ $i->nama }}</h1>
                        <p class="  text-sm">{{ $i->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </main>
    </section>







    <footer id="contact" data-aos="fade-up" class=" text-[#F9F6EE] bg-neutral-900">

        <div class=" w-full ">
            <div class="container  lg:px-16 md:px-10 px-4 mx-auto flex gap-6 py-16">
                <div class="w-1/2">
                <p class="">Lets talk now <span class="text-red-700">04</span></p>
                    <h1 class="text-6xl font-bold mb-4">Do You Have A Project In Your Mind ?</h1>
                    <p class="text-lg mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus numquam quidem enim voluptatum quia. Laboriosam minima odit cupiditate facilis error doloremque, atque sequi repellendus.</p>
                  
                </div>
                <div class="w-1/2  ">
                    <form action="" class="text-[#212121] p-4 flex flex-col gap-3">

                        <input type="text" class="text-2xl bg-white w-full px-4 py-2 text-black" name="" id=""
                        placeholder="Name">
                        <input type="email" class="text-2xl bg-white w-full px-4 py-2 text-black" name="" id=""
                        placeholder="Email">
                        <textarea name="" class="text-2xl bg-white w-full px-4 py-2 text-black h-40" id=""
                        placeholder="Type your message here"></textarea>
                        <button class="text-2xl px-8 py-2 w-full rounded text-[#F9F6EE] bg-red-700">Submit</button>
                    </form>

                </div>

            </div>



        </div>
    </footer>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 64,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.id;
                        navLinks.forEach(link => {
                            ;
                            if (link.getAttribute('data-section') === sectionId) {

                                link.classList.add('active');

                            } else {

                                link.classList.remove('active');


                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>