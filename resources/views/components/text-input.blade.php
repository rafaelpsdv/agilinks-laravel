@props(['name', 'label', 'type' => 'text'])

<div class="field">
    <label for="{{ $name  }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}">

    @error('{{ $name }}')
        <span class='ui red text'>{{ $message }}</span>
        
    @enderror

</div>