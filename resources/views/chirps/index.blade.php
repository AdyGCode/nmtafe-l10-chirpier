<x-app-layout>
    {{--    div.max-w-2xl.mx-auto.p-4.sm:p-6.lg:p-8--}}
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('chirps.store') }}"
              method="POST">
            @csrf
            <label for="Message"
                   class="text-black w-100 m-1">
                I want to chirp about...
            </label>
            <textarea
                name="message" id="Message"
                placeholder="{{ __('What\'s on your mind') }}"
                class="block w-full border-gray-300 text-gray-800
                       focus:border-indigo-300 focus:ring focus:ring-indigo-200
                       focus:ring-opacity-50 shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')"
                           class="mt-2"/>
            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form>

{{--        div.mt-6.bg-white.shadow-sm.rounded-lg.divide-y --}}
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach($chirps as $chirp)
                <div class="p-6 flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-8 h-8 text-indigo-400 -scale-x-100"
                             width="24" height="24"
                             viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M278.5 215.6L23 471c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l57-57h68c49.7 0 97.9-14.4 139-41c11.1-7.2 5.5-23-7.8-23c-5.1 0-9.2-4.1-9.2-9.2c0-4.1 2.7-7.6 6.5-8.8l81-24.3c2.5-.8 4.8-2.1 6.7-4l22.4-22.4c10.1-10.1 2.9-27.3-11.3-27.3l-32.2 0c-5.1 0-9.2-4.1-9.2-9.2c0-4.1 2.7-7.6 6.5-8.8l112-33.6c4-1.2 7.4-3.9 9.3-7.7C506.4 207.6 512 184.1 512 160c0-41-16.3-80.3-45.3-109.3l-5.5-5.5C432.3 16.3 393 0 352 0s-80.3 16.3-109.3 45.3L139 149C91 197 64 262.1 64 330v55.3L253.6 195.8c6.2-6.2 16.4-6.2 22.6 0c5.4 5.4 6.1 13.6 2.2 19.8z"/></svg>
                    <div class="flex-1">
                        <p>
                            <span class="text-gray-800">
                                {{ $chirp->user->name }}
                            </span>
                            <small class="ml-2 text-sm text-gray-600">
                                {{ $chirp->created_at->format('j M Y, g:i a') }}
                            </small>
                        </p>
                        <p class="mt-4 text-lg text-gray-900">
                            {{ $chirp->message }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
