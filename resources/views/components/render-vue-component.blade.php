<?php
/**
 * @var \App\BladeVue\Components\BaseComponent $schema
 */
?>

<{{$schema->getTag()}} {{$attributes}} {{$getVueProps()}}>

@foreach($schema->getSlots() as $slotName=>$value)
    <template #{{$slotName}}>
        {{$value}}
    </template>
@endforeach

@if(!empty($schema->schema))
    @foreach($schema->schema as $child)
        <x-render-vue-component :schema="$child"/>
    @endforeach
@endif

</{{$schema->getTag()}}>
