<body style="background-color: black;">
    
<div class="container" style="padding-top: 20px;">
    <div class="card" style="max-width: 500px; margin: auto">
        <div class="card-header text-center">
            <b>REGISTRAR USUARIO</b>
        </div>
        <div class="card-body ">
            
            <div id="registerAlert"></div>

            <form id="registerForm">
                <div class="form-group">
                    <label>usuario</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>primer nombre</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="middlename" class="form-control">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var base_url = '<?= base_url() ?>';
    $('#registerForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: base_url + 'action/user/register',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(respData)
            {
                var registerAlert = '';
                if (respData.isRegistered == 1)
                {
                    registerAlert = '<div class="alert alert-success">Successfully registered!</div>';
                }
                else
                {
                    registerAlert = '<div class="alert alert-danger">There was an error during registration!</div>';
                }
                $('#registerAlert').html(registerAlert);
            }
        });
    });
</script>