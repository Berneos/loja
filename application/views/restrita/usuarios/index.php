<?php $this->load->view('restrita/layout/navbar'); ?>

<?php $this->load->view('restrita/layout/sidebar'); ?>



<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <!-- add content here -->

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4><?php echo $titulo;     ?></h4>
            </div>
            <div class="card-body">

              <?php if ($message = $this->session->flashdata('erro')) : ?>

                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                      <span>&times;</span>
                    </button>
                    <?php echo $message; ?>
                  </div>
                </div>

              <?php endif; ?>

              <div class="table-responsive">
                <table class="table table-striped data-table">
                  <thead>
                    <tr>
                      <th class="text-center">
                        ID
                      </th>
                      <th style="text-align: center;">Nome Completo</th>
                      <th style="text-align: center;">E-mail</th>
                      <th style="text-align: center;">Usuário</th>
                      <th style="text-align: center;">Status</th>
                      <th class="nosort" ; style="text-align: center" ;>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>


                      <?php foreach ($usuarios as $usuario) :  ?>

                        <td> <?php echo $usuario->id; ?> </td>
                        <td> <?php echo $usuario->first_name . ' '  . $usuario->last_name; ?> </td>
                        <td> <?php echo $usuario->email; ?> </td>
                        <td> <?php echo $usuario->username; ?> </td>
                        <td> <?php echo ($usuario->active == 1 ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>'); ?> </td>

                        <td>
                          <a href="<?php echo base_url('restrita/usuarios/core/' . $usuario->id); ?>" class="btn btn-primary">Atualizar</a>
                          <a href="#" class="btn btn-danger">Excluir</a>
                        </td>

                      <?php endforeach;      ?>


                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>

  <?php $this->load->view('restrita/layout/sidebar_settings'); ?>



</div>