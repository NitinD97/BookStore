$(document).ready(function(){

  $('#sup').click(function(e){

        e.preventDefault();



        $('#myModal5')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });

 $(document).ready(function(){

  $('#osup').click(function(e){

        e.preventDefault();



        $('#myModal4')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal1').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });

 $(document).ready(function(){

  $('#uex').click(function(e){

        e.preventDefault();



        $('#myModal3')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal1').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });

 $(document).ready(function(){

  $('#nsignup').click(function(e){

        e.preventDefault();



        $('#myModal7')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal1').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });

 $(document).ready(function(){

  $('#addOrg').click(function(e){

        e.preventDefault();



        $('#myModal1')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal6').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });





 $(document).ready(function(){

  $('#wlogin').click(function(e){

        e.preventDefault();



        $('#myModal2')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });





  $(document).ready(function(){

  $('#signup').click(function(e){

        e.preventDefault();



        $('#myModal')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#myModal1').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });



    $(document).ready(function(){

    $('#myModal1') .on('shown.bs.modal', function (e) {


refreshCaptcha2();
            });

            });


    $(document).ready(function(){

    $('#myModal6') .on('shown.bs.modal', function (e) {


refreshCaptcha();
            });

            });






var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=signup') != -1) {

    $(document).ready(function(){

    $('#myModal7').modal('show');

    });

}



var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=login') != -1) {

    $(document).ready(function(){

    $('#myModal5').modal('show');

    });

}





var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=already') != -1) {

    $(document).ready(function(){

    $('#myModal3').modal('show');

    });

}









var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=capcha') != -1) {

    $(document).ready(function(){

    $('#myModal4').modal('show');

    });

}



















var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=wrong') != -1) {

    $(document).ready(function(){

    $('#myModal2').modal('show');

    });

}





// Check for username



function uname(){



var uname=document.getElementById("cuname").value;



//alert(uname);





if(uname.length==0)

{

    document.getElementById("res").innerHTML="";

    return;

}

else

{



var xmlhttp=new XMLHttpRequest();



    xmlhttp.onreadystatechange=function()

    {



        if(xmlhttp.readyState== 4 && xmlhttp.status== 200)

            {

            document.getElementById("res").innerHTML=xmlhttp.responseText;

            }

    }

        xmlhttp.open("GET","chk_uname.php?uname=" + uname,true);

        xmlhttp.send();



}

}



// end of check





function confirm2(str2)

{

var npass=document.getElementById("npass2").value;

//alert(str);

//alert(npass);

if(str2.length==0)

    {

    document.getElementById("res2").innerHTML ="";

    return;

    }

else

    {

        if(str2==npass)

        {

        document.getElementById("res2").innerHTML="Password  match";

        document.getElementById("res2").style.color = "Green";

        }

        else

        {

        document.getElementById("res2").style.color = "orange";

        document.getElementById("res2").innerHTML="Password dont match";

        }

    }

}



 //opening model for password recovery



 $(document).ready(function(){

  $('#passr').click(function(e){

        e.preventDefault();



        $('#myModal')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#passRec').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });





  //capcha chk for pass recovery



  var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=pscapcha') != -1) {

    $(document).ready(function(){

    $('#myModal12').modal('show');

    });

}



//invalid email username for pass recovery



  var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=psinvalid') != -1) {

    $(document).ready(function(){

    $('#myModal13').modal('show');

    });

}





//success for pass recovery



  var url = window.location.href;

 //alert(url);

if(url.indexOf('file2=prses') != -1) {

    $(document).ready(function(){

    $('#myModal14').modal('show');

    });

}





//opening pass recovery module from capcha wrong



 $(document).ready(function(){

  $('#psrec').click(function(e){

        e.preventDefault();



        $('#myModal12')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#passRec').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });



//opening pass recovery module from invalid email username



 $(document).ready(function(){

  $('#pstry').click(function(e){

        e.preventDefault();



        $('#myModal13')

            .modal('hide')

            .on('hidden.bs.modal', function (e) {

                $('#passRec').modal('show');



                $(this).off('hidden.bs.modal'); // Remove the 'on' event binding

            });



    });

    });