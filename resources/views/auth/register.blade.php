<x-guest-layout>
    <div class="flex justify-end">
        <a href="{{ route('login') }}"
            class="capitalize px-14 py-2 border-2 border-clr-primary-200 font-semibold rounded-lg text-clr-primary-200">log
            in</a>
    </div>

    <div class="h-[80%] py-10 px-16">
        <div>
            <h1 class="text-3xl font-gelion-bold font-bold">Create an Account</h1>
            <p class="text-clr-secondary-200">It's Simple and Easy!!</p>
        </div>

        <div>
            <form action="{{ route('register') }}" method="POST" class="mt-5 flex flex-col gap-4">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('fullname')" />
                    <x-text-input type="text" name="name" id="name" placeholder="John Doe" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('email address')" />
                    <x-text-input type="email" name="email" id="email" placeholder="johndoe@email.com" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('password')" />
                    <x-text-input type="password" name="password" id="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div>
                    <x-primary-button class="mt-4">create account</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>