<x-layout>
    <div class="px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-xl font-bold text-gray-900 flex justify-center">Upload your C.V/Resume</h2>
        <form method="POST" action="/">
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <div id="file-name">
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">PDF format only</p>
                        </div>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" onchange="displayFileName(this)" />
                </label>
            </div>
            <button type="submit"
                class="mt-4 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 block text-center w-full">
                Submit and apply for job
            </button>
        </form>
    </div>

    <script>
        function displayFileName(input) {
            const fileName = input.files[0].name;
            document.getElementById('file-name').innerText = fileName;
        }
    </script>
</x-layout>
