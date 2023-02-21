<template>

    <!-- left -->
    
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px; background-color: #336633; padding-top: 80px;" id="mySidebar_left">
      <button class="w3-bar-item w3-button w3-large w3-hide-large text-white"  @click="close_left"> &times;</button>
      <Link :href="route('pages.user_profile')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
            <span class="ml-3 text-white">PROFILE</span>
        </Link>
        <Link :href="route('pages.email')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;"> 
            <span class="ml-3 text-white">EMAIL</span>
        </Link>
        <Link :href="route('pages.dig_lib')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
            <span class="ml-3 text-white">DIGITAL LIBRARY</span>
        </Link>
        <Link :href="route('pages.projects')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
            <span class="ml-3 text-white">PROJECTS</span>
        </Link>
        <Link :href="route('pages.webinar')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
            <span class="ml-3 text-white">WEBINAR</span>
        </Link>
        <Link :href="route('pages.newsletters')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
            <span class="ml-3 text-white">NEWSLETTER</span>
        </Link>
        <Link :href="route('pages.members')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
            <span class="ml-3 text-white">MEMBERS</span>
        </Link>
        <Link href="/logout" method="post" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white; border-bottom-style: solid;">
            <span class="ml-3 text-white">LOGOUT</span>
        </Link>
    </div>
    



    <!-- right -->
    
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style=" z-index: 10; width:300px; right:0; background-color: #336633; padding-top: 80px;" id="mySidebar_right">
      <button class="w3-bar-item w3-button w3-large w3-hide-large text-white"  @click="close_right"> &times;</button>
      
      <div id="right_main">
        <div class="bb" style="background-color:#D4D4D4; margin: 20px; margin-top: 0px; height: 310px; border-style: solid; border-width: 3px; border-color: black;">
            <div class="header1" style="text-align: center; margin: 10px; font-size: 23px; font-weight: 900;">
                BULLETIN BOARD 
    
    <!-- carousel --> 
    
    <div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-40 overflow-hidden rounded-lg md:h-60">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="/public/book.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/public/sample2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/public/sample1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    
    
            </div>
    
        </div>
    
        <div class="announcement" style="background-color:#D4D4D4; margin: 20px; height: 200px;border-style: solid; border-width: 3px; border-color: black;">
            <div class="header2" style="text-align: center; margin: 5px; font-size: 23px; font-weight: 900;">
                ANNOUNCEMENT
            </div>
            <div class="title2" style="text-align: center; margin: 0px; font-size: 15px; font-weight: 900;">
                TITLE
            </div>
            <div class="content2" style="text-align: center; margin-left: 5px; margin-right: 5px; font-size: 15px; font-weight: 400; overflow: scroll;  height: 120px; line-height: 0.90;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repudiandae vero ducimus voluptatibus, aliquid odio similique neque soluta! Architecto voluptatum aliquid quisquam eos accusamus assumenda necessitatibus harum. Explicabo error facilis eius id quaerat alias voluptates sed, dolorum quam maxime dignissimos esse? Sapiente perspiciatis nisi expedita nostrum quasi sed, totam tenetur!
            </div>
        </div>
      </div>
    </div>
    
    <div class="w3-main" >
  <div class="w-full p-5 bg-gray-100 z-50 fixed top-0" >
    <div class="flex flex-row" id="container">
        <div>
            <button class="w3-button w3-xlarge w3-hide-large z-100" style="background-color: #336633; color: white;" @click="open_left">&#9776;</button>
        </div>
        <div class="item-left h-8">
            <a href="https://agriportal.ph" target="_blank" class="flex ml-2 md:mr-24">
                <img class="mb-15" src="https://agriportal.ph/akin_laman/uploads/2020/03/Agriportal-Logo.png" alt="Agriportal Logo" width="150" height="30">
            </a>
        </div>
        <div>
            <button class="w3-button  w3-xlarge w3-right w3-hide-large" style="background-color: #336633; color: white;" @click="open_right">&#9776;</button>
        </div>
    </div>
  </div>
  <div class="w-full p-2 bg-gray-100 text-center z-50 fixed bottom-0" id="footer" >
    <div class="grid grid-cols-3 gap-48">
        <!--logo-->
        <div class="mt-8 ml-2">
            <img src="http://agriportal.ph/akin_laman/uploads/2020/03/Agriportal-Logo.png" alt="Agriportal Logo" width="200" height="100" class="">
        </div>

        <!--address, phone, copyright, policy-->
        <div class="mt-1 mb-0">
            <p class="font-poppins text-center text-sm">
            Quezon City, Philippines <br>
            +63 9283534281 / +63 993 337 9048<br>
            information@agriportal.ph
            </p>
            <p class="font-poppins text-amber-300 text-center">
            Copyright &copy 2020 AgriPortal <br>
            <a href="https://agriportal.ph/agriportal-privacy-policy/" target="_blank">Privacy Policy and Terms of Use</a>
            </p>
        </div>

        <!--Bible Script and social media-->
        <div class="mt-1 ml-20">
            <p class="font-customFont text-sm text-center"> <!--Bible Script-->
            The Lord will send a blessing on your barns and on <br>
            everything you put your hand to. <br>
            The Lord your God will bless you in the land <br>
            Deuteronomy 28:8
            </p>

            <!--social media-->
            <div class="mb-0">
                <a href="https://www.facebook.com/agriportal.ph/" target="_blank" class="inline-block">
                   <svg class="w-10 h-7" width="140px" height="140px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#336633" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z"></path></g></svg>
                </a>

                <a href="https://www.facebook.com/agriportaladvocatesph" target="_blank" class="inline-block">
                    <svg class="w-10 h-7" width="140px" height="140px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#336633" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z"></path></g></svg>
                </a>

                <a href="https://twitter.com/agriportalph" target="_blank" class="pl-1 inline-block">
                    <svg class="w-6 h-7" fill="#336633" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="140px" height="140px" viewBox="0 0 97.75 97.75" xml:space="preserve" stroke="#336633"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z M78.43,35.841c0.023,0.577,0.035,1.155,0.035,1.736c0,20.878-15.887,42.473-42.473,42.473c-8.127,0-16.04-2.319-22.883-6.708 c-0.143-0.091-0.202-0.268-0.145-0.427c0.057-0.158,0.218-0.256,0.383-0.237c1.148,0.137,2.322,0.205,3.487,0.205 c6.323,0,12.309-1.955,17.372-5.664c-6.069-0.512-11.285-4.619-13.161-10.478c-0.039-0.122-0.011-0.255,0.073-0.351 c0.085-0.096,0.215-0.138,0.339-0.115c1.682,0.319,3.392,0.34,5.04,0.072c-6.259-1.945-10.658-7.808-10.658-14.483l0.002-0.194 c0.003-0.127,0.072-0.243,0.182-0.306c0.109-0.064,0.245-0.065,0.355-0.003c1.632,0.906,3.438,1.488,5.291,1.711 c-3.597-2.867-5.709-7.213-5.709-11.862c0-2.682,0.71-5.318,2.054-7.623c0.06-0.103,0.166-0.169,0.284-0.178 c0.119-0.012,0.234,0.04,0.309,0.132c7.362,9.03,18.191,14.59,29.771,15.305c-0.193-0.972-0.291-1.974-0.291-2.985 c0-8.361,6.802-15.162,15.162-15.162c4.11,0,8.082,1.689,10.929,4.641c3.209-0.654,6.266-1.834,9.09-3.508 c0.129-0.077,0.291-0.065,0.41,0.028c0.116,0.094,0.164,0.25,0.118,0.394c-0.957,2.993-2.823,5.604-5.33,7.489 c2.361-0.411,4.652-1.105,6.831-2.072c0.146-0.067,0.319-0.025,0.424,0.098c0.104,0.124,0.113,0.301,0.023,0.435 C83.759,31.175,81.299,33.744,78.43,35.841z"></path> </g> </g></svg>
                </a>

                <a href="https://www.instagram.com/agriportal.ph/" target="_blank" class="pl-1 pr-1 inline-block">
                    <svg class="w-10 h-7" fill="#336633" height="140px" width="140px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#336633"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8 c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"></path> <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 "></polygon> <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157 c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"></path> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8 c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157 c27.3,0,49.5,22.2,49.5,49.5V374.7z"></path> </g> </g></svg>
                </a>

                <a href="https://www.linkedin.com/in/agri-portal-ph-b14b78238/?original_referer=https%3A%2F%2Fagriportal.ph%2F" target="_blank" class="px-1 py-0 bottom-0 right-0 inline-block">
                    <svg class="w-10 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-182.29 -182.29 820.31 820.31" xml:space="preserve" width="140px" height="140px" fill="#336633" stroke="#336633"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-182.29" y="-182.29" width="820.31" height="820.31" rx="410.155" fill="#336633" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.822924"></g><g id="SVGRepo_iconCarrier"> <g> <rect x="0" y="0" style="fill:#ffffff;" width="455.731" height="455.731"></rect> <g> <path style="fill:#336633;" d="M107.255,69.215c20.873,0.017,38.088,17.257,38.043,38.234c-0.05,21.965-18.278,38.52-38.3,38.043 c-20.308,0.411-38.155-16.551-38.151-38.188C68.847,86.319,86.129,69.199,107.255,69.215z"></path> <path style="fill:#336633;" d="M129.431,386.471H84.71c-5.804,0-10.509-4.705-10.509-10.509V185.18 c0-5.804,4.705-10.509,10.509-10.509h44.721c5.804,0,10.509,4.705,10.509,10.509v190.783 C139.939,381.766,135.235,386.471,129.431,386.471z"></path> <path style="fill:#336633;" d="M386.884,241.682c0-39.996-32.423-72.42-72.42-72.42h-11.47c-21.882,0-41.214,10.918-52.842,27.606 c-1.268,1.819-2.442,3.708-3.52,5.658c-0.373-0.056-0.594-0.085-0.599-0.075v-23.418c0-2.409-1.953-4.363-4.363-4.363h-55.795 c-2.409,0-4.363,1.953-4.363,4.363V382.11c0,2.409,1.952,4.362,4.361,4.363l57.011,0.014c2.41,0.001,4.364-1.953,4.364-4.363 V264.801c0-20.28,16.175-37.119,36.454-37.348c10.352-0.117,19.737,4.031,26.501,10.799c6.675,6.671,10.802,15.895,10.802,26.079 v117.808c0,2.409,1.953,4.362,4.361,4.363l57.152,0.014c2.41,0.001,4.364-1.953,4.364-4.363V241.682z"></path> </g> </g> </g></svg>
                </a>
            </div>
        </div>
    </div>
  </div>
    
    <div class="w3-container" id="content" style="padding-top:90px;">
       <slot/>
        
    
    </div>   
    </div>
    </template>
    
    <script>
    
    import { Link } from '@inertiajs/vue3';
    
    export default {
        components: {
          Link
       },
        methods: {
            open_left() {
                    document.getElementById("mySidebar_left").style.display = "block";
                },
                close_left() {
                    document.getElementById("mySidebar_left").style.display = "none";
                },
                open_right() {
                    document.getElementById("mySidebar_right").style.display = "block";
                },
                close_right() {
                    document.getElementById("mySidebar_right").style.display = "none";
                }
        }
    }
    
    </script>
    
    <style>
    
    /* desktop view */
    @media screen and (min-width: 992px) {
      #content {
        margin-left:200px; 
        margin-right:300px;
      }
    }
    
    /* tablet and mobile view */
    @media screen and (max-width: 992px) {
        #footer {
            display:none;
        }
    
        #container {
            justify-content: space-between;
        }
    }
    
    </style>