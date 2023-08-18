@php
    use Carbon\Carbon;
@endphp

<div>
    <div class="p-6 lg:p-8 bg-[#1E1E1E] border-b border-[#1E1E1E]">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-white">Recruiters</h1>
                <p class="mt-2 text-sm text-slate-200">Recent recruiter requests.</p>
            </div>
            {{-- <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add user</button>
            </div> --}}
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <input class="rounded border-none bg-[#1e1e1e] text-white placeholder-[#484848] focus:outline-none focus:border-[#D7EF55] transition" type="text" wire:model="search" placeholder="Search recruiters...">
            </div>
            
            </div>
            <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">Name</th>
                        {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Company</th> --}}
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Webiste</th>
                        {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Phone</th> --}}
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Cell</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Email</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Date</th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                            {{-- <span class="sr-only">Edit</span> --}}
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @foreach($recruiters as $recruiter)
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">{{ $recruiter->fist_name . ' ' . $recruiter->last_name }}</td>
                            {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-200">{{ $recruiter->company }}</td> --}}
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-200">{{ $recruiter->company_url }}</td>
                            {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-200">{{ $recruiter->phone }}</td> --}}
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-200">{{ $recruiter->cell }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-200">{{ $recruiter->email }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-200">{{ $recruiter->created_at->format('m/d/Y H:i:s') }}</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <button type="button" wire:click="delete({{ $recruiter->id }})" class="text-[#D7EF55] hover:text-[#aabb49] font-bold">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                    </tbody>
                </table>
                <div class="py-4">
                    {{ $recruiters->links() }}
                </div>
                </div>
            </div>
            </div>
        </div> 
    </div>     
</div>
