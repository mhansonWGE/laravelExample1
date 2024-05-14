@props(['active' => false , 'type'=> 'button'])


@if ({{$type !== 'button'}}){
    <a class="{{ $active ? 'bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
    aria-current="{{ $active ? 'page' : 'false'}}"
    {{$attributes}}>{{$slot}}</a>}
@else
<button>
    my BUTTON
</button>
@endif


 