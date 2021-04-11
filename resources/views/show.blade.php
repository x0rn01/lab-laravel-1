<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-2 py-6">
            <div class="flex-none">
                <a href="">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">A random title goes over here</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A culpa dolorem doloribus odio omnis quidem recusandae saepe sit tempora vero? Debitis distinctio iste nemo nisi, officiis quam rerum similique vel? Ab aperiam assumenda, autem dolorem error et expedita fugit id inventore ipsum iste labore minima modi natus nihil nulla obcaecati odit officia optio pariatur praesentium quam quis quo quod recusandae reiciendis repellat repellendus reprehenderit sequi soluta tempore temporibus velit voluptas? Aperiam aspernatur aut deserunt dolorum, eligendi exercitationem hic numquam perspiciatis reprehenderit unde! Amet aut commodi, consequuntur deleniti doloremque eligendi in itaque repellendus voluptatem? Animi deleniti praesentium, recusandae repudiandae rerum tempore!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div
                        x-data="{ isOpen: false }"
                        class="flex items-center space-x-2"
                    >
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="bg-gray-100 relative hover:bg-gray-200 rounded-full h-7 transition duration-150 easi-in py-2 px-4"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 font-semibold bg-white text-left ml-8 shadow-lg rounded-xl py-3"
                            >
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end idea container -->
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div
                x-data="{ isOpen: false }"
                class="relative"
            >
                <button
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-32 text-xs bg-blue-400 font-semibold
                                rounded-xl border border-blue-200 hover:bg-blue-600 transition duration-150
                                easi-in py-3 px-6 text-white">
                    <span class="ml-1">Reply</span>
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialg rounded-xl mt-2"
                >
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="relative">
                            <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                      class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                      placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                            </div>
                            <div class="flex items-center justify-start space-x-3 mt-3">
                                <button type="submit"
                                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 font-semibold
                                    rounded-xl border border-blue-200 hover:bg-blue-600 transition duration-150
                                    easi-in py-3 px-6 text-white">
                                    <span class="ml-1">Post comment</span>
                                </button>
                                <button type="button"
                                        class="flex items-center justify-center h-11 text-xs bg-gray-200 font-semibold
                                    rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150
                                    easi-in py-3 px-6">
                                    <svg class="text-gray-600 w-5 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Attach</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div
                x-data="{ isOpen: false }"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center h-11 text-xs bg-gray-200 font-semibold
                                rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150
                                easi-in py-3 px-6">
                    <span class="mr-1">Set Status</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-md rounded-xl mt-2"
                >
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-green-500 bg-gray-200 border-none" type="radio" checked="" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-pink-400 bg-gray-200 border-none" type="radio" name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-purple-300 bg-gray-200 border-none" type="radio" name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-yellow-400 bg-gray-200 border-none" type="radio" name="radio-direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-red-400 bg-gray-200 border-none" type="radio" name="radio-direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="w-full text-sm
                            bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2">Add an update comment (optional)
                            </textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold
                                    rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150
                                    easi-in py-3 px-6">
                                <svg class="text-gray-600 w-5 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button type="submit"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 font-semibold
                                    rounded-xl border border-blue-200 hover:bg-blue-600 transition duration-150
                                    easi-in py-3 px-6 text-white">
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input name="notify_voters" type="checkbox" checked="" class="rounded bg-gray-200">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>

                    </form>
                </div>
            </div>

        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            <button type="button"
                    class="w-32 h-11 text-xs bg-gray-200 font-semibold
                                    rounded-xl border uppercase border-gray-200 hover:border-gray-400 transition duration-150
                                    easi-in py-3 px-6">
                <span class="mr-1">Vote</span>
            </button>
        </div>

    </div> <!-- end buttons-container -->

    <div class="comments-container relative space-y ml-22 my-8">
        <div class="comment-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <!-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes over here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto, dolorem dolores expedita ipsa magni sit! At atque consequatur, dolorum eligendi ipsum labore laborum, modi nam nemo quas, quibusdam unde.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2"
                        >
                            <button
                                @click="isOpen = !isOpen"
                                class="bg-gray-100 relative hover:bg-gray-200 rounded-full h-7 transition duration-150 easi-in py-2 px-4"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white text-left ml-8 shadow-lg rounded-xl py-3"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
        <div class="comment-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue-800 text-xxs font-bold mt-1">
                        Admin
                    </div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status changed to "Under construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto, dolorem dolores expedita ipsa magni sit! At atque consequatur, dolorum eligendi ipsum labore laborum, modi nam nemo quas, quibusdam unde.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue-800">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2"
                        >
                            <button
                                @click="isOpen = !isOpen"
                                class="bg-gray-100 relative hover:bg-gray-200 rounded-full h-7 transition duration-150 easi-in py-2 px-4"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white text-left ml-8 shadow-lg rounded-xl py-3"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
        <div class="comment-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <!-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title goes over here</a>
                    </h4> -->
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto, dolorem dolores expedita ipsa magni sit! At atque consequatur, dolorum eligendi ipsum labore laborum, modi nam nemo quas, quibusdam unde.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>

                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2"
                        >
                            <button
                                @click="isOpen = !isOpen"
                                class="bg-gray-100 relative hover:bg-gray-200 rounded-full h-7 transition duration-150 easi-in py-2 px-4"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white text-left ml-8 shadow-lg rounded-xl py-3"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 easi-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment-container -->
    </div> <!-- end comments-container -->

</x-app-layout>
