<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Castware CRM</title>
    @vite('resources/css/app.css')
</head>

<div>
    <div id="body" class="flex flex-col">
        <div id="header">
            <div class="bg-blue-950 w-full h-14 mb-4"></div>
        </div>
        <div id="body" class="flex flex-row border border-accent rounded-md p-1">
            {{-- Sidebar --}}
            <div id="sidebar" class="basis-1/6 px-2">
                <x-sidebar></x-sidebar>
            </div>
            <div id="tabs" class="basis-5/6">
                <x-main-dashboard></x-main-dashboard>
            </div>
        </div>
    </div>


</div>

