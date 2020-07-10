<?php
function inputElement($icon,$placeholder,$name,$value){
    $ele = "
        <div class=\"input-group mb-3\">
        <div class=\"input-group-prepend\">
        <span class=\"input-group-text bg-warning\" id=\"basic-addon1\">$icon</span>
    </div>
    <input type=\"text\" name='$name' value='$value' class=\"form-control\" placeholder='$placeholder' aria-label=\"Username\" aria-describedby=\"basic-addon1\">
</div> ";

echo $ele;
}

function btnElement($btnid,$styleclass,$text,$name,$attr){
    $btn = "
        <button name='$name' $attr class='$styleclass' id='$btnid'>
        $text</button>
    ";
    echo $btn;
}