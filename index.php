<?php
    echo ' <!DOCTYPE html>
          <html>
                <head>
                      <title>HTML Calculation</title>
                      <style>
                            body {
                                  background-color: #000000; 
                                  color: #00FF00;
                            }
                            #strong {
                            font-size: 30px;
                            }
                      </style>
                </head>
                <body> 
                      <h1>HTML Calculator</h1>
                       
                      <form oninput="addition.value=parseInt(a.value)+parseInt(b.value)">
                      The addition of number a = <input type="number" name="a" value="0"/> and number b = <input type="number" name="b" value="0"/> is <output id="strong" name="addition"></output>
                      <br /><hr /></form> 
        
                      <form oninput="subtraction.value=parseInt(a.value)-parseInt(b.value)">
                      The subtraction of number a = <input type="number" name="a" value="0"/> and number b = <input type="number" name="b" value="0"/> is <output id="strong" name="subtraction"></output>
                      <br /><hr /></form>
    
                      <form oninput="multiplication.value=parseInt(a.value)*parseInt(b.value)">
                      The multiplication of number a = <input type="number" name="a" value="0"/> and number b = <input type="number" name="b" value="0"/> is <output id="strong" name="multiplication"></output>
                      <br /><hr /></form>
    
                      <form oninput="division.value=parseInt(a.value)/parseInt(b.value)">
                      The division of number a = <input type="number" name="a" value="0"/> and number b = <input type="number" name="b" value="0"/> is <output id="strong" name="division"></output>
                      <br /><hr /></form>    
              </body>
        </html> ';
?>