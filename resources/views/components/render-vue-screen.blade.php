<script setup lang="ts">

    @foreach($screen->getImports() as $path=>$imports)
        import { {{join(", ",$imports)}} } from "{{$path}}";
    @endforeach

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
