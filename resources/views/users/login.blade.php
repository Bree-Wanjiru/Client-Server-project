<x-layout>
    <section class=" min-h-screen flex items-center justify-center">
        
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 ">
            <div>
            <a href="/" class=""><i class="fa-solid fa-arrow-left"></i> Back</a>
            </div>
          <!-- form -->
          <div class="px-8 md:px-16">
             
            <h2 class="font-bold text-2xl text-black">Login</h2>
            <p class="text-xs mt-2 text-black">If you are already a member, easily log in</p>
      
            <form method="POST" action="/users/authenticate" class="flex flex-col gap-4">

                @csrf
        <div class="p-1 mt-2 rounded-xl ">
            <label for="name" class="inline-block text-lg mb-2">
                UserName
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                value="{{old('name')}}"
            />

            @error('name')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div> 



        <div class="p-1 rounded-xl w-full">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{old('email')}}"
            />
            <!-- Error -->
            @error('email')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="p-1 rounded-xl w-full">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
                value="{{old('password')}}"
            />

            <!-- Error -->
            @error('password')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        

        <div class="p-1 rounded-xl w-full">
            <button
                type="submit"
                class="bg-red-400 text-white rounded py-2 px-4 hover:bg-[#ff5757]"
            >
                Log in
            </button>
        </div>

        <div class=" grid grid-cols-3 items-center text-gray-400">
            <hr class="border-gray-400">
            <p class="text-center text-sm">OR</p>
            <hr class="border-gray-400">
          </div>

        <div class="mt-3 text-sm flex justify-between items-center text-black">
            <p>
                Don't have an account?
                <a href="/register" class=" font-bold text-red-400"
                    >Sign Up</a
                >
            </p>
        </div>
            </form>

      </section>
    </x-layout>