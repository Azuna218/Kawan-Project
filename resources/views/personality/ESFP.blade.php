@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ESFP Personality</title>
    <link rel="stylesheet" href="{{ asset('css/personality/output.css') }}">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">

    <link href="output.css" rel="stylesheet" />
    <link rel="stylesheet" href="coba.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <style>
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-pink-50 font-sans leading-normal tracking-normal">
    {{-- Navbar Start --}}
    <nav class="sticky top-0 z-50 bg-white">
    </nav>
    {{-- Navbar End --}}

    @section('content')

        <section class="bg-purple-300 p-8 flex items-center justify-center fade-in">
            <div class="flex items-center">
                <div class="ml-6 text-white text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold">Congratulations!</h1>
                </div>
            </div>
        </section>

        <section class="p-8 flex flex-col justify-center items-center fade-in">
            <img src="asset/personality/ESFP.png" alt="Large Image" class="w-full max-w-2xl" />
            <span class="font-bold text-amber-700 text-8xl mt-4 justify-center items-center">ESFP</span>
        </section>

        <section class="p-6 bg-pink-custom fade-in">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold">What is an ESFP?</h2>
                <p class="mt-4 text-base md:text-lg">
                    ESFP (Extraverted, Intuitive, Feeling, Judging) dikenal sebagai "Sang
                    Protagonis." Mereka adalah pemimpin karismatik dan empatik yang penuh
                    semangat membantu orang lain. ENFJ berkembang dalam peran yang
                    memungkinkan mereka menginspirasi dan memotivasi orang lain menuju
                    tujuan bersama.
                </p>
            </div>
        </section>

        <section class="p-6 bg-white fade-in">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                    Benefits of Being an ESFP
                </h2>
                <ul class="mt-4 text-base md:text-lg text-pink-custom space-y-4">
                    <li>
                        1. ESFP membawa suasana spontanitas dan kegembiraan ke setiap
                        situasi.
                    </li>
                    <li>
                        2. ESFP adalah orang yang pandai bergaul yang menikmati berinteraksi
                        dengan orang lain.
                    </li>
                    <li>
                        3. ESFP adalah individu yang mudah beradaptasi dan berkembang di
                        lingkungan yang dinamis dan cepat.
                    </li>
                    <li>
                        4. ESFP memiliki imajinasi yang kaya dan menikmati menjelajahi
                        kreativitas mereka dalam berbagai bentuk, seperti seni, musik, atau
                        pertunjukan.
                    </li>
                    <li>
                        5. ESFP memiliki pandangan hidup yang cerah dan sikap positif yang
                        bisa menular.
                    </li>
                </ul>
            </div>
        </section>

        <div class="flex justify-center my-8 transition-colors duration-300 fade-in">
            <button id="downloadButton"
                class="bg-[#F2789F] text-white py-2 px-4 rounded-lg transition-transform transform hover:scale-110 hover:bg-pink-700">
                Download ESFP
            </button>
        </div>

        <section class="p-6 text-purple-400 bg-white text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                Deep dive ESFP
            </h2>
        </section>

        <section class="relative bg-purple-300 p-8 fade-in">
            <div class="backdrop-blur-lg bg-white bg-opacity-20 p-6 rounded-lg">
                <div class="max-w-4xl mx-auto text-center text-white">
                    <h2 class="text-3xl md:text-4xl font-bold">
                        What does ENTP stand for?
                    </h2>
                    <p class="mt-4 text-base md:text-lg">
                        ENTPs are enthusiastic, creative, and sociable free spirits. They
                        can always find a reason to smile. ENTPs are known for their quick
                        wit and intellectual curiosity. They are driven by the desire to
                        understand the world around them. These individuals are strategic
                        and love to brainstorm and think big. Their energy and enthusiasm
                        can be infectious and they are often seen as inspiring leaders.
                        However, they can also be prone to procrastination and may struggle
                        with follow-through on their many ideas. They thrive in dynamic
                        environments where they can challenge the status quo and explore new
                        possibilities. ENTPs are natural debaters and enjoy engaging in
                        lively discussions. They are also adaptable and can pivot quickly
                        when needed. Overall, ENTPs bring a sense of innovation and
                        excitement to any team or project they are part of.
                    </p>
                    <h2 class="mt-6 text-3xl md:text-4xl font-bold">
                        Career Paths for ENTPs
                    </h2>
                    <p class="mt-4 text-base md:text-lg">
                        ENTPs are well-suited for careers that involve innovation,
                        problem-solving, and strategic thinking. Some ideal job roles
                        include:
                    </p>
                    <ul class="mt-4 text-base md:text-lg space-y-4">
                        <li>1. Entrepreneur</li>
                        <li>2. Marketing Manager</li>
                        <li>3. Consultant</li>
                        <li>4. Lawyer</li>
                        <li>5. Inventor</li>
                        <li>6. Public Relations Specialist</li>
                    </ul>
                </div>
            </div>
            <div class="absolute inset-0 flex items-center justify-center backdrop-blur-lg">
                <button class="bg-white bg-opacity-70 rounded-full p-4 hover:bg-opacity-100 transition"
                    onclick="location.href='next_steps.html'">
                    <img src="asset/personality/locked-padlock.png" alt="Key Icon" class="h-12 w-12" />
                </button>
            </div>
        </section>


        @endsection
</body>


        <script>
            document
                .getElementById("downloadButton")
                .addEventListener("click", function() {
                    const fileUrl = "/asset/personality/ESFP.pdf";

                    const link = document.createElement("a");
                    link.href = fileUrl;
                    link.download = "ESFP.pdf";

                    document.body.appendChild(link);

                    link.click();

                    document.body.removeChild(link);
                });
        </script>
</html>
