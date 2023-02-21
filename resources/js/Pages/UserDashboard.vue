<script setup>
import UserLayout from '@/Layouts/UserLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<style>
.three-column {
  display:flex;
}

.three-column div {
  flex:1;
  border:1px solid;
}

@media only screen and (max-width: 600px) {
  .three-column {
    flex-direction:column;
  }
}

.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
#circle {
    background: lightblue;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 45%;
    
}
</style>

<template>
    <Head title="Agriportal" />

<!-- main buttons -->       
    <UserLayout>
        <p class="text-4xl text-black ml-10">WELCOME,  {{ $page.props.auth.user.name }}</p>
        <p class="ml-10">{{ currentDate() }} | {{ currentTime() }}</p>


        <div class="grid grid-cols-3 content-center" style="margin-top: 2%; ">
                <div class="container h-120 w-161 ml-15 text-center mx-auto">

                    <div class=" justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/Email">
                            <img src="./public/mail.svg" width="65" height="120" class="mx-auto pt-5 pb-5">
                        </a>        
                    </div>
                    <a href="/Email" class="text-black font-bold text-lg" >EMAIL</a>
                </div>

                <div class="container h-160 w-161 ml-15 text-center mx-auto">
                    <div class=" justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/DigitalLibrary">
                            <img src="./public/book.svg"  width="85" height="120" class="mx-auto pt-5 pb-5">
                        </a>        
                    </div>
                    <a href="/DigitalLibrary" class="text-black font-bold text-lg" >DIGITAL LIBRARY</a>
                </div>

                <div class="container h-160 w-161 ml-15 text-center mx-auto">
                    <div class="justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/Projects">
                            <img src="./public/project.svg"  width="60" height="120" class="mx-auto pt-6 pb-6">
                        </a>        
                    </div>
                    <a href="/Projects" class="text-black font-bold text-lg" >PROJECTS</a>
                </div>

                <div class="container h-160 w-161 ml-15 text-center pt-5 mx-auto">
                    <div class="justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/Webinars">
                            <img src="./public/calendar-edit.svg"  width="65" height="120" class="mx-auto pt-7 pb-7">
                        </a>        
                    </div>
                    <a href="/Webinars" class="text-black font-bold text-lg" >WEBINAR SCHEDULE</a>
                </div>

                <div class="container h-160 w-161 ml-15 text-center pt-5 mx-auto">
                    <div class="justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/Newsletters">
                            <img src="./public/newsletter.svg"  width="65" height="120" class="mx-auto pt-5 pb-5">
                        </a>        
                    </div>
                    <a href="/Newsletters" class="text-black font-bold text-lg" >NEWSLETTER</a>
                </div>

                 <div class="container h-160 w-161 ml-15 text-center pt-5 mx-auto">
                    <div class=" justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/Members">
                            <img src="./public/members.svg"   width="55" height="120" class="mx-auto pt-7 pb-7">
                        </a>        
                    </div>
                    <a href="/Members" class="text-black font-bold text-lg">MEMBERS</a>
                </div>

                  <div class="container h-160 w-161 ml-15 text-center pt-5 mx-auto">
                    <div class="justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/NULL">
                            <img src="./public/news.svg"  width="60" height="100" class="mx-auto pt-7 pb-7">
                        </a>        
                    </div>
                    <a href="/NULL" class="text-black font-bold text-md">NEWS</a>
                </div>

                  <div class="container h-160 w-161 ml-15 text-center pt-5 mx-auto">
                    <div class="justify-center bg-green-800 w-2/6 h-11px rounded-full mx-auto">
                        <a href="/NULL">
                            <img src="./public/copywriting.svg"  width="55" height="120" class="mx-auto pt-7 pb-7">
                        </a>        
                    </div>
                    <a href="/NULL" class="text-black font-bold text-md">FEATURES/ARTICLES</a>
                </div>
</div>
    </UserLayout>

   


</template>

<script>
    export default {
        components: {
            UserLayout
        },
        methods: {
            currentDate() {
            const current = new Date();
            var date =``;
            if(current.getMonth()+1 <= 9){
                date = `0${current.getMonth()+1}/${current.getDate()}/${current.getFullYear()}`;
            } else {
                date = `${current.getMonth()+1}/${current.getDate()}/${current.getFullYear()}`;
            }
            return date;
            },
            currentTime() {
                var dt = new Date();
                var hours = dt.getHours() ; // gives the value in 24 hours format
                var AmOrPm = hours >= 12 ? 'pm' : 'am';
                hours = (hours % 12) || 12;
                var minutes = dt.getMinutes() ;
                if (hours <= 9) {
                    hours = "0"+ hours;
                }

                if(minutes <= 9) {
                    minutes = "0"+ minutes;
                }
                var finalTime = hours + ":" + minutes + " " + AmOrPm; 
                return finalTime;
            }
        }
    }
    
</script>