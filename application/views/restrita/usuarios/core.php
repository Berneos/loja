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

            <?php

            $atributos = array(

              'name' => 'form_core',

            );

            if (isset($usuario)) {

              $usuario_id = $usuario->id;
            } else {

              $usuario_id = '';
            }


            ?>

            <?php echo form_open('restrita/usuarios/core/' . $usuario_id,); ?>

            <form name="form_core">

              <div class="card-body">


                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Insira nome aqui" value="<?php echo (isset($usuario) ? $usuario->first_name : '');    ?>">
                    <?php echo form_error('first_name', '<div class="text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Sobrenome</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Insira sobrenome aqui" value="<?php echo (isset($usuario) ? $usuario->last_name : '');    ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail14">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email aqui" value="<?php echo (isset($usuario) ? $usuario->email : '');    ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Senha">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Usuário</label>
                    <input type="text" name="username" class="form-control" placeholder="Insira seu usuário" value="<?php echo (isset($usuario) ? $usuario->username : '');    ?>">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Confirme sua senha</label>
                    <input type="password" name="confirma" class="form-control" placeholder="Senha">
                  </div>

                </div>

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputState">Perfil de acesso</label>
                    <select id="inputState" class="form-control" name="group">

                      <?php foreach ($grupos as $grupo) : ?>

                        <?php if (isset($usuario)) : ?>

                          <option value="<?php echo $grupo->id; ?>" <?php echo ($grupo->id == $perfil->id ? 'selected' : ''); ?>><?php echo $grupo->name; ?> </option>


                        <?php else : ?>

                          <option value="<?php echo $grupo->id; ?>><?php echo $grupo->name; ?> </option>


                                <?php endif; ?>

                              <?php endforeach; ?>

                  
                            </select>
                          </div>

                          <div class=" form-group col-md-6">
                            <label for="inputState">Ativo?</label>
                            <select id="inputState" class="form-control" name="active">

                              <?php if (isset($usuario)) : ?>

                                <option value="1" <?php echo ($usuario->active == 1 ? 'selected' : ''); ?>>Sim</option>
                                <option value="0" <?php echo ($usuario->active == 0 ? 'selected' : ''); ?>>Não</option>

                              <?php else : ?>

                                <option value="1">Sim</option>
                                <option value="0">Não</option>



                              <?php endif;   ?>

                            </select>
                  </div>

                  <?php if (isset($usuario)) : ?>
                    <input type="hidden" name="usuario_id" value="<?php echo $usuario->id; ?>">
                  <?php endif; ?>

                </div>

              </div>
              <div class="card-footer">
                <button class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<?php echo base_url('restrita/usuarios'); ?>">Voltar</a>
              </div>

              <?php echo form_close(); ?>

          </div>
        </div>
      </div>


    </div>
  </section>

  <?php $this->load->view('restrita/layout/sidebar_settings'); ?>



</div>