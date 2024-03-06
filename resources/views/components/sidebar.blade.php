<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-300 md:translate-x-0"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full">
        <div class="text-xl pb-2 border-b border-gray-300">Filters</div>

        <div class="my-3 border-b border-gray-300">
            <div class="text-gray-600 mb-4">Salary</div>
            <div class="flex items-center mb-3">
                <input id="full-time" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                <label for="full-time" class="ms-2 text-sm font-medium text-gray-900">
                    Over Ksh 100,000</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="part-time" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                <label for="part-time" class="ms-2 text-sm font-medium text-gray-900">
                    Ksh 50,000 - Ksh 100,000</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="contract" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                <label for="contract" class="ms-2 text-sm font-medium text-gray-900">
                    Ksh 25,000 - Ksh 50,000</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="internship" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                <label for="internship" class="ms-2 text-sm font-medium text-gray-900">
                    Under Ksh 25,000</label>
            </div>
        </div>

        <div class="my-3 border-b border-gray-300">
            <div class="text-gray-600 mb-4">Schedule</div>
            <form id="schedule-form" method="GET" action="/">
                <div class="flex items-center mb-3">
                    <input id="full-time" type="checkbox" value="Full time"
                        class="schedule-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="full-time" class="ms-2 text-sm font-medium text-gray-900">
                        Full time</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="part-time" type="checkbox" value="Part time"
                        class="schedule-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="part-time" class="ms-2 text-sm font-medium text-gray-900">
                        Part time</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="contract" type="checkbox" value="Contract"
                        class="schedule-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="contract" class="ms-2 text-sm font-medium text-gray-900">
                        Contract</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="internship" type="checkbox" value="Internship"
                        class="schedule-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="internship" class="ms-2 text-sm font-medium text-gray-900">
                        Internship</label>
                </div>
                <button type="submit" class="btn-submit hidden"></button>
            </form>
        </div>
    </div>
</aside>

<script>
    // Select all checkboxes
    const checkboxes = document.querySelectorAll('.schedule-checkbox');

    // Function to handle checkbox click event
    function handleCheckboxClick(event) {
        // Trigger form submission
        document.querySelector('#schedule-form .btn-submit').click();
    }

    // Add event listener to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('click', handleCheckboxClick);
    });
</script>
