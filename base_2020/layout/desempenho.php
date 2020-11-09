<h2 class="title"><i class="now-ui-icons business_chart-pie-36"></i> Desempenho Individual</h2>
<div class="row">
  <div class="col-md-6 ml-auto mr-auto">
    <div class="card">
      <form action="ver_desempenho.php" method="post" target="_blank" name="frm">
        <div class="card-header">
          <p class="card-tittle h4">Informe seu CPF e sua senha de acesso.</p>
        </div>
        <div class="card-body">
          <div class="form-group">
            <input type="text" id="cpf" name="cpf" placeholder="CPF" required="true" class="form-control"/>
          </div>
          <div class="form-group">
            <input type="password" id="senha" name="senha" placeholder="Senha" required="true" class="form-control"/>
          </div>
          <a href="<?=$data['portal']?>" target="_blank">Esqueci minha senha</a>
        </div>
        <div class="card-footer text-center">
          <input type="button" id="enviar" value="Entrar" onclick="validate();" class="btn btn-primary h5" />
        </div>
      </form>
    </div>
  </div>
</div>
<div id="divError" class="alert alert-danger" role="alert" style="display: none;"></div>

<script type="text/javascript">
function validate(){
  cpf = document.getElementById("cpf").value;
  senha = document.getElementById("senha").value;
  if (cpf!=null && cpf != "" && senha!=null && senha !=""){
    frm.submit();
  }
  else {
    $('#myModal').modal('show');
  	document.getElementById("divError").innerText = "Informe todos os dados corretamente";
  	document.getElementById("divError").style.display="block";
  }
}
</script>
