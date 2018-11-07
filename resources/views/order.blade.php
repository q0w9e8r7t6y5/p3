@extends('master')

@section('content')


    <h6>
        Please pick your dish type, meat/tofu selection, and toppings. If there are any special instructions, put them in the textbox and press submit to confirm your order!</b>
    </h6>

    <form method='GET'>
        <fieldset class='type'>
            <h5>Type</h5>
            <input type='radio'
                   name='type'
                   value='burrito'
            > Burrito<br>
            <input type='radio'
                   name='type'
                   value='burrito bowl' > Burrito Bowl<br>
            <input type='radio'
                   name='type'
                   value='hard taco' > Hard Shell Taco<br>
            <input type='radio'
                   name='type'
                   value='soft taco' > Soft Shell Taco<br>
            <input type='radio'
                   name='type'
                   value='salad' > Salad<br>
        </fieldset>
        <br>

        <fieldset class='fill'>
            <h5>Meat & Tofu Selection</h5>
            <select name='fill' id='fill'>
                <option value='chicken' >Chicken ($7.95)</option>
                <option value='carnitas' >Carnitas ($7.95)</option>
                <option value='steak' >Steak ($7.95)</option>
                <option value='chorizo' >Chorizo ($7.95)</option>
                <option value='barbacoa' >Barbacoa ($7.95)</option>
                <option value='sofritas'  >Sofritas/Tofu ($6.50)</option>
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
                   value='Brown Rice'  > Brown Rice<br>
            <input type='radio'
                   name='rice'
                   value='None'  > None<br>
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
                   value='Pinto Beans'  > Pinto Beans<br>
            <input type='radio'
                   name='beans'
                   value='None'  > None<br>
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
                   value='No'  > No<br>
        </fieldset>
        <br>

        <fieldset id="toppings">
            <h6>Toppings</h6>
            <input type='checkbox'
                   name='toppings[]'
                   value='queso'  > Queso<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='sourcream'  > Sour Cream<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='guac'  > Guacamole<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='mild'  > Mild Red Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='medium red salsa'  > Med Red Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='medium corn salsa'  > Med Corn Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='hot salsa'  > Hot Salsa<br>
            <input type='checkbox'
                   name='toppings[]'
                   value='cheese'  > Shredded Cheese<br>
        </fieldset>
        <br>

        <fieldset id="comment">
            <h5>Special Instructions</h5>
            <textarea name="comment" rows="2" cols="40"> </textarea>
        </fieldset>

        <br>

        <input type="submit" value="Submit">
    </form>



@endsection
