$(document).ready(function(){
    $('#deconnexion').on("click",function(){
        window.location.href = "../controller/logout.php";
    })

    $('#updatemail').on('click',function(){
        champ1 = $('#email').val()
        champ2 = $('#emailverif').val()
        if(champ1 == champ2)
        {
            $.ajax({
                type: "POST",
                url: "../controller/parametre.php",
                data: {
                    mail: champ1,
                },
                success: function(data){
                    if(data == true)
                    {
                        window.location.href = "../views/login.php"
                    }
                }
            })
        }
    })

    $('#updatepassword').on('click',function(){
        champ1 = $('#Motdepasse').val()
        champ2 = $('#Motdepasseverif').val()
        if(champ1 == champ2)
        {
            $.ajax({
                type: "POST",
                url: "../controller/parametre.php",
                data: {
                    password: champ1,
                },
                success: function(data){
                    if(data == true)
                    {
                        window.location.href = "../views/login.php"
                    }
                }
            })
        }
    })

    $('#disable').on('click',function(){
        request = prompt("Voulez vous desactivé votre compte ?\n votre action est irévocable\n Ecrivez 'oui'")
        // console.log(a);
        if(request == "oui")
        {
            $.ajax({
                type: "POST",
                url: "../controller/parametre.php",
                data: {
                    disable: "yes",
                },
                success: function(data){
                    console.log(data)
                    if(data == "disabled")
                    {
                        window.location.href = "../views/login.php"
                    }
                }
            })
        }
    })
    
})
