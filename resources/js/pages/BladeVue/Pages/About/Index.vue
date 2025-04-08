<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';

const props = withDefaults(
    defineProps<{
        title?: string;
    }>(),
    {
        title: 'Blade Vue is awesome!',
    },
);
</script>

<template>
    <div>
        <Button variant="destructive" size="sm">
            <template #default> Destructive Small Button </template>
        </Button>
        <Button variant="outline" size="sm">
            <template #default> Outline Small Button </template>
        </Button>
        <Button variant="destructive" size="">
            <template #default> Destructive Default Button </template>
        </Button>
        <Card>
            <template #default> Hello world! </template>
        </Card>
    </div>
</template>
