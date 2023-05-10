<div>
    <form class="" wire:submit.prevent="submitForm" method="POST">
        <div class="form-container">
            <div class="hidden">
                @csrf
                <input type="text" name="page" value="Contacto WEB" wire:model.defer="medium">
            </div>
            <div>
                <input type="text" placeholder="*Nombre y apellido" maxlength="40" class="rounded-full bg-secondary text-white placeholder-white w-full h-10 px-3" wire:model="name">
                @error('name') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
        
            <div class="mt-5">
                <input type="text" placeholder="*Correo electrónico" maxlength="40" class="rounded-full bg-secondary text-white placeholder-white w-full h-10 px-3" wire:model="email">
                @error('email') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
        
            <div class="mt-5">
                <input type="tel" placeholder="*Teléfono" maxlength="40" class="rounded-full bg-secondary text-white placeholder-white w-full h-10 px-3" wire:model="phone">
                @error('phone') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            
            <div class="mt-2">
                <input type="checkbox" class="accent-secondary" name="tratamiento" id="tratamiento" wire:model="tratamiento"> 
                <label for="tratamiento" class="ml-2 text-sm text-gray-900 dark:text-gray-300 font-semibold">Lorem ipsum, dolor sit amet</label>
                @error('tratamiento') <span class="error text-red-400 block">{{ $message }}</span> @enderror
            </div>
        
            <div class="flex justify-center mt-6 py-8">
                <button type="submit" class="text-3xl font-bold bg-secondary text-white rounded-full px-7 py-2">Enviar</button>
            </div>
        </div>
    </form>
    <p>{{ session('success') }}</p>
</div>
