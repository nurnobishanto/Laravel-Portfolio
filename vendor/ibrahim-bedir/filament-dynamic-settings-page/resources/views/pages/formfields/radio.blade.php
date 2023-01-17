<?php $options = json_decode($item['details']) ?>
<?php $selected_value = isset($item['value'] ) && !empty($item['value']) ? $item['value'] : null; ?>
<?php $default = (isset($options->default)) ? $options->default : NULL; ?>
<ul class="radio">
    @if(isset($options->options))
        @foreach($options->options as $index => $option)
            <li>
                <input type="radio" id="option-{{ $index }}" {{ $wireModel }} 
                       value="{{ $index }}" @if($default == $index && $selected_value === NULL) checked @endif @if($selected_value == $index) checked @endif>
                <label for="option-{{ $index }}">{{ $option }}</label>
                <div class="check"></div>
            </li>
        @endforeach
    @endif
</ul>