<div>
    @if($show)
        <div class="fixed inset-0 z-10 flex items-center justify-center">
            <!-- Opaque overlay -->
            <div class="absolute inset-0 bg-black opacity-80"></div>
            
            <!-- Modal content -->
            <div class="bg-[#1e1e1e] p-12 rounded shadow-xl flex flex-col w-[600px] z-20 md:m-8">
                <div class="flex justify-between items-center">
                    <div class="flex items-center mb-4">
                        <img src="/images/pcl_profile.png" class="w-[40px] mr-4" alt="" />
                        <h1 class="text-white font-bold text-2xl">Howdy!</h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" wire:click="hideModal">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>                       
                </div>
                <p class="text-[#a5a5a5] mb-4">Thank you for your interest. Please fill out the form below in order to download my resume. <b class="text-white">Yes, this is my most recent resume</b>. I really appreciate the opportunity.</p>
                <div class="flex mb-2">
                    <div class="flex-col relative mr-2 w-1/2">
                        <label for="first_name" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">First Name (required)</label>
                        <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="text" wire:model="first_name" placeholder="John" required>
                        @error('first_name') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex-col relative w-1/2">
                        <label for="last_name" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">Last Name (required)</label>
                        <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="text" wire:model="last_name" placeholder="Doe" required>
                        @error('last_name') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex flex-col my-2 relative">
                    <label for="company" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">Company Name (required)</label>
                    <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="text" wire:model="company" placeholder="ACME" required>
                    @error('company') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                </div>

                <div class="flex flex-col my-2 relative">
                    <label for="company_url" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">Website (required)</label>
                    <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="url" wire:model="company_url" placeholder="https://www.acme.com" required>
                    @error('company_url') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                </div>

                <div class="flex my-2">
                    <div class="flex-col relative mr-2 w-1/2">
                        <label for="phone" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">Phone</label>
                        <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="tel" wire:model="phone" placeholder="" required>
                        @error('phone') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex-col relative w-1/2">
                        <label for="cell" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">Cell (required)</label>
                        <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="tel" wire:model="cell" placeholder="" required>
                        @error('cell') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex flex-col my-2 relative">
                    <label for="email" class="absolute -top-[16px] left-4 bg-[#1E1E1E] p-2 text-xs font-bold">Email (required)</label>
                    <input class="bg-[#1e1e1e] text-[#a5a5a5] border border-neutral-500 p-4 w-full focus:border-[#D7F055] focus:ring-[#D7F055] placeholder:text-[#707070]" type="email" wire:model="email" placeholder="john.doe@acme.com" required>
                    @error('email') <span class="error mb-2 text-[#3e3e3e]">{{ $message }}</span> @enderror
                </div>
                
                <button class="bg-[#D7EF55] text-[#1e1e1e] font-bold py-4 mt-4 rounded hover:bg-[#b9cd48]" type="button" wire:click="saveAndDownload">Submit</button>
            </div>
        </div>
    @endif
</div>

@push('scripts')
  <script>
    window.livewire.on('initiateDownloadAndRedirect', function() {
        // Start the download
        window.location.href = "/download-resume"; // This route will handle the actual file download

        // Wait for a short duration and then redirect to the thank-you page
        setTimeout(function() {
            window.location.href = "/thank-you";
        }, 1000); // 1 second delay, adjust as needed
    });
  </script>
@endpush
