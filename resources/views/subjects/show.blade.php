<x-app-layout>

    <style>
        td {
            padding: 0 5rem 1rem 1rem;
        }
    </style>

    <!-- Main Content Section -->
    <div class="py-6">
        <div class="px-12 flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-900">
                Subject Name: {{ $subject->name }}
            </h1>
            <a href="{{ route('subjects.index') }}"
                class="ml-3 inline-flex justify-center px-6 py-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Back</a>
        </div>

        <div class="space-y-8  px-12 py-4">
            <div class="space-y-8 divide-y bg-white px-8 py-8 divide-gray-200 sm:space-y-5">
                <div class="card w-full mx-auto bg-white p-4">
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td>{{ $subject->name }}</td>
                        </tr>
                        <tr>
                            <td>Pass Mark: </td>
                            <td>{{ $subject->pass_mark }}</td>
                        </tr>
                        <tr>
                            <td>Created By: </td>
                            <td>{{ $subject->createdBy?->name }}</td>
                        </tr>
                        <tr>
                            <td>Created at: </td>
                            <td>{{ $subject->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Updated By: </td>
                            <td>{{ $subject->updatedBy?->name }}</td>
                        </tr>
                        <tr>
                            <td>Updated at: </td>
                            <td>{{ $subject->updated_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="space-y-8  px-12 py-4">
            <div class="space-y-8 divide-y bg-white px-8 py-8 divide-gray-200 sm:space-y-5">
                <div class="card w-full mx-auto bg-white p-4">
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td>{{ $subject->name }}</td>
                        </tr>
                        <tr>
                            <td>Pass Mark: </td>
                            <td>{{ $subject->pass_mark }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Content Section -->

</x-app-layout>