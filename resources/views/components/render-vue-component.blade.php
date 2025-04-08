<{{$schema->getTag()}} {{$attributes}} {{$getVueProps()}}>
<?php
/**
 * @var \App\BladeVue\Components\BaseComponent $schema
 */
?>

@foreach($schema->getSlots() as $slotName=>$value)
    <template #{{$slotName}}>
        {{$value}}
    </template>
@endforeach
</{{$schema->getTag()}}>
