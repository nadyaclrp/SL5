@extends('master')
@section('tittle','Profile')

@section('body')
    <section id="profile" class="pt-px w-full">
        {{-- landing page --}}
            <div class="bg-gradient-to-l from-lavenderGray text-navy w-full">
                {{-- navbar --}}
                <div class="fixed flex flex-row justify-between font-semibold w-full h-auto p-5 ">
                    <div class="flex flex-row w-3/6 justify-start ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#232946" d="M7 9H2V7h5v2zm0 3H2v2h5v-2zm13.59 7l-3.83-3.83c-.8.52-1.74.83-2.76.83c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5c0 1.02-.31 1.96-.83 2.75L22 17.59L20.59 19zM17 11c0-1.65-1.35-3-3-3s-3 1.35-3 3s1.35 3 3 3s3-1.35 3-3zM2 19h10v-2H2v2z"/></svg>
                    </div>
                    <div class="flex flex-row justify-evenly w-3/6 fix">
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#biodata">Biodata</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#skills">Skills</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#experiences">Experiences</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach" href="#education">Education</a>
                        <a class="hover:bg-peach hover:rounded-lg active:bg-peach focus:outline-none focus:ring focus:ring-peach"  href="#reach">Reach</a>
                    </div>
                </div>

                <div class="flex p-1 justify-between w-full">
                    {{-- <div class="w-3/6 p-2 m-2 bg-black  bg-fixed" style="background-image: url('nadya.jpg')"></div> --}}
                    <div class="m-4 w-3/6 h-screen relative ">
                        <div class="flex absolute mx-auto w-full h-full -bottom-0">
                            <img class="fw-5/6 h-5/6 mr-auto ml-auto mt-auto mb-0" src="{{('/assets/nadyaRemove.png')}}">
                        </div>
                        <span class="-z-5">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#EEBBC3" d="M41.6,-70.4C51.5,-58.3,55.6,-42.8,56.4,-29.2C57.2,-15.6,54.8,-4.1,56.3,10.4C57.8,24.8,63.1,42.1,59,56.4C54.8,70.8,41.2,82.4,25.6,86.6C10.1,90.9,-7.4,87.8,-20.4,79.5C-33.5,71.2,-42,57.5,-48,44.8C-54,32.2,-57.5,20.5,-61.8,7.3C-66.1,-5.8,-71.3,-20.4,-65.8,-29C-60.2,-37.6,-43.9,-40.2,-31.1,-51C-18.4,-61.9,-9.2,-80.9,3.3,-86C15.8,-91.2,31.7,-82.5,41.6,-70.4Z" transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                    <div class=" m-4 w-3/6 pr-12 mt-16">
                        <div class="font-thin text-peach bg-navy mb-2 w-fit p-2">Education</div>
                        <h1 class="font-extrabold text-[4.5vw] mt-2 mb-2">Nadya Clarine Purba</h1>
                        <h1 class="font-normal mt-2 mb-2">Selamat datang di landing page Nadya, seorang mahasiswa inspiratif! Halaman ini adalah tempat di mana Anda dapat mengenal lebih dekat tentang Nadya, seorang mahasiswa yang menginspirasi banyak orang melalui perjuangannya dalam meraih mimpi dan mencapai tujuan hidupnya.
                            Di sini Anda akan menemukan konten-konten inspiratif yang mengulas tentang tips meraih sukses di dunia perkuliahan, kisah-kisah inspiratif, serta pengalaman-pengalaman berharga yang mungkin bisa menjadi referensi bagi Anda. Ayo, temukan inspirasi baru bersama Nadya!</h1>
                        <a class="font-medium mt-4 mb-4 hover:underline" href="#biodata">Read More</a>
                    </div>
                    <div>
                    </div>
                </div>
                {{-- <svg class="animate-bounce w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#eebbc3" d="M12 2a10 10 0 0 1 10 10a10 10 0 0 1-10 10A10 10 0 0 1 2 12A10 10 0 0 1 12 2m0 15l5-5h-3V8h-4v4H7l5 5Z"/></svg>  --}}
            </div>

            {{-- biodata --}}
            <div id="biodata" class="flex flex-col h-screen bg-gradient-to-b from-white to-peach text-navy  pr-32 pl-32 pt-24 pb-32 ">
                <h1 class="font-extrabold text-5xl text-peach text-center p-4">About Me</h1>
                <div class="flex place-content-start mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24"><path fill="#232946" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z"/></svg>
                </div>
                <p class="font-medium text-center">Saya adalah seorang mahasiswa IT semester 5 yang super semangat  dalam mengejar cita-citanya. Sejauh ini, saya sudah melewati berbagai tantangan seperti tugas pemrograman yang menguras pikiran dan deadline yang ngeri-ngeri sedap, tapi tetap bisa melewatinya dengan selalu ngasih komentar kocak.</p>
                <p class="font-medium text-center mt-2">
                    Saya sangat suka belajar tentang hal-hal baru di bidang IT, mulai dari programming, networking, cybersecurity, hingga data science. juga suka baca buku, nonton film atau serial, dengerin musik, dan main basket.
                    Di sela-sela kuliah, aku seringkali mengikuti kegiatan organisasi dan komunitas yang ada di kampus.
                </p>
                <p class="font-medium text-center mt-2"> Jadi, itulah sedikit deskripsi tentang diri saya sebagai mahasiswa IT semester 5 yang penuh semangat, lucu dan senang bergabung dengan organisasi dan komunitas baru di kampus. Saya selalu mencoba untuk menikmati setiap momen di kampus dan terus belajar untuk mengasah keterampilan dan pengetahuan saya di bidang IT.</p>
                <p class="font-semibold text-xl text-center mt-4">Terima kasih sudah membaca!</p>
                <div class="flex place-content-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24"><path fill="#232946" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z"/></svg>
                </div>
            </div>

            {{-- skills --}}
            <div id="skills" class=" h-screen bg-gradient-to-b from-peach to-lavenderGray text-navy pt-20">
                <h1 class="font-extrabold text-5xl text-navy text-center p-12">Skills</h1>
                <div class="flex flex-row justify-center p-12 ">
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#b8c1ec" d="M30 24v-2h-2.101a4.968 4.968 0 0 0-.732-1.753l1.49-1.49l-1.414-1.414l-1.49 1.49A4.968 4.968 0 0 0 24 18.101V16h-2v2.101a4.968 4.968 0 0 0-1.753.732l-1.49-1.49l-1.414 1.414l1.49 1.49A4.968 4.968 0 0 0 18.101 22H16v2h2.101a4.968 4.968 0 0 0 .732 1.753l-1.49 1.49l1.414 1.414l1.49-1.49a4.968 4.968 0 0 0 1.753.732V30h2v-2.101a4.968 4.968 0 0 0 1.753-.732l1.49 1.49l1.414-1.414l-1.49-1.49A4.968 4.968 0 0 0 27.899 24Zm-7 2a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3Z"/><path fill="#b8c1ec" d="M28 4H4a2.002 2.002 0 0 0-2 2v20a2.002 2.002 0 0 0 2 2h10v-2H4V12h24v3h2V6a2.002 2.002 0 0 0-2-2Zm0 6H4V6h24Z"/><circle cx="20" cy="8" r="1" fill="#b8c1ec"/><circle cx="23" cy="8" r="1" fill="#b8c1ec"/><circle cx="26" cy="8" r="1" fill="#b8c1ec"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs hover:text-navy hover:-translate-y-12 text-white font-semibold ">4.7/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Management</h1>
                    </div>
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 relative ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 28 28"><path fill="#b8c1ec" d="M17.754 11c.966 0 1.75.784 1.75 1.75v6.749a5.501 5.501 0 0 1-11.002 0V12.75c0-.966.783-1.75 1.75-1.75h7.502ZM3.75 11l4.382-.002a2.73 2.73 0 0 0-.621 1.532l-.01.22v6.749c0 1.133.291 2.199.8 3.127A4.501 4.501 0 0 1 2 18.499V12.75A1.751 1.751 0 0 1 3.751 11Zm16.124-.002L24.25 11c.966 0 1.75.784 1.75 1.75v5.75a4.5 4.5 0 0 1-6.298 4.127l.056-.102c.429-.813.69-1.729.738-2.7l.008-.326V12.75c0-.666-.237-1.276-.63-1.752ZM14 3a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7Zm8.003 1a3 3 0 1 1 0 6a3 3 0 0 1 0-6ZM5.997 4a3 3 0 1 1 0 6a3 3 0 0 1 0-6Z"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs text-white font-semibold hover:text-navy hover:-translate-y-12">4.7/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Team Work</h1>
                    </div>
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 48 48"><mask id="ipSBrain0"><g fill="none" stroke="#fff"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4.667" d="M19.036 44c-.98-3.195-2.458-5.578-4.435-7.147c-2.965-2.353-7.676-.89-9.416-3.318c-1.74-2.428 1.219-6.892 2.257-9.526c1.039-2.634-3.98-3.565-3.394-4.313c.39-.499 2.927-1.937 7.609-4.316C12.987 7.794 17.9 4 26.398 4C39.144 4 44 14.806 44 21.68c0 6.872-5.88 14.276-14.256 15.873c-.749 1.09.331 3.24 3.24 6.447"/><path fill="#fff" fill-rule="evenodd" stroke-linejoin="round" stroke-width="4" d="M19.5 14.5c-.654 2.534-.46 4.314.583 5.339c1.042 1.024 2.818 1.695 5.328 2.01c-.57 3.269.125 4.802 2.083 4.6c1.958-.201 3.135-1.015 3.53-2.44c3.06.86 4.719.14 4.976-2.16c.385-3.45-1.475-6.201-2.238-6.201c-.762 0-2.738-.093-2.738-1.148s-2.308-1.65-4.391-1.65s-.83-1.405-3.69-.85c-1.907.37-3.055 1.203-3.443 2.5Z" clip-rule="evenodd"/><path stroke-linecap="round" stroke-width="4" d="M30.5 25.5c-1.017.631-2.412 1.68-3 2.5c-1.469 2.05-2.66 3.298-2.92 4.608"/></g></mask><path fill="#b8c1ec" d="M0 0h48v48H0z" mask="url(#ipSBrain0)"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs hover:text-navy hover:-translate-y-12 text-white font-semibold">4.6/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Creativity</h1>
                    </div>
                    <div class="relative">
                        <div class="bg-white rounded-full w-36 h-36 mr-8 ml-8 flex justify-center items-center hover:scale-150 ease-in hover:bg-navy duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="#b8c1ec" d="M4 13a8 8 0 0 1 15.809-1.747a3.505 3.505 0 0 1 2.147 2.69c.03-.31.044-.625.044-.943c0-5.523-4.477-10-10-10S2 7.477 2 13a9.972 9.972 0 0 0 2.922 7.065a1 1 0 0 0 1.416-1.413A7.972 7.972 0 0 1 4 13Zm13.69-1.906a6 6 0 1 0-9.934 6.149a1 1 0 1 0 1.416-1.415a4 4 0 1 1 6.737-3.681a3.497 3.497 0 0 1 1.782-1.053ZM10 13a2 2 0 1 1 4 0a2 2 0 0 1-4 0Zm11 1.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm2 5.375C23 21.431 21.714 23 18.5 23S14 21.437 14 19.875v-.103c0-.98.794-1.772 1.773-1.772h5.454c.98 0 1.773.793 1.773 1.772v.103Z"/></svg>
                            <div class="absolute opacity-0 hover:opacity-100 duration-300 inset-0 z-10 flex justify-center mt-6 text-xs hover:text-navy hover:-translate-y-12 text-white font-semibold">4.5/5</div>
                        </div>
                        <h1 class="text-center font-semibold text-navy">Communication</h1>
                    </div>
                </div>
                <div class="flex flex-row justify-center p-14">
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24"><g fill="none"><g fill="#232946" clip-path="url(#akarIconsHtmlFill0)"><path d="M5.08 0h1.082v1.069h.99V0h1.082v3.236H7.152V2.153h-.99v1.083H5.081V0Zm4.576 1.073h-.952V0h2.987v1.073h-.953v2.163H9.656V1.073ZM12.165 0h1.128l.694 1.137L14.68 0h1.128v3.236h-1.077V1.632l-.744 1.151h-.019l-.745-1.15v1.603h-1.058V0Zm4.181 0h1.083v2.167h1.52v1.07h-2.603V0Z"/><path fill-rule="evenodd" d="M5.046 22.072L3 4.717h18L18.953 22.07L11.99 24l-6.944-1.928Zm4.137-9.5l-.194-2.18h8.145l.19-2.128H6.664l.574 6.437h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.332l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571H9.183Z" clip-rule="evenodd"/></g><defs><clipPath id="akarIconsHtmlFill0"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g></svg>
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24"><path fill="#232946" d="M7.502 0h2.578v1.078h-1.5v1.078h1.5v1.078H7.502V0Zm3.093 0h2.579v.938h-1.5v.187h1.5v2.156h-2.579v-.984h1.5v-.188h-1.5V0Zm3.095 0h2.577v.938h-1.5v.187h1.5v2.156H13.69v-.984h1.5v-.188h-1.5V0Z"/><path fill="#232946" fill-rule="evenodd" d="m11.991 24l-6.944-1.928L3 4.717h18L18.954 22.07L11.991 24ZM7.047 12.573l.191 2.128h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.333l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571l.384-4.309H6.664l.194 2.129h8.136l-.194 2.18H7.047Z" clip-rule="evenodd"/></svg>
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 256 256"><path fill="#232946" d="M48 120h160a8 8 0 0 0 8-8V88a8 8 0 0 0-2.34-5.66l-56-56A8 8 0 0 0 152 24H56a16 16 0 0 0-16 16v72a8 8 0 0 0 8 8Zm104-76l44 44h-44Zm76 164a8 8 0 0 1-8 8h-28a8 8 0 0 1-8-8v-56a8 8 0 0 1 16 0v48h20a8 8 0 0 1 8 8ZM91.82 196.31a20.82 20.82 0 0 1-9.19 15.23C77.44 215 71 216 65.14 216A60.72 60.72 0 0 1 50 214a8 8 0 0 1 4.3-15.41c4.38 1.2 14.95 2.7 19.55-.36c.89-.59 1.83-1.52 2.14-3.93c.35-2.67-.71-4.1-12.78-7.59c-9.35-2.7-25-7.23-23-23.11a20.55 20.55 0 0 1 9-14.95c11.84-8 30.72-3.31 32.83-2.76a8 8 0 0 1-4.08 15.48c-4.49-1.17-15.22-2.56-19.82.56a4.54 4.54 0 0 0-2 3.67c-.12.9-.14 1.08 1.12 1.9c2.31 1.49 6.44 2.68 10.45 3.84c9.79 2.83 26.35 7.66 24.11 24.97Zm71 3.23A39.05 39.05 0 0 0 168 180c0-19.85-14.35-36-32-36s-32 16.15-32 36s14.35 36 32 36a29.18 29.18 0 0 0 15.9-4.78l2.44 2.44a8 8 0 0 0 11.31-11.32ZM136 200c-8.82 0-16-9-16-20s7.18-20 16-20s16 9 16 20a24.41 24.41 0 0 1-1.18 7.51l-1.17-1.17a8 8 0 1 0-11.31 11.32l1.68 1.67a12.93 12.93 0 0 1-4.02.67Z"/></svg>
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24"><g fill="none" stroke="#232946" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m20 4l-2 14.5l-6 2l-6-2L4 4z"/><path d="M7.5 8h3v8l-2-1m8-7H14a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1.423a.5.5 0 0 1 .495.57L15.5 15.5l-2 .5"/></g></svg>
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 15 15"><path fill="#232946" fill-rule="evenodd" d="M7.5.421L14 4.213v6.574L7.5 14.58L1 10.787V4.213L7.5.42ZM7.5 4a3.5 3.5 0 1 0 0 7h.182c.976 0 1.913-.388 2.604-1.078l.068-.068l-.708-.708l-.068.068A2.682 2.682 0 0 1 7.682 10H7.5a2.5 2.5 0 0 1 0-5h.182c.711 0 1.393.283 1.896.786l.068.068l.708-.708l-.068-.068A3.682 3.682 0 0 0 7.682 4H7.5Z" clip-rule="evenodd"/></svg>
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 32 32"><path fill="#232946" d="M23.488 9.14v2.966a4.284 4.284 0 0 1-4.173 4.236h-6.672a3.408 3.408 0 0 0-3.34 3.394v6.36c0 1.81 1.574 2.876 3.34 3.395a11.176 11.176 0 0 0 6.672 0c1.682-.487 3.34-1.467 3.34-3.394V23.55h-6.672v-.849h10.012c1.941 0 2.665-1.354 3.34-3.386a11.464 11.464 0 0 0 0-6.79c-.48-1.932-1.396-3.386-3.34-3.386Zm-3.752 16.108a1.273 1.273 0 1 1-1.254 1.269a1.26 1.26 0 0 1 1.254-1.27Z"/><path fill="none" d="M19.736 25.248a1.273 1.273 0 1 1-1.254 1.269a1.26 1.26 0 0 1 1.254-1.27Z"/><path fill="#232946" d="M15.835 2a19.072 19.072 0 0 0-3.192.273c-2.827.499-3.34 1.544-3.34 3.472V8.29h6.68v.849H6.796a4.17 4.17 0 0 0-4.173 3.387a12.486 12.486 0 0 0 0 6.789c.475 1.977 1.609 3.386 3.55 3.386H8.47V19.65a4.245 4.245 0 0 1 4.173-4.15h6.672a3.365 3.365 0 0 0 3.34-3.394V5.745a3.729 3.729 0 0 0-3.34-3.472A20.838 20.838 0 0 0 15.835 2Zm-3.612 2.048a1.273 1.273 0 1 1-1.254 1.277a1.268 1.268 0 0 1 1.254-1.277Z"/><path fill="none" d="M12.223 4.048a1.273 1.273 0 1 1-1.254 1.277a1.268 1.268 0 0 1 1.254-1.277Z"/></svg>
                    <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24"><path fill="#232946" d="M12 4.29c-5.5 0-10 3-10 6.71c0 3.28 3.56 6 8.24 6.58v2.13h3.41v-2.12c.85-.09 1.64-.25 2.39-.48l1.38 2.6h3.86l-2.32-3.91C20.83 14.58 22 12.87 22 11c0-3.71-4.5-6.71-10-6.71m1.53 2.62c4.2 0 7.3 1.4 7.3 4.59c0 1.71-.92 2.91-2.42 3.65c-.09-.05-.17-.1-.22-.15c-.36-.16-.96-.34-.96-.34s2.98-.22 2.98-3.19c0-2.97-3.12-3.02-3.12-3.02h-6.85v7.16c-2.55-.74-4.31-2.31-4.31-4.11c0-2.54 3.4-4.59 7.6-4.59m.15 3.98h2.07s.95-.05.95.94c0 .97-.95.97-.95.97h-2.07v-1.91m-.03 4.41h.92c.18 0 .27.05.43.2c.13.1.27.29.39.46c-.55.07-1.13.1-1.74.1v-.76Z"/></svg>
                </div>
            </div>


            {{-- experiences --}}
            <div id="experiences" class=" h-screen bg-gradient-to-b from-lavenderGray to-white justify-center pt-20">
                <h1 class="font-extrabold text-5xl text-navy text-center p-16">Collab Project</h1>
                <div class="flex flex-row justify-center mb-8 mt-8">
                    @foreach ($collabCard as $card)
                        @if ($card['description'] == 'Artificial Intelligence')
                            <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                                <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light border-[5px] border-yellow-200" style="background-image: url({{$card['image']}})" ></div>
                                <div class="mt-4 text-white hover:text-peach">
                                    <h1 class="font-thin text-xs">Application</h1>
                                    <h1 class="font-semibold">{{$card['application']}}</h1>
                                    <h1 class="font-thin text-xs mt-3">Description</h1>
                                    <h1 class="font-semibold">{{$card['description']}}</h1>
                                </div>
                            </div>
                        @elseif ($card['description'] == 'Machine Learning')
                            <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                                <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light border-[5px] border-red-700" style="background-image: url({{$card['image']}})" ></div>
                                <div class="mt-4 text-white hover:text-peach">
                                    <h1 class="font-thin text-xs">Application</h1>
                                    <h1 class="font-semibold">{{$card['application']}}</h1>
                                    <h1 class="font-thin text-xs mt-3">Description</h1>
                                    <h1 class="font-semibold">{{$card['description']}}</h1>
                                </div>
                            </div>
                        @else
                            <div class="flex-col bg-navy rounded-xl w-auto h-auto pr-5 pl-5 pb-4 pt-4 mr-8 ml-8 flex ">
                                <div class="bg-white w-56 h-36 rounded-lg opacity-1 bg-contain mix-blend-hard-light border-[5px] border-green-600" style="background-image: url({{$card['image']}})" ></div>
                                <div class="mt-4 text-white hover:text-peach">
                                    <h1 class="font-thin text-xs">Application</h1>
                                    <h1 class="font-semibold">{{$card['application']}}</h1>
                                    <h1 class="font-thin text-xs mt-3">Description</h1>
                                    <h1 class="font-semibold">{{$card['description']}}</h1>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- education --}}
            {{-- <div id="education" class="h-fit bg-gradient-to-b from-white to-navy"> --}}
            <div id="education" class="h-fit bg-white pt-20 ">
                {{-- Academic history --}}
                <div class="flex flex-row p-12">
                    <div class="w-5/6 flex flex-row">
                        <div>
                            <div class="mt-28 flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g>
                                </svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-3xl -ml-[7.2vw] mt-5 ">2008</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-12 ">TK</h1>
                                    <h1 class="text-navy text-l -mt-2">Kuntum Mekar, Bukittingi</h1>
                                </div>
                            </div>
                        </div>
                        <div class=" flex-col -ml-16">
                            <div class="flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g>
                                </svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-4xl -ml-[9.7vw] mt-3">2009</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-10">SD</h1>
                                    <h1 class="text-navy text-l -mt-2">Fransiskus, Bukittingi</h1>
                                </div>

                            </div>
                            <div class="-mt-12 ml-32 flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g></svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-4xl -ml-[9.6vw] ">2015</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-11">SMP</h1>
                                    <h1 class="text-navy text-l -mt-2">Fatima 2, Sibolga</h1>
                                </div>
                            </div>
                            <div class="-mt-12 flex flex-row ml-64" >
                                <svg fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g></svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-4xl -ml-[8.3vw] mt-4">2018</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-12">SMA</h1>
                                    <h1 class="text-navy text-l -mt-2">SMAN 3, Sibolga</h1>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mt-28 -ml-18 flex flex-row">
                                <svg class="" fill="#b8c1ec" height="173px" width="173px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.013 483.013" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M477.043,219.205L378.575,48.677c-7.974-13.802-22.683-22.292-38.607-22.292H143.041c-15.923,0-30.628,8.49-38.608,22.292 L5.971,219.205c-7.961,13.801-7.961,30.785,0,44.588l98.462,170.543c7.98,13.802,22.685,22.293,38.608,22.293h196.926 c15.925,0,30.634-8.491,38.607-22.293l98.469-170.543C485.003,249.99,485.003,233.006,477.043,219.205z"></path> </g>
                                </svg>
                                <div class="flex-col ml-1 my-auto">
                                    <h1 class="text-navy font-bold text-3xl -ml-[7.2vw] mt-6">2021</h1>
                                    <h1 class="text-lavenderGray font-bold text-2xl -mt-12">College</h1>
                                    <h1 class="text-navy text-l -mt-2">Binus University X PPTI BCA</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="font-extrabold text-5xl text-navy text-center ml-8 m-auto">Academic History</h1>
                </div>
                {{-- Achievement --}}
                <div class="flex-row h-fit flex justify-center mr-20 ml-4">
                    <h1 class="font-extrabold text-5xl text-navy text-center p-16 m-auto">Achievement</h1>
                    <div class="flex flex-row h-fit">
                        <div class="mt-24 w-24 mr-2 ml-2 items-center">
                            <h1 class="text-center text-navy font-semibold text-sm">Semifinalist of Provincial Level Mathematics Competition</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sumatera Barat</h1>
                            <div class="bg-[#E18A8A] rounded-full p-8 text-center font-semibold text-navy">2014</div>
                            <svg class="-mb-0 h-fit m-auto" width="10" height="300" viewBox="0 0 10 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="300" fill="#E18A8A"/>
                            </svg>
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">1st Place in City Level Environmental Knowledge Competition</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#968AE1] rounded-full p-8 text-center font-semibold text-navy">2016</div>
                            <svg class=" h-fit m-auto" width="10" height="320" viewBox="0 0 10 320" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="320" fill="#968AE1"/>
                                </svg>

                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 2 Indonesian Language Debate at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#968AE1] rounded-full p-8 text-center font-semibold text-navy">2016</div>
                            <svg class=" h-fit m-auto" width="10" height="320" viewBox="0 0 10 320" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="320" fill="#968AE1"/>
                            </svg>
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 3 Bible Savvy at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#21D4D4] rounded-full p-8 text-center font-semibold text-navy">2017</div>
                            <svg class=" h-fit m-auto" width="10" height="360" viewBox="0 0 10 360" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="360" fill="#21D4D4"/>
                            </svg>

                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 4 Math Olympiad at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#59B15D] rounded-full p-8 text-center font-semibold text-navy">2018</div>
                            <svg class=" h-fit m-auto" width="10" height="360" viewBox="0 0 10 360" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="360" fill="#59B15D"/>
                                </svg>


                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 5 Computer Olympiad at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#D3CB1E] rounded-full p-8 text-center font-semibold text-navy">2020</div>
                            <svg class=" h-fit m-auto" width="10" height="340" viewBox="0 0 10 340" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="340" fill="#B1AD59"/>
                            </svg>
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Rank 4 3x3 Basketball Tournament at City Level</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Sibolga</h1>
                            <div class="bg-[#D3CB1E] rounded-full p-8 text-center font-semibold text-navy">2020</div>
                            <svg class=" h-fit m-auto" width="10" height="340" viewBox="0 0 10 340" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="340" fill="#B1AD59"/>
                            </svg>
                        </div>
                        <div class=" mt-24 w-24 mr-2 ml-2 items-center ">
                            <h1 class="text-center text-navy font-semibold text-sm">Top 12 Ideas YNFEST PPA/PPTI</h1>
                            <h1 class="text-center text-navy font-normal mb-2 text-sm">Bogor</h1>
                            <div class="bg-[#D441AB] rounded-full p-8 text-center font-semibold text-navy">2023</div>
                            <svg class=" h-fit m-auto" width="10" height="360" viewBox="0 0 10 360" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="10" height="360" fill="#D441AB"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="h-1 bg-[#B8B8B8]"></div> --}}

            {{-- reach --}}
            <div id="reach" class="h-fit bg-navy flex flex-row pt-1 pb-1" >
                {{-- <div class="flex flex-row m-8 p-1 w-1/6 h-fit my-auto -bottom-0 bg-peach" style="background-image: url('senyum.jpg')" ></div> --}}
                <div class="flex flex-row m-8 p-1 w-1/6 h-fit my-auto -bottom-0 bg-peach">
                    <img class=" w-28 h-28 rounded-l" src="{{('assets/senyum.jpg')}}">
                    <img class=" w-28 h-28 rounded-l" src="{{('assets/senyum.jpg')}}">
                </div>
                <div class="flex flex-col w-5/6">
                    <div class="flex flex-row">
                        <div>
                            <table class="text-peach text-left">
                                <tr>
                                    <th class="font-normal">Let's</th>
                                    <th class="text-xl pl-2"> discuss on something cool together!</th>
                                </tr>
                                <tr>
                                <td >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#eebbc3" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-.4 4.25l-7.07 4.42c-.32.2-.74.2-1.06 0L4.4 8.25a.85.85 0 1 1 .9-1.44L12 11l6.7-4.19a.85.85 0 1 1 .9 1.44z"/>
                                    </svg>
                                </td>
                                <td>
                                    <a class="font-thin" href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJNsMGsHxDttDKgqkXczrpvNJjbVkfMWrwjXVSLLpRGTvwWDkpvXPvKdtfSsXHCKJZzrPmg">nadya.purba@binus.ac.id</a>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="#eebbc3" fill-rule="evenodd" d="M16 2a14 14 0 0 0-4.43 27.28c.7.13 1-.3 1-.67v-2.38c-3.89.84-4.71-1.88-4.71-1.88a3.71 3.71 0 0 0-1.62-2.05c-1.27-.86.1-.85.1-.85a2.94 2.94 0 0 1 2.14 1.45a3 3 0 0 0 4.08 1.16a2.93 2.93 0 0 1 .88-1.87c-3.1-.36-6.37-1.56-6.37-6.92a5.4 5.4 0 0 1 1.44-3.76a5 5 0 0 1 .14-3.7s1.17-.38 3.85 1.43a13.3 13.3 0 0 1 7 0c2.67-1.81 3.84-1.43 3.84-1.43a5 5 0 0 1 .14 3.7a5.4 5.4 0 0 1 1.44 3.76c0 5.38-3.27 6.56-6.39 6.91a3.33 3.33 0 0 1 .95 2.59v3.84c0 .46.25.81 1 .67A14 14 0 0 0 16 2Z"/></svg>
                                </td>
                                <td>
                                    <a class="font-thin" href="https://github.com/nadyaclrp">
                                        nadyaclrp
                                    </a>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#eebbc3" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                                 </td>
                                <td>
                                    <a class="font-thin" href="https://github.com/nadyaclrp">
                                    +628123456789
                                    </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="pl-14">
                            <table class="text-peach text-left">
                                <tr>
                                    <th class="text-xl">See More</th>
                                </tr>
                                <tr>
                                <td>
                                        <a class="font-light underline" href="#skills">Skills</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-light underline" href="#experiences">Project</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-light underline" href="#education">History</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mx-auto my-auto">
                            <table class="text-peach text-left">
                                <tr>
                                    <th class="text-xl">Binus University X PPTI BCA</th>
                                </tr>
                                <tr>
                                <td>
                                        <h1 class="font-light">Web Programming</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="font-light" >Sentul, 2023</h1>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="flex top-0 pr-2 mt-2">
                        <hr class="w-full h-0.5 mx-auto bg-lavenderGray border-0 rounded ">
                    </div>
                    <div class="flex flex-row justify-between mr-[19.3vw]">
                        <h1 class="text-lavenderGray font-thin my-auto"> All Rights Reserved</h1>
                        <div class="flex flex-row p-1 my-auto">
                            <a class="ml-6" href="https://www.instagram.com/nadyaclrp/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="#b8c1ec" d="M13 10a3 3 0 1 1-6 0c0-.171.018-.338.049-.5H6v3.997c0 .278.225.503.503.503h6.995a.503.503 0 0 0 .502-.503V9.5h-1.049c.031.162.049.329.049.5zm-3 2a2 2 0 1 0-.001-4.001A2 2 0 0 0 10 12zm2.4-4.1h1.199a.301.301 0 0 0 .301-.3V6.401a.301.301 0 0 0-.301-.301H12.4a.301.301 0 0 0-.301.301V7.6c.001.165.136.3.301.3zM10 .4A9.6 9.6 0 0 0 .4 10a9.6 9.6 0 0 0 9.6 9.6a9.6 9.6 0 0 0 9.6-9.6A9.6 9.6 0 0 0 10 .4zm5 13.489C15 14.5 14.5 15 13.889 15H6.111C5.5 15 5 14.5 5 13.889V6.111C5 5.5 5.5 5 6.111 5h7.778C14.5 5 15 5.5 15 6.111v7.778z"/></svg>
                            </a>
                            <a class="ml-6" href="https://m.facebook.com/p/100013156721192/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="#b8c1ec" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z"/></svg>
                            </a>
                            <a class="ml-6" href="https://twitter.com/clarine_nadya?t=PEb3CRf_8eeRcLzIRChUfw&s=09">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024"><path fill="#b8c1ec" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm215.3 337.7c.3 4.7.3 9.6.3 14.4c0 146.8-111.8 315.9-316.1 315.9c-63 0-121.4-18.3-170.6-49.8c9 1 17.6 1.4 26.8 1.4c52 0 99.8-17.6 137.9-47.4c-48.8-1-89.8-33-103.8-77c17.1 2.5 32.5 2.5 50.1-2a111 111 0 0 1-88.9-109v-1.4c14.7 8.3 32 13.4 50.1 14.1a111.13 111.13 0 0 1-49.5-92.4c0-20.7 5.4-39.6 15.1-56a315.28 315.28 0 0 0 229 116.1C492 353.1 548.4 292 616.2 292c32 0 60.8 13.4 81.1 35c25.1-4.7 49.1-14.1 70.5-26.7c-8.3 25.7-25.7 47.4-48.8 61.1c22.4-2.4 44-8.6 64-17.3c-15.1 22.2-34 41.9-55.7 57.6z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
