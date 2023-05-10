<div>
    <form class="" wire:submit.prevent="submitForm" method="POST" x-data="{ terminos: false }">
        <div class="form-container">
            <div class="hidden">
                @csrf
                <input type="text" name="page" value="Contacto WEB" wire:model.defer="medium">
            </div>
            <div>
                <input type="text" placeholder="*Nombre y apellido" maxlength="80" id="name" class="rounded-full bg-secondary text-white placeholder-white w-full h-10 px-3" wire:model="name">
                @error('name')
                    <span class="error text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-5">
                <input type="text" placeholder="*Correo electrónico" maxlength="120" id="email" class="rounded-full bg-secondary text-white placeholder-white w-full h-10 px-3" wire:model="email">
                @error('email')
                    <span class="error text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-5">
                <input type="tel" placeholder="*Teléfono" maxlength="40" id="phone" class="rounded-full bg-secondary text-white placeholder-white w-full h-10 px-3" wire:model="phone">
                @error('phone')
                    <span class="error text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-2 ">
                <div class="flex items-center">
                    <input type="checkbox" class="w-4 h-4 text-secondary bg-gray-100 rounded border-gray-300 focus:ring-secondary" name="tratamiento" id="tratamiento" wire:model="tratamiento">
                    <label for="tratamiento" class="ml-2 text-sm text-gray-300 font-semibold">Acepto
                        los <a x-on:click="terminos = !terminos" class="text-secondary pl-1 cursor-pointer">términos y
                            condiciones</a></label>
                </div>

                @error('tratamiento')
                    <span class="error text-red-400 block">{{ $message }}</span>
                @enderror
            </div>
            <div x-show="terminos" x-transition>
                <p class=" text-xs text-white">Con este formulario de contacto inicial y de acuerdo con la política de
                    tratamiento de datos personales.</p>
            </div>

            <div class="flex justify-center mt-6 py-8">
                <button type="submit" id="btn-enviar" class="text-3xl font-bold bg-secondary text-white rounded-full px-7 py-2">Enviar</button>
            </div>
        </div>
    </form>
    <p>{{ session('success') }}</p>
</div>
