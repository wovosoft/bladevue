<script setup lang="ts">
    const props = withDefaults(defineProps < {
        title? : string
    } > (), {
        title: "Blade Vue is awesome!"
    });
</script>

<template>
    <div>
                                    <button  variant="primary" size="sm" label="Button with Label">
</button>
                            <button  variant="primary" size="sm" label="Button with Label">
</button>
                        </div>
</template>
