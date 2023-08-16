<div>
    @if($show)
        <div class="fixed inset-0 z-10 flex items-center justify-center">
            <!-- Opaque overlay -->
            <div class="absolute inset-0 bg-black opacity-80"></div>
            
            <!-- Modal content -->
            <div class="bg-[#1e1e1e] p-12 rounded shadow-xl flex flex-col w-[600px] z-20 m-8">
                <div class="flex justify-between items-center">
                    <div class="flex items-center mb-4">
                        <img src="/images/pcl_profile.png" class="w-[40px] mr-4" alt="" />
                        <h1 class="text-white font-bold text-2xl">Howdy!</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" wire:click="hideModal">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>                       
                </div>
                <p class="text-[#a5a5a5] mb-4">Thank you for your interest. Please fill out the form below in order to download my resume. I really appreciate the opportunity.</p>
                <div class="flex">
                    <input class="w-1/2 bg-[#1e1e1e] border-[#3e3e3e] text-white rounded mb-2 mr-2" type="text" wire:model="first_name" placeholder="First Name" required>
                    @error('first_name') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror

                    <input class="w-1/2 bg-[#1e1e1e] border-[#3e3e3e] text-white rounded mb-2" type="text" wire:model="last_name" placeholder="Last Name" required>
                    @error('last_name') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                </div>

                <input class="bg-[#1e1e1e] border-[#3e3e3e] text-white rounded mb-2" type="text" wire:model="company" placeholder="Company Name" required>
                @error('company') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror

                <input class="bg-[#1e1e1e] border-[#3e3e3e] text-white rounded mb-2" type="text" wire:model="company_url" placeholder="https://www.yourcompany.com" required>
                @error('company_url') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror

                <div class="flex">
                    <div class="w-1/2 mr-2">
                        <input class="w-full bg-[#1e1e1e] border-[#3e3e3e] text-white rounded mb-2" type="text" wire:model="phone" placeholder="Phone (XXX-XXX-XXXX)" required>
                        @error('phone') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                    </div>

                    <div class="w-1/2">
                        <input class="w-full bg-[#1e1e1e] border-[#3e3e3e] text-white rounded mb-2" type="text" wire:model="cell" placeholder="Cell (XXX-XXX-XXXX)" required>
                        @error('cell') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                    </div>
                </div>

                <input class="bg-[#1e1e1e] border-[#3e3e3e] text-white rounded" type="email" wire:model="email" placeholder="Email" required>
                @error('email') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                
                <button class="bg-[#D7EF55] text-[#1e1e1e] font-bold py-4 mt-4 rounded hover:bg-[#b9cd48]" type="button" wire:click="saveAndDownload">Submit</button>
            </div>
        </div>
    @endif
</div>
