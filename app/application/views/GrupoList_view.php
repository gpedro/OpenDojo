<h1><?=$cabecalho ?></h1>
<div class="container-fluid">
  <div class="row">		

	<p><?=anchor('grupo/criar', 'Criar Grupo') ?></p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nome do grupo
            </th>
            <th>
                Ações
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if ($grupos != false): ?>
        <?php foreach ($grupos as $grupo): ?>
            <tr>
            <td>
                <?=$grupo->idGrupo ?>
            </td>
            <td>
                <?=$grupo->nome ?>
            </td>
            <td>
                <?=anchor('grupo/editar/' . $grupo->idGrupo, 'Editar') ?> |
                <?=anchor('grupo/deletar/' . $grupo->idGrupo, 'Deletar') ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <p>Não há registros cadastrados!</p>
        <?php endif ?>
    </tbody>
</table>


 </div>
</div>
