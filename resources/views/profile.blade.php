<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>POJOK DESA</title>
		@vite('resources/css/app.css')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            *{
            font-family: 'Poppins', sans-serif; 
        }
        </style>
	</head>
<body>
    <!-- Header Start -->
    <header class="bg-transparent top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#Home" class="font-bold text-2xl text block py-6 text-sky-600 lg:text-3xl">Pojok Desa</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-menu transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-menu transition duration-300 ease-in-out"></span>
                        <span class="hamburger-menu transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    
                    <nav id="nav-menu" class="hidden absolute py-5 rounded-xl bg-white shadow-xl max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class= "block lg:flex">
                            <li class="group">
                                <a href="index.html" class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Home</a>
                            </li >
                            <li class="group">
                                <a href="#Profile" class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Profile</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Activities</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Services & Complaints </a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Announcement</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            
        </div>
    </header> 
    <!-- Header End -->

    <!-- History Start -->
    <section id="history" class= "pt-20 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="font-bold text-sky-600 text-3xl lg:text-6xl">HISTORY 
                        <span class="block text-zinc-800 text-xl lg:text-3xl"> BANJAR VILLAGE</span></h1>
                    <p class="text-sm text-zinc-500 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis veritatis corporis nemo nihil ipsum? Vitae tenetur facilis consectetur accusamus porro nulla eos? Vel, incidunt numquam nostrum a perferendis sequi.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ex tempora aliquid, provident aspernatur facilis unde dicta laboriosam cumque aperiam labore id dolorem perspiciatis dolores adipisci doloribus magnam, numquam recusandae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit laudantium fugit, molestiae reprehenderit perferendis esse nobis aliquam et, repudiandae commodi, culpa eos accusantium? Aperiam magnam accusamus ipsam aut obcaecati.
                    </p>
                </div>
                <div class="w-full self-end px-10 lg:w-1/2">
                    <div class="mt-10 pb-24">
                        <img src="../dist/img/Air terjun.jpg" class="max-w-full mx-auto" alt="Air Panas Banjar">
                    </div>
                </div>
            </div>
    </section>
    <!-- History End -->

    <!-- Location Start -->
    <section id="history" class= "pt-20 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-end px-10 lg:w-1/2">
                    <div class="mt-10 pb-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126357.15318364289!2d114.96233551543817!3d-8.23679888008256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1833b851b4c3f%3A0xedaa855c24d6ef02!2sBanjar%2C%20Buleleng%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1667341506122!5m2!1sen!2sid" class="max-w-full mx-auto" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="font-bold text-right text-sky-600 text-3xl lg:text-6xl">LOCATION 
                        <span class="block text-zinc-800 text-xl lg:text-3xl"> BANJAR VILLAGE</span></h1>
                    <p class="text-sm text-zinc-500 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis veritatis corporis nemo nihil ipsum? Vitae tenetur facilis consectetur accusamus porro nulla eos? Vel, incidunt numquam nostrum a perferendis sequi.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ex tempora aliquid, provident aspernatur facilis unde dicta laboriosam cumque aperiam labore id dolorem perspiciatis dolores adipisci doloribus magnam, numquam recusandae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit laudantium fugit, molestiae reprehenderit perferendis esse nobis aliquam et, repudiandae commodi, culpa eos accusantium? Aperiam magnam accusamus ipsam aut obcaecati.
                    </p>
                </div>
            </div>
    </section>
    <!-- Location End -->

    <!-- Vision and Mission Start -->
    <section id="vis-mis" class="py-36 bg-sky-100">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10">
                    <h3 class="font-bold uppercase text-sky-600 text-center mb-3 text-xl lg:text-2xl">Vision and Mision</h3>
                    <h2 class="font-bold text-zinc-800 text-center mb-1 lg:text-2xl italic">"Our Vision"</h2>
                    <p class="text-center text-sm text-zinc-500 lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab a quibusdam, libero repellendus est non omnis qui accusantium odit? </p>
                    <h2 class="font-bold text-zinc-800 text-center mt-12 mb-1 lg:text-2xl italic">"Our Mission"</h2>
                    <p class="text-center text-sm text-zinc-500 lg:text-md"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat explicabo laborum architecto, alias quam ullam ratione quibusdam maiores commodi eius autem facere error pariatur, earum, reprehenderit impedit sequi eos asperiores.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision and Mission End -->

    <!-- Organization Start -->
    <section id="Organization" class="py-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h3 class="font-bold uppercase text-sky-600 text-center mb-1 text-xl lg:text-2xl">Village Organization</h3>
                    <h2 class="font-semibold text-zinc-800 text-center mb-4 lg:text-4xl italic">"You know us?"</h2>
                    <p class="text-center text-sm text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis veritatis corporis nemo nihil ipsum? Vitae tenetur facilis consectetur accusamus porro nulla eos? Vel, incidunt numquam nostrum a perferendis sequi.</p>
                </div>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto" >
            <div class="mb-12 p-10 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="../dist/img/Karang taruna.png" alt="Gotong Royong" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-center text-zinc-800 mt-5 mb-3">Karang Taruna</h3>
                <p class="text-sm text-center text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis veritatis corporis nemo nihil ipsum? </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="../dist/img/PKK.jpg" alt="Gotong Royong" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-center text-zinc-800 mt-5 mb-3">Pemerdayaan Kesejahteraan Keluarga</h3>
                <p class="text-sm text-center text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis veritatis corporis nemo nihil ipsum? </p>
            </div>
        </div>
    </section>
    <!-- Organization End -->

    <script src="script.js"></script>
</body>
</html>

