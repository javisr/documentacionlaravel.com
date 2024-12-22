@php
    $is_docs_page = request()->is('docs/*');
@endphp

<footer class="relative pt-12 {{ $is_docs_page ? 'dark:bg-dark-700' : '' }}">
    <div class="max-w-screen-2xl mx-auto w-full {{ $is_docs_page ? 'px-8' : 'px-5' }}">
        <div class="mt-10 border-t pt-6 pb-16 border-gray-200 {{ $is_docs_page ? 'dark:border-dark-500' : '' }}">
            <p class="text-xs text-gray-700 {{ $is_docs_page ? 'dark:text-gray-400' : '' }}">
                documentacionlaravel.com <span class="font-bold">no</span> es un sitio oficial de Laravel y actualmente es mantenido por <a href="https://twitter.com/javisr">@javisr</a>
            </p>
            <p class="mt-6 text-xs text-gray-700 {{ $is_docs_page ? 'dark:text-gray-400' : '' }}">
                <a href="https://laravel.com">Laravel</a> es una marca registrada de Taylor Otwell. Copyright &copy; 2011-{{ now()->format('Y') }} Laravel LLC.
            </p>
        </div>
    </div>
</footer>
