<x-app-layout>
    {{--    div.max-w-2xl.mx-auto.p-4.sm:p-6.lg:p-8--}}
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('chirps.store') }}"
              method="POST">
            @csrf
            <label for="message"
                   class="text-black w-100 m-1">
                I want to chirp about...
            </label>
            <textarea
                name="message" id="message"
                placeholder="{{ __('what\'s on your mind') }}"
                class="block w-full border-gray-300 text-gray-800
                       focus:border-indigo-300 focus:ring focus:ring-indigo-200
                       focus:ring-opacity-50 shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')"
                           class="mt-2"/>
            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
