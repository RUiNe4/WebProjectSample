@extends('layouts.master')
@section('webName', 'Home Page')

<x-nav>
    <x-slot:rightSlot1>
        Major
    </x-slot:rightSlot1>
    <x-slot:rightSlot2>
        Contacts
    </x-slot:rightSlot2>
    <x-slot:rightSlot3>
        Home
    </x-slot:rightSlot3>
    <x-slot:rightSlot4>
        About Us
    </x-slot:rightSlot4>
    <x-slot:rightNav>
        Sign Up
    </x-slot:rightNav>
</x-nav>

<x-main>
    <x-slot:mainHeader>
        Rean Code
    </x-slot:mainHeader>
    <x-slot:mainContent>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, cum dignissimos eaque, incidunt iusto
        magni nesciunt numquam odit quasi quod rem repellat, saepe voluptatibus. Aliquam excepturi fuga odio qui quos.
    </x-slot:mainContent>
    <x-slot:buttonText>
        Join Us Now
    </x-slot:buttonText>
</x-main>

