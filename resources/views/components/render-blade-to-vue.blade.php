<script setup lang="ts">
    const props = withDefaults(defineProps < {
        title? : string
    } > (), {
        title: "{{$screen->getTitle()}}"
    });
</script>

<template>
    <div>
        @if(!empty($screen->schema))
            @foreach($screen->schema as $schema)
                <x-render-vue-component :schema="$schema" />
            @endforeach
        @endif
    </div>
</template>
