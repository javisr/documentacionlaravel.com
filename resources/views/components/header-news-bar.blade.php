<?php
    $news = Illuminate\Support\Arr::random([ 
        'ploi', 
        //'hetzner'
        ]);
?>

<div class="hidden lg:flex items-center justify-center bg-gradient-to-b from-red-500 to-red-600 p-2 text-center text-white text-sm">
 
 
    @if ($news === 'ploi')

        <div><svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>

        <div class="mt-px ml-1">
            <a href="https://ploi.io/register?referrer=qJIluqaKauM43f0ELgjj" target="_blank">Despliega tu aplicación Laravel en pocos unos clicks con Ploi</a>.
        </div>
    @endif

</div>
