<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Create Job Listing
        </h2>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            <x-inputs.text id="title" name="title" label="Job Title" placeholder="Software Engineer"></x-inputs.text>

            <x-inputs.text-area id="description" name="description" label="Job Description" large="true" placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..."></x-inputs.text-area>

            <x-inputs.text id="salary" name="salary" type="number" label="Salary" placeholder="120000"></x-inputs.text>

            <x-inputs.text-area id="requirements" name="requirements" label="Requirements" placeholder="Bachelor's degree in Computer Science"></x-inputs.text-area>

            <x-inputs.text-area id="benefits" name="benefits" label="Benefits" placeholder="Health insurance, 401k, paid time off"></x-inputs.text-area>

            <x-inputs.text id="tags" name="tags" label="Tags (comma-separated)" placeholder="development,coding,java,python"></x-inputs.text>

            <x-inputs.select id="job_type" name="job_type" :options="['Full-Time', 'Part-Time', 'Contract', 'Temporary', 'Internship', 'Volunteer', 'On-Call']" label="Job Type"></x-inputs.select>

            <x-inputs.select id="remote" name="remote" :options="['No', 'Yes']" label="Remote"></x-inputs.select>

            <x-inputs.text id="address" name="address" label="Address" placeholder="123 Main St"></x-inputs.text>

            <x-inputs.text id="city" name="city" label="City" placeholder="Albany"></x-inputs.text>

            <x-inputs.text id="state" name="state" label="State" placeholder="NY"></x-inputs.text>

            <x-inputs.text id="zipcode" name="zipcode" label="ZIP Code" placeholder="12201"></x-inputs.text>

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <x-inputs.text id="company_name" name="company_name" label="Company Name" placeholder="Company Name"></x-inputs.text>

            <x-inputs.text-area id="company_description" name="company_description" label="Company Description" placeholder="Company Description"></x-inputs.text-area>

            <x-inputs.text id="company_website" name="company_website" type="url" label="Company Website" placeholder="Company Website"></x-inputs.text>

            <x-inputs.text id="contact_phone" name="contact_phone" label="Contact Phone" placeholder="Contact Phone"></x-inputs.text>

            <x-inputs.text id="contact_email" name="contact_email" label="Contact Email" placeholder="Contact Email"></x-inputs.text>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_logo">Company Logo</label>
                <input id="company_logo" type="file" name="company_logo"
                    class="w-full px-4 py-2 border rounded focus:outline-none @error('company_logo') border-red-500 @enderror" />
            </div>
            @error('company_logo')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>