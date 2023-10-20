<section class="bg-white rounded-sm relative p-2">
     <div class="flex justify-center">
         <img class="rounded w-36 h-36" src="{{ asset('img/person.jpg') }}" alt="Extra large avatar">
     </div>
     <div class="mt-10">
         @include('imports.model.user', ['password_hidden' => true])
     </div>
 </section>
