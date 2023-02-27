@extends('layouts.master')
<style>
    main {
        font-family: 'Inria Sans';
        height: 100vh;
        overflow-x: hidden;
    }
</style>
<main style="background-color: #70AFDD" class="py-5 px-4">
    <div class="mt-5 flex items-center">
        <section style="flex: 1;" class="p-5">
            <div>
                <div class="pl-5 text-5xl font-bold p-3 italic tracking-wider">
                    {{ $mainHeader }}
                </div>
                <div style="font-size:16px;" class="py-3">
                    {{ $mainContent }}
                </div>
            </div>
            <button class="mt-3 btn bg-white border border-black rounded-3xl w-60">
                <div class="p-3 text-xl">
                    {{ $buttonText }}
                </div>
            </button>
        </section>
        <section style="flex:1;" class="flex">
            <div class="m-auto">
                <img src="storage/reancode.png" alt="" width="580px">
            </div>
        </section>
    </div>
</main>
