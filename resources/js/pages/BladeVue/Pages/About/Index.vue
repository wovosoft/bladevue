<script setup lang="ts">
    
    import AppLayout from "@/layouts/AppLayout.vue";

            import { Button } from "@/components/ui/button";
            import { Card } from "@/components/ui/card";
    
    const props = withDefaults(defineProps < {
        title? : string
    } > (), {
        title: "Blade Vue is awesome!"
    });
</script>

<template>
    <AppLayout>
                                    <Button  variant="destructive" size="sm">

    <template #default>
        Destructive Small Button
    </template>


</Button>
                            <Button  variant="outline" size="sm">

    <template #default>
        Outline Small Button
    </template>


</Button>
                            <Button  variant="destructive" size="">

    <template #default>
        Destructive Default Button
    </template>


</Button>
                            <Card  >


            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Card  >


            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
            <Button  variant="outline" size="">

    <template #default>
        Outline Default Button
    </template>


</Button>
    
</Card>
    
</Card>
                        </AppLayout>
</template>
