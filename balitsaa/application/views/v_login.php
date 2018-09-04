<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/index.css'); ?>">
	<title>Login</title>

  </style>
</head>
<body>
<div style="position: absolute;top: 0;left: 0;width: 100%;background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('https://i.pinimg.com/originals/3a/c0/61/3ac061ea26c85e461741890fe4ea0bef.jpg');background-repeat:no-repeat;background-size:cover;height:100vh">
	<div class="formPermohonan" style="width:400px;background:#fff" >
    <h2 style="margin-bottom:20px;">Login</h2>
    <?php echo $this->session->flashdata('err'); ?>
    <form method="post" action="<?= base_url('index.php/c_permohonan/login'); ?>">
        <div class="inputWrapper">
          <input name="username" type="text" class="validate" placeholder="Username">
        </div>
        <div class="inputWrapper">
          <input name="password" type="password" class="validate" placeholder="Password"><br/>
        </div>
        <div class="inputWrapper">
          <select name="otorisasi">
            <option selected>Sebagai</option>
            <option value="admin">Admin</option>
            <option value="peneliti">Peneliti</option>
          </select>
          <button class="btnSubmit">Login</button>
      </div>
    </form>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url('asset/js/materialize.min.js'); ?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</body>
</html>
