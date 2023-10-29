@props(['lien1','lien2'])


<nav class="py-4">
    <ul class="flex items-center space-x-2 text-sm text-gray-600">
        <li>
            <a href="/" class="hover:text-gray-700">Accueil</a>
        </li>
        <li>
            <span class="mx-2">/</span>
        </li>

        @if(isset($lien1))
        <li class=" {{isset($lien2) ? '':'font-semibold'}} text-gray-800">
           {{$lien1}}
        </li>
        @endif

        @if(isset($lien1) && isset($lien2))
        <li>
            <span class="mx-2">/</span>
        </li>


        <li class="font-semibold text-gray-800">
            {{$lien2}}
        </li>


        @endif
    </ul>
</nav>
