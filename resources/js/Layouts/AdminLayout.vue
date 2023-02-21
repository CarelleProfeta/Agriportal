<style>
/* Desktop layout */
@media screen and (min-width: 992px) {
  #content {
    margin-left:220px; 
  }
}

/* Tablet and mobile layout */
/* @media screen and (max-width: 992px) {

    #container {
        justify-content: space-between;
    }
} */


</style>

<template>

<!-- left -->

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:220px; background-color: #336633; padding-top: 80px;" id="mySidebar_left">
  <button class="w3-bar-item w3-button w3-large w3-hide-large text-white"  @click="close_left"> &times;</button>
  <Link :href="route('pages.user_acc')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
      <span class="ml-3 text-white">ACCOUNTS</span>
   </Link>
   <Link :href="route('pages.docs')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
      <span class="ml-3 text-white">DOCUMENTS</span>
   </Link>
   <Link :href="route('pages.webinars')" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white;">
      <span class="ml-3 text-white">WEBINAR SCHEDULER</span>
   </Link>   
    <Link href="/logout" method="post" class="w3-bar-item w3-button" style="border-top-style: solid; border-color: white; border-bottom-style: solid;">
        <span class="ml-3 text-white">LOGOUT</span>
    </Link>
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
            <p> </p>
        </div>
    </div>
  </div>


<div class="w3-container" id="content" style="padding-top:90px;">
   <slot/>
  <!-- <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p> -->
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