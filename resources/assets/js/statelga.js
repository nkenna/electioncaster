


	//list zamfara
	//var Zamfara = ['Select item...', 'Anka', 'Bakura', 'Birnin Magaji Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];

$(document).ready(function(){
    var a = ["udo", "uche", "boho"];
    var b = ["obi", "ada", "bisi"];
    var c = ["obinna", "adanne", "bodo"];
// var msg = ("#sel").val();


    $("#btn").click(function(){
        alert('i am clicked');
    })

     $("#resident").change(function(){
        alert("msg");
        if($("#sel").val() == 'c'){
     for  (var i = 0; i < a.length; i++) {
$("#sel2").append('<option value='+a[i]+'>'+a[i]+'</option>');
       }
    }
})
 })

})