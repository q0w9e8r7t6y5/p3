@extends('master')

@section('content')


    <h6>
        Please pick your dish type, meat/tofu selection, and toppings. If there are any special instructions, put them in the textbox and press submit to confirm your order!</b>
    </h6>

    <form method='get'>
        <fieldset class='type'>

            <h5>Type</h5>
            <input type='radio'
                   name='type'
                   value='burrito'
            > Burrito<br>
            <input type='radio'
                   name='type'
                   value='burrito bowl'> Burrito Bowl<br>
            <input type='radio'
                   name='type'
                   value='hard taco'> Hard Shell Taco<br>
            <input type='radio'
                   name='type'
                   value='soft taco'> Soft Shell Taco<br>
            <input type='radio'
                   name='type'
                   value='salad'> Salad<br>
        </fieldset>
        <br>

        <fieldset class='fill'>
            <h5>Meat & Tofu Selection</h5>
            <select name='fill' id='fill'>
                <option value='chicken'>Chicken ($7.95)</option>
                <option value='carnitas'>Carnitas ($7.95)</option>
                <option value='steak'>Steak ($7.95)</option>
                <option value='chorizo'>Chorizo ($7.95)</option>
                <option value='barbacoa'>Barbacoa ($7.95)</option>
                <option value='sofritas'>Sofritas/Tofu ($6.50)</option>
            </select>
        </fieldset>
        <br>

        <fieldset class='rice'>
            <h5>Fillings</h5>
            <h6>Rice</h6>
            <input type='radio'
                   name='rice'
                   value='White Rice'
            > White Rice<br>
            <input type='radio'
                   name='rice'
                   value='Brown Rice'> Brown Rice<br>
            <input type='radio'
                   name='rice'
                   value='None'> None<br>
        </fieldset>
        <br>

        <fieldset class='beans'>
            <h6>Bean</h6>
            <input type='radio'
                   name='beans'
                   value='Black Beans'
            > Black Beans<br>
            <input type='radio'
                   name='beans'
                   value='Pinto Beans'> Pinto Beans<br>
            <input type='radio'
                   name='beans'
                   value='None'> None<br>
        </fieldset>
        <br>

        <fieldset class='veggies'>
            <h6>Fajita Veggies</h6>
            <input type='radio'
                   name='veggies'
                   value='Yes'
            > Yes<br>
            <input type='radio'
                   name='veggies'
                   value='No'> No<br>
        </fieldset>
        <br>

        <fieldset id="toppings">
            <h6>Toppings</h6>
            <input type='checkbox'
                   name='toppings[]'
                   value='queso'> Queso<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='sourcream'> Sour Cream<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='guac'> Guacamole<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='mild'> Mild Red Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='medium red salsa'> Med Red Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='medium corn salsa'> Med Corn Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='hot salsa'> Hot Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='cheese'> Shredded Cheese<br>
        </fieldset>
        <br>

        <fieldset id="comment">
            <h5>Special Instructions</h5>
            <textarea name="comment" rows="2" cols="40"> </textarea>
        </fieldset>

        <br>

        <input type="submit" value="Submit">

    </form>

    <?php dump($_GET); ?>

    <?php

    $type = $_GET['type'] ?? null;
    $fill = $_GET['fill'] ?? null;
    $beans = $_GET['beans'] ?? null;
    $rice = $_GET['rice'] ?? null;
    $veggies = $_GET['veggies'] ?? null;
    $toppings = $_GET['toppings'] ?? null;
    $comment = $_GET['comment'] ?? null;

    $results = null;

    ?>

    <?php if ($_GET) : ?>
    <br>
    <div class='alert alert-info' role='alert'>
        <h5>Your order has been submitted!</h5>

        <h6>Order Details</h6>

        <table>
            <tr>
                <td>Type:</td>
                <td><?= ucwords($type) ?></td>
            </tr>
            <tr>
                <td>Fill Selection:</td>
                <td><?= ucwords($fill) ?></td>
            </tr>
            <tr>
                <td>Rice:</td>
                <td><?= ucwords($rice) ?></td>
            </tr>
            <tr>
                <td>Beans:</td>
                <td><?= ucwords($beans) ?></td>
            </tr>
            <tr>
                <td>Veggies:</td>
                <td><?= ucwords($veggies) ?></td>
            </tr>
            <tr>
                <td>Topping:</td>
                <td> <?php if (!$toppings) {
                     echo "None";
                     } else {
                        echo ucwords(join(', ', $toppings));
                     }
                     ?>
                </td>
            </tr>
                <tr>
                <td>Add'l Comments:</td>
                <td><?= ucwords($comment) ?></td>
            </tr>
            <tr>
                <td>Total (with tax):</td>
                <td><?php echo "test"; ?></td>
            </tr>
            <tr>
                <td>Total (with tax):</td>
                <td>

                <?php if ($fill == "sofritas") {
                    echo "$6.50";
                    } else {
                    echo "$7.95";
                    }
                    ?>

                </td>
            </tr>
       </table>

    </div>
    <?php endif; ?>




@endsection
