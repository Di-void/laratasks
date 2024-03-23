@props(['status', 'id', 'name', 'taskId'])

<div class="bg-clr-primary-100 flex flex-col rounded-lg p-6 w-[253px]">
    <div class="flex justify-between items-center">
        <h1 class="text-clr-text-200 text-sm font-semibold">T-{{ $id < 10 ? '0' . $id : $id }}</h1>

                <x-status-badge :status='$status' />
    </div>

    <h2 class="mt-4 text-base font-medium mb-7 font-gelion-medium">{{ $name }}</h2>

    {{-- GPT says margin-top: auto pushes it to the bottom in a flexbox setting --}}
    <footer class="mt-auto">
        <a href="{{ url("/tasks/{$taskId}") }}" class="capitalize cursor-pointer text-clr-primary-200 text-sm font-semibold font-gelion-semibold flex gap-4
            items-center"><span>view
                task</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path
                    d="M12.6426 14.4208L12.6409 14.0077C12.6409 12.2908 12.7414 10.7255 12.8929 9.70516L13.0255 9.07064C13.0994 8.73458 13.1964 8.35194 13.2976 8.1566C13.6679 7.44208 14.3921 7 15.1672 7H15.2347C15.7399 7.01671 16.8014 7.46007 16.8014 7.47549C18.5093 8.19214 21.8045 10.355 23.3263 11.897L23.7686 12.3599C23.8844 12.4854 24.0145 12.6338 24.0953 12.7496C24.3651 13.1068 24.5 13.5489 24.5 13.991C24.5 14.4845 24.3485 14.9433 24.0622 15.3185L23.6078 15.8089L23.506 15.9135C22.1251 17.4107 18.5195 19.8588 16.6334 20.608L16.3486 20.7172C16.0059 20.84 15.5258 20.9865 15.2347 21C14.8643 21 14.5105 20.9139 14.1732 20.7443C13.7519 20.5065 13.416 20.1313 13.2301 19.6892C13.1118 19.3833 12.926 18.4645 12.926 18.4478C12.7556 17.5213 12.6568 16.0594 12.6426 14.4208ZM3.5 13.9995C3.5 13.0215 4.28526 12.2286 5.2538 12.2286L9.56956 12.6103C10.3294 12.6103 10.9454 13.2323 10.9454 13.9995C10.9454 14.768 10.3294 15.3887 9.56956 15.3887L5.2538 15.7704C4.28526 15.7704 3.5 14.9775 3.5 13.9995Z"
                    fill="#6684FF" />
            </svg>
        </a>
    </footer>
</div>