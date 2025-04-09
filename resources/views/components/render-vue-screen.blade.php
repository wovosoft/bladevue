<script setup lang="ts">
    @php
        $layout=$screen->getLayout();
    @endphp

    import {{$layout['name']}} from "{{$layout['from']}}";

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
    <{{$layout['name']}}>
        @if(!empty($screen->schema))
            @foreach($screen->schema as $schema)
                <x-render-vue-component :schema="$schema" />
            @endforeach
        @endif
    </{{$layout['name']}}>
</template>
