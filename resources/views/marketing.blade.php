@extends('partials.layout')

@section('content')
    <div class="absolute top-0 w-full">
        @include('partials.header')
    </div>

    <div>
        <section class="relative overflow-hidden pt-48 pb-20 lg:pt-48 xl:pt-56 xl:pb-28">
            <div class="relative max-w-screen-xl px-5 mx-auto">
                <div class="relative">
                    <h1 class="max-w-3xl mx-auto text-5xl font-bold text-center md:text-6xl lg:text-7xl">El Framework de PHP <br class="hidden lg:inline"><span class="text-red-500">para Artesanos de la WEB</span></h1>
                    <p class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10">
                        Laravel es un framework para aplicaciones web con una sintaxis expresiva y elegante. El Framework sienta las bases para que puedas liberar tu creatividad sin preocuparte por las tareas tediosas y repetitivas.
                    </p>
                    <div class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <x-button.primary class="w-full sm:w-auto" href="/docs">
                            Comenzar
                        </x-button.primary>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
