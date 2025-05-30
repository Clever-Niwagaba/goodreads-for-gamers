<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playerz</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div>
        <x-header>
            {{ $slot }}
        </x-header>

        <x-navbar>
            {{ $slot }}
        </x-navbar>
    </div>

    <main class="flex justify-between items-start p-4">
        <x-homeSecondaryColumn>
            {{ $slot }}
        </x-homeSecondaryColumn>

        <x-homePrimaryColumn>
            {{$slot}}
        </x-homePrimaryColumn>

        <x-homeTertiaryColumn>
            {{ $slot }}
        </x-homeTertiaryColumn>     
    </main>
</body>
</html>