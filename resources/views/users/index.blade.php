<x-layout>

<h1 class="relative z-10 text-2xl font-bold md:text-3xl font-display text-center mt-4 mb-8">Users List</h1>
<ul class="divide-y divide-gray-300 md:px-24 px-12">
    <li class="py-2">
            <div class="flex items-center justify-between">
                <div class="text-lg font-bold">Username</div>
                <div class="font-bold">Email Address</div>
                <div class="font-bold">Phone Number</div>
            </div>
        </li>
        @foreach ($users as $user)
            <li class="py-2 flex items-center justify-between">
                <p class="text-lg text-gray-600 ">{{ $user->name }}</p>
                <p class="text-gray-600">{{ $user->email }}</p>
                <p class="text-gray-600">{{ $user->phonenumber }}</p>
            </li>
        @endforeach

        <form class="" method="get" action="/send-sms">
            @csrf
            <input type="text" name="group_message" placeholder="Type your message here"/>
            <button type="submit" class="block bg-red-400 space-y-6 text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-message"></i> Send Group Message
            </button>
        </form>
</ul>


</x-layout>