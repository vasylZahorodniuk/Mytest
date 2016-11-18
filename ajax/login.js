/* 
 * GPU license
 * Login ajax file (Jquery pulgin, version 2.X)
 */

$(document).ready(function(){ //starting login procedure when document is completly loaded
    
    $("#log").click(function(){  //tigger click event
        
        /*getting data from imputs*/
        var login = $("#loginn").val();
        
         var pass = $("#pass").val();
        
        $.ajax({ //using ajax
            method: "POST",  //choosin post method
            url: "http://28037.s.t4vps.eu/engine/login.php", //sending data ta /engine/login.php
            data: { login: login, pass: pass } // sending vaibles login & pass
          })
            .done(function( msg ) {
               
                if(msg==1){ // if login is success redirect to account.
                location.href="/engine/account.php";
        
                        }else{
                            
                            alert("login is incorrect! Please try again!");
                        }
                })
            .fail(function() { // if there is fail (no file for example) error
                alert( "error" );
              })      
            })
              })


