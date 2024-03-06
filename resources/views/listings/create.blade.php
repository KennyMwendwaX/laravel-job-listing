<x-layout>
    <div class="px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-xl font-bold text-gray-900 flex justify-center">Add a new job listing</h2>
        <form action="#">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Job Title</label>
                    <input type="text" name="title" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="Software developer" required>
                </div>
                <div>
                    <label for="schedule" class="block mb-2 text-sm font-medium text-gray-900">Schedule</label>
                    <select id="schedule"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-2 focus:border-blue-500 block w-full p-2.5 outline-none">
                        <option selected>Select schedule</option>
                        <option value="Full time">Full time</option>
                        <option value="Part time">Part time</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>
                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                    <select id="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-2 focus:border-blue-500 block w-full p-2.5 outline-none">
                        <option selected>Select status</option>
                        <option value="On site">On site</option>
                        <option value="Remote">Remote</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">Salary</label>
                    <input type="text" name="salary" id="salary"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="salary" required>
                </div>
                <div class="w-full">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Tags (Comma
                        separated)</label>
                    <input type="text" name="tags" id="tags"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="laravel, api, backend" required>
                </div>
                <div class="w-full">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
                    <input type="text" name="company" id="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="company" required>
                </div>
                <div class="w-full">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="acme@gmail.com" required>
                </div>
                <div class="w-full">
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                    <input type="text" name="location" id="location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="Nairobi, Kenya" required>
                </div>
                <div class="w-full">
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Website</label>
                    <input type="text" name="website" id="website"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-2 focus:border-blue-600 block w-full p-2.5 outline-none"
                        placeholder="acme.com" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                    <textarea id="description" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-2 focus:border-blue-500 outline-none"
                        placeholder="Your job description here"></textarea>
                </div>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                Add product
            </button>
        </form>
    </div>
</x-layout>
