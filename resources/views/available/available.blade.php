<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-secondary dark:text-secondary leading-tight ml-8">
            {{ __('Available Personnel') }}
        </h2>
    </x-slot>

    <section class="text-blue body-font flex-grow">
        <div class="bg-gray-100 p-8">
            <!-- Search and Dropdown Section -->
            <div class="flex justify-between items-center mb-8">
                <!-- Search Input -->
                <div class="w-1/3">
                    <input type="text" class="w-full p-2 border rounded" placeholder="Search...">
                </div>
                <!-- Dropdown Menu -->
                <div class="w-1/3 text-center">
                    <select class="w-full p-2 border rounded">
                        <option value="">Select Service</option>
                        <option value="carpentry">Carpentry</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>

            <!-- Service Personnel Grid -->
            <div class="grid grid-cols-3 gap-4">
                <!-- Personnel Card 1 -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Service Personnel Name</h2>
                    <p class="text-gray-600 mb-2">Address: Service Personnel Address</p>
                    <!-- Additional Information -->
                    <!-- Add more details as needed -->
                </div>

                <!-- Personnel Card 2 -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Service Personnel Name</h2>
                    <p class="text-gray-600 mb-2">Address: Service Personnel Address</p>
                    <!-- Additional Information -->
                    <!-- Add more details as needed -->
                </div>

                <!-- Personnel Card 3 -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Service Personnel Name</h2>
                    <p class="text-gray-600 mb-2">Address: Service Personnel Address</p>
                    <!-- Additional Information -->
                    <!-- Add more details as needed -->
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Service Personnel Name</h2>
                    <p class="text-gray-600 mb-2">Address: Service Personnel Address</p>
                    <!-- Additional Information -->
                    <!-- Add more details as needed -->
                </div>

                <!-- Personnel Card 2 -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Service Personnel Name</h2>
                    <p class="text-gray-600 mb-2">Address: Service Personnel Address</p>
                    <!-- Additional Information -->
                    <!-- Add more details as needed -->
                </div>

                <!-- Personnel Card 3 -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold mb-2">Service Personnel Name</h2>
                    <p class="text-gray-600 mb-2">Address: Service Personnel Address</p>
                    <!-- Additional Information -->
                    <!-- Add more details as needed -->
                </div>

                <!-- Add more personnel cards as needed -->
            </div>
        </div>

    </section>
</x-app-layout>