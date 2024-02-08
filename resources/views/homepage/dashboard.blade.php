
<x-layout>
  
<div class="mx-4">
    <div class="p-10 "> 
        <div class="flex flex-col items-center justify-center text-center">
            <p class="mb-4">The current read of the week is:</p>
                <img class="w-48 mr-6 mb-6" src="images/book1.webp" alt=""/>
                    <h3 class="text-2xl mb-2">The Book Thief</h3>

                        <div class="border border-gray-200 w-full mb-6"></div>

                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Book Description
                            </h3>
                            <div class="text-lg space-y-6">
                                The Book Thief is a story narrated by a compassionate Death who tells us about Liesel, a girl growing up in Germany during World War II. She steals books, learns to read, and finds comfort in words. She and Max, the Jew her family protects, are the only main characters that survive the war.
    
                                <div class="border border-gray-200 w-full mt-6"></div>

                                    <div class="mt-6">
                                        <input type="checkbox" id="some_id" />
                                        <label htmlFor="some_id">Notify members of the book review meeting</label>
                                    </div>
                                    <form method="get" action="/send-sms">
                                        @csrf
                                        <input type="text" class="w-full" name="group_message" placeholder="Type your message here" value="Read of the Week: The Book Thief is a story narrated by a compassionate Death who tells us about Liesel, a girl growing up in Germany during World War II. She steals books, learns to read, and finds comfort in words. She and Max, the Jew her family protects, are the only main characters that survive the war." />
                                        <button type="submit" class=" bg-red-400 space-y-6 text-white py-2 my-2 px-2 rounded-xl hover:opacity-80">
                                            <i class="fa-solid fa-message"></i> Send notification
                                        </button>
                                    </form>
                            </div>
                        </div>
        </div>
    </div>
</div>

</x-layout>