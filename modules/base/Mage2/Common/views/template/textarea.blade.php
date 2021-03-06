<?php
if(!isset($attributes)) {
    $attributes = ['class' => 'materialize-textarea'];
}
?>
<div class="input-field   {{ $errors->has($key) ? ' has-error' : '' }}">

    <!--
    @if(!$isDefaultWebsite)
        <div class="input-group">

            <?php
            $attributes['disabled'] = true;
            ?>
            {!! Form::text($key,NULL,$attributes) !!}
            <div class="input-group-addon">
                Same as Default {!! Form::checkbox('same_as_default' . $key, 'value', true, ['class' => 'same_as_default']) !!}
            </div>
        </div>
    @else

    @endif

    -->
    {!! Form::label($key, $label) !!}
    {!! Form::textarea($key,NULL,$attributes) !!}
    @if ($errors->has($key))
        <span class="help-block">
                <strong>{{ $errors->first($key) }}</strong>
            </span>
    @endif
</div>
<script>
    $('textarea').trigger('autoresize');

</script>