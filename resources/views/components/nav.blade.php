@extends('layouts.master')
<style>
    nav {
        font-family: 'Inria Sans';
        display: flex;
        justify-content: space-between;
        font-size: 20px;
    }

    .left-section {
        display: flex;
        column-gap: 20px;
    }
</style>
<nav style="background-color: #3795BD" class="border text-white">
    <div class="left-section">
        <div class="p-4">
            <a href="">
                {{ $rightSlot1 }}
            </a>
        </div>
        <div class="p-4">
            <a href="">
                {{ $rightSlot2 }}
            </a>
        </div>
        <div class="p-4">
            <a href="">
                {{ $rightSlot3 }}
            </a>
        </div>
        <div class="p-4">
            <a href="/about">
                {{ $rightSlot4 }}
            </a>
        </div>
    </div>
    <div style="background-color: #256A9C;" class="right-section p-4">
        {{ $rightNav }}
    </div>
</nav>
