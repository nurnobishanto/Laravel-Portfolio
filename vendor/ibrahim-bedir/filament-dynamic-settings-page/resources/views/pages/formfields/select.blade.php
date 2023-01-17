<?php $options = json_decode($item['details']) ?>
<?php $selected_value = isset($item['value'] ) && !empty($item['value']) ? $item['value'] : null; ?>
<select {{ $wireModel }} class="block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500 border-gray-300 dark:border-gray-600">
    <?php $default = isset($options->default) ? $options->default : null; ?>
    @if (isset($options->options))
        @foreach ($options->options as $index => $option)
            <option value="{{ $index }}" @if ($default == $index && $selected_value === null) selected="selected" @endif
                @if ($selected_value == $index) selected="selected" @endif>{{ $option }}</option>
        @endforeach
    @endif
</select>
