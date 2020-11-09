<h2 id="cursos" class="title">Cursos de Graduação da UENP</h2>
<h3 class="description text-muted">Conheça os cursos de graduação e as vagas disponíveis no <?=$data['processo']?></h3>

<?php while ($c = $campus->fetch_assoc()){ ?>
<h4><?=$c['nome']?></h4>
<div class="table-responsive">
  <table class="table table-striped table-sm">
     <thead>
        <tr>
           <th  class="text-center">Curso</th>
           <th  class="text-center">Habilitação</th>
           <th  class="text-center">Turno</th>
           <th  class="text-center">Vagas</th>
           <th  class="text-center">Disputa Universal</th>
           <th  class="text-center">Cota Social</th>
           <th  class="text-center">Cota Sociorracial</th>
           <th  class="text-center">Integralização</th>
        </tr>
     </thead>
     <tbody>
         <?php while ($curso = $cursos->fetch_assoc()){ ?>
			<tr>
				<td align=center><?=$curso['nome']?></td>
				<td align=center><?=$curso['habilitacao']?></td>
            <td align=center><?=$curso['turno']?></td>
            <td align=center><?=$curso['vagas']?></td>
            <td align=center><?=$curso['vagas_universal']?></td>
            <td align=center><?=$curso['vagas_social']?></td>
            <td align=center><?=$curso['vagas_sociorracial']?></td>
            <td align=center><?=$curso['duracao']?></td>
			</tr>
         <?php } ?>
      </tbody>
</table>
</div>
<?php } ?>

</div>
