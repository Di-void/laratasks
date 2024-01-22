<x-guest-layout>
    <div class="flex justify-end">
        <a href="{{ route('register') }}"
            class="capitalize px-14 py-2 border-2 border-clr-primary-200 font-semibold rounded-lg text-clr-primary-200">Register</a>
    </div>

    <div class="h-[80%] py-10 px-16">
        <div>
            <h1 class="text-3xl font-gelion-bold font-bold">Welcome Back</h1>
        </div>

        <div>
            <form action="login" method="POST" class="mt-5 flex flex-col gap-4">
                @csrf
                <div>
                    <x-input-label for="email" :value="__('email address')" />
                    <x-text-input type="email" id="email" name="email" placeholder="johndoe@email.com" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('password')" />
                    <x-text-input type="password" name="password" id="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div>
                    <input type="checkbox" name="keep_signed_in" id="signed_in" class="rounded-md w-6 h-6">
                    <label for="signed_in" class="ml-4 font-bold">Keep me Signed in</label>
                </div>


                <div>
                    <x-primary-button class="mt-4">log in</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>