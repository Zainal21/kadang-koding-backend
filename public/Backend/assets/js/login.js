$(document).ready(function(){
   $('#btn-login').on('click', function(e){
      e.preventDefault();
      var _name = $("input[name=name]").val();
      var _password = $("input[name=password]").val();
      var token = $("input[name=_token]").val();
      $.ajax({
        url : '/procees_login',
        method: 'POST',
        dataType:'JSON',
        data:{
          name : _name,
          password : _password,
          _token : token
        },
        success:function(ress){
            if(ress.error){
              toastr["error"](ress.error)
            }else{
              Swal({
                title: ress.success,
                text: 'Halaman akan segera dialihkan',
                type: 'success'
              }).then(function(){
                window.location.href = '/site/admin'
              })
            }
        }
      })
   })
})