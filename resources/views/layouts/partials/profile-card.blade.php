<section class="bg-clr-primary-100 rounded-lg h-full w-[14rem]">
    <div class="mt-6">
        <h1 class="capitalize text-center text-xl text-navy font-bold font-gelion-bold">{{
            auth()->user()->name }}
        </h1>
        <p class="text-center text-clr-text-100 text-sm">{{ auth()->user()->email }}</p>
    </div>

    <div class="flex justify-center mt-4">
        <x-primary-link-button path="/profile">
            my profile
        </x-primary-link-button>
    </div>
</section>