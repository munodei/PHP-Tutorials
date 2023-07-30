<?php

declare(strict_types=1);
error_reporting(1);

# Start of Example Local Variables

// Displaying that local variables are only accessible within their scope

function someFunctionWithALocalVariable(){
    $localVariable = 'Hello! Am a local variable';
    return $localVariable;
}

// Printing varible will result in Null

var_dump($localVariable);
echo "<br />";

// You can access varibale through function

echo someFunctionWithALocalVariable();
echo "<br />";

# End of Example Local Variables


# Start of Example Accessing Global Variables

$globalVariable = "Hello! Am a Global variable";
echo $globalVariable."<br />";
function someFunctionAccessingGlobalVariable(){
    //Modifying global Varibale
    global $globalVariable;
    $globalVariable = "Hi, I use Edited Global Variable";
    return $globalVariable;
}

// Global Variable will print with new text
echo someFunctionAccessingGlobalVariable();
echo "<br />";

// You can altenatively access global varible using supel global variable $GLOBALS
$globalVariable = "Hi, Altenatively Accesing Global Variable with the GLOBALS super variable";
echo $GLOBALS['globalVariable']."<br />";


# End of Example Accessing Global Variables

# Start of Example Local Static Variables


function someFunctionThatGetValueOfStaticVariable(){
    //Declaration and Assignment of Static Variable
    static $staticLocalVariable = null;

    if(is_null($staticLocalVariable)){
        $staticLocalVariable = expensiveFunctionalityThatGiveStaticVariableValue();
    }

    return $staticLocalVariable;
}

function expensiveFunctionalityThatGiveStaticVariableValue(){
    sleep(2);
    echo 'Processing';
    return 10;
}


// Will print with the Static Variable Value
echo $someFunctionThatGetValueOfStaticVariable."<br />";
echo $someFunctionThatGetValueOfStaticVariable."<br />";
echo $someFunctionThatGetValueOfStaticVariable."<br />";

// You will notice that the expensiveFunctionalityThatGiveStaticVariableValue() function will be executed once

# End of Example Local Static Variables