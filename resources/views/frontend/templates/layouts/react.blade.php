
 <!-- <section class="w-screen mx-auto py-4 bg-indigo-800 text-white-900 lg:text-white-900"> -->
    <!-- <section class="w-screen mx-auto py-4 bg-indigo"> -->
    <!-- <section class="w-screen mx-auto py-8 gradient-oyeach"> -->
    <section id="react" class="w-screen mx-auto py-8 gradient-oyeach">
        <div class="text-center mb-8">
            <!-- <h1 class="w-full my-2 text-5xl font-bold text-white-700">MY REACT WORK</h1> -->
            <h1 class="w-full my-2 text-5xl font-bold text-gray-900">DAFTAR MINUMAN</h1>
            <div class="mb-4">
                <div class="h-1 mx-auto bg-pink-500 w-1/4 opacity-75 my-0 py-0 rounded"></div>
            </div>
            <p class="text-lg m-4 text-2xl font-bold text-gray-900">SELAMAT MENIKMATI  : </p>
        </div>
        <div class="grid grid-cos-1 sm:grid-cols-2 lg:grid-cols-4 m-8">
            <!-- <div class="bg-blue-500 px-4 py-4 m-2 shadow-lg rounded h-32"></div> -->

                @for ($i = 0; $i < 16; $i++ )
                    <div class="bg-blue px-4 py-4 m-2 shadow-lg rounded ">
                        <img src="img/img1.jpg" class="w-fill rounded-lg">
                        <div class="px-2 py-2 text-center">
                            <p class="fond-bold text-2xl font-bold mb-2 text-gray-900">Sistem Pendaftaran Siswa</p>
                            <div class="mb-4">
                                <div class="h-1 mx-auto bg-pink-500 w-1/4 opacity-75 my-0 py-0 rounded"></div>
                            </div>
                            <p class="text-white-900 text-base font-bold"> Sistem Pendaftaran Siswa Menggunakan Laravel 5.8, Admin LTE, Bootstrap,
                            </p>
                        </div>
                        <div class="px-2 py-2 text-center">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tr-lg rounded-bl-lg">Detail</button>
                        </div>
                    </div>
                @endfor
        </div>

    </section>
    <!-- component -->
    {{--  <ul class="flex rounded w-auto font-sans gradient-nav">  --}}
        <ul class="flex list-reset border border-blue-900 rounded w-auto font-sans gradient-nav">
        <li><a class="block hover:text-white hover:bg-blue text-blue border-r  border-blue-900 px-3 py-2" href="#">Previous</a></li>
        <li><a class="block hover:text-white hover:bg-blue text-blue border-r  border-blue-900 px-3 py-2" href="#">1</a></li>
        <li><a class="block hover:text-white hover:bg-blue text-blue border-r  border-blue-900 px-3 py-2" href="#">2</a></li>
        <li><a class="block text-blue bg-blue border-r border-blue px-3 py-2" href="#">3</a></li>
        <li><a class="block hover:text-blue hover:bg-blue text-blue px-3 py-2" href="#">Next</a></li>
    </ul>




