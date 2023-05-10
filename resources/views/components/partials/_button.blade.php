<button type="{{ isset($type) == 'submit' ? $type : 'button' }}"
    class=" text-2xl text-primary font-bold bg-gradient-to-r from-face1 via-face2 to-face3 rounded-full px-7 py-2" @click="modelOpen =!modelOpen">
    {{ $text }}
</button>
