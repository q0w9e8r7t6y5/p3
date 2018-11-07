@extends('master')

<div class="container">

    <h6>
        <b>Please pick your dish type, meat/tofu selection, and toppings. If there are any special instructions, put them in the textbox and press submit to confirm your order!</b>
    </h6><br>

    {{--<form method='GET'>--}}
        {{--<fieldset class='type'>--}}
            {{--<h5>Type</h5>--}}
            {{--<input type='radio'--}}
                   {{--name='type'--}}
                   {{--value='burrito'--}}
            {{--<?php if (!isset($type) or (isset($type) and $type == 'burrito')) echo 'checked' ?>> Burrito<br>--}}
            {{--<input type='radio'--}}
                   {{--name='type'--}}
                   {{--value='burrito bowl' <?php if (isset($type) and $type == 'burrito bowl') echo 'checked' ?>> Burrito Bowl<br>--}}
            {{--<input type='radio'--}}
                   {{--name='type'--}}
                   {{--value='hard taco' <?php if (isset($type) and $type == 'hard taco') echo 'checked' ?>> Hard Shell Taco<br>--}}
            {{--<input type='radio'--}}
                   {{--name='type'--}}
                   {{--value='soft taco' <?php if (isset($type) and $type == 'soft taco') echo 'checked' ?>> Soft Shell Taco<br>--}}
            {{--<input type='radio'--}}
                   {{--name='type'--}}
                   {{--value='salad' <?php if (isset($type) and $type == 'salad') echo 'checked' ?>> Salad<br>--}}
        {{--</fieldset>--}}
        {{--<br>--}}

        {{--<fieldset class='fill'>--}}
            {{--<h5>Meat & Tofu Selection</h5>--}}
            {{--<select name='fill' id='fill'>--}}
                {{--<option value='chicken' <?php if ($fill == 'chicken') echo 'selected' ?>>Chicken ($7.95)</option>--}}
                {{--<option value='carnitas' <?php if ($fill == 'carnitas') echo 'selected' ?>>Carnitas ($7.95)</option>--}}
                {{--<option value='steak' <?php if ($fill == 'steak') echo 'selected' ?>>Steak ($7.95)</option>--}}
                {{--<option value='chorizo' <?php if ($fill == 'chorizo') echo 'selected' ?>>Chorizo ($7.95)</option>--}}
                {{--<option value='barbacoa' <?php if ($fill == 'barbacoa') echo 'selected' ?>>Barbacoa ($7.95)</option>--}}
                {{--<option value='sofritas' <?php if ($fill == 'sofritas') echo 'selected' ?>>Sofritas/Tofu ($6.50)</option>--}}
            {{--</select>--}}
        {{--</fieldset>--}}
        {{--<br>--}}

        {{--<fieldset class='rice'>--}}
            {{--<h5>Fillings</h5>--}}
            {{--<h6>Rice</h6>--}}
            {{--<input type='radio'--}}
                   {{--name='rice'--}}
                   {{--value='White Rice'--}}
            {{--<?php if (!isset($rice) or (isset($rice) and $rice == 'White Rice')) echo 'checked' ?>> White Rice<br>--}}
            {{--<input type='radio'--}}
                   {{--name='rice'--}}
                   {{--value='Brown Rice' <?php if (isset($rice) and $rice == 'Brown Rice') echo 'checked' ?>> Brown Rice<br>--}}
            {{--<input type='radio'--}}
                   {{--name='rice'--}}
                   {{--value='None' <?php if (isset($rice) and $rice == 'None') echo 'checked' ?>> None<br>--}}
        {{--</fieldset>--}}
        {{--<br>--}}

        {{--<fieldset class='beans'>--}}
            {{--<h6>Bean</h6>--}}
            {{--<input type='radio'--}}
                   {{--name='beans'--}}
                   {{--value='Black Beans'--}}
            {{--<?php if (!isset($beans) or (isset($beans) and $beans == 'Black Beans')) echo 'checked' ?>> Black Beans<br>--}}
            {{--<input type='radio'--}}
                   {{--name='beans'--}}
                   {{--value='Pinto Beans' <?php if (isset($beans) and $beans == 'Pinto Beans') echo 'checked' ?>> Pinto Beans<br>--}}
            {{--<input type='radio'--}}
                   {{--name='beans'--}}
                   {{--value='None' <?php if (isset($beans) and $beans == 'None') echo 'checked' ?>> None<br>--}}
        {{--</fieldset>--}}
        {{--<br>--}}

        {{--<fieldset class='veggies'>--}}
            {{--<h6>Fajita Veggies</h6>--}}
            {{--<input type='radio'--}}
                   {{--name='veggies'--}}
                   {{--value='Yes'--}}
            {{--<?php if (!isset($veggies) or (isset($veggies) and $veggies == 'Yes')) echo 'checked' ?>> Yes<br>--}}
            {{--<input type='radio'--}}
                   {{--name='veggies'--}}
                   {{--value='No' <?php if (isset($veggies) and $veggies == 'No') echo 'checked' ?>> No<br>--}}
        {{--</fieldset>--}}
        {{--<br>--}}

        {{--<fieldset id="toppings">--}}
            {{--<h6>Toppings</h6>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='queso' <?php if (strstr($results, 'queso')) echo 'checked' ?>> Queso<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='sourcream' <?php if (strstr($results, 'sour cream')) echo 'checked' ?>> Sour Cream<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='guac' <?php if (strstr($results, 'guac')) echo 'checked' ?>> Guacamole<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='mild' <?php if (strstr($results, 'mild salsa')) echo 'checked' ?>> Mild Red Salsa<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='medium red salsa' <?php if (strstr($results, 'med red salsa')) echo 'checked' ?>> Med Red Salsa<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='medium corn salsa' <?php if (strstr($results, 'med corn salsa')) echo 'checked' ?>> Med Corn Salsa<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='hot salsa' <?php if (strstr($results, 'hot salsa')) echo 'checked' ?>> Hot Salsa<br>--}}
            {{--<input type='checkbox'--}}
                   {{--name='toppings[]'--}}
                   {{--value='cheese' <?php if (strstr($results, 'cheese')) echo 'checked' ?>> Shredded Cheese<br>--}}
        {{--</fieldset>--}}
        {{--<br>--}}

        {{--<fieldset id="comment">--}}
            {{--<h5>Special Instructions</h5>--}}
            {{--<textarea name="comment" rows="2" cols="40"><?php echo $comment; ?></textarea>--}}
        {{--</fieldset>--}}

        {{--<br>--}}

        {{--<input type="submit" value="Submit">--}}
    {{--</form>--}}

    {{--<br>--}}
    {{--<form method="get" action="index.php">--}}
        {{--<button type="submit">Home Page</button>--}}
    {{--</form>--}}

    {{--<?php if ($_GET) : ?>--}}
    {{--<br>--}}
    {{--<div class='alert alert-info' role='alert'>--}}
        {{--<h5>Your order has been submitted!</h5>--}}

        {{--<h6>Order Details</h6>--}}

        {{--<table>--}}
            {{--<tr>--}}
                {{--<td>Type:</td>--}}
                {{--<td><?= ucwords($type) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Fill Selection:</td>--}}
                {{--<td><?= ucwords($fill) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Rice:</td>--}}
                {{--<td><?= ucwords($rice) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Beans:</td>--}}
                {{--<td><?= ucwords($beans) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Veggies:</td>--}}
                {{--<td><?= ucwords($veggies) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Topping:</td>--}}
                {{--<td><?= ucwords($commaList) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Add'l Comments:</td>--}}
                {{--<td><?= ucwords($comment) ?></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>Total (with tax):</td>--}}
                {{--<td><?php echo $total; ?></td>--}}
        {{--</table>--}}

    {{--</div>--}}
    {{--<?php endif; ?>--}}

</div>

