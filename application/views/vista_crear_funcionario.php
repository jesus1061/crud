 <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12">
          
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="" method="POST">

              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Nombre completo del funcionario a registrar" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" required class="form-control" id="contact-email" placeholder="Cargo del funcionario" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              

              <div class="form-group">
                <textarea class="form-control" name="message" style="resize: none" id="contact-message" placeholder="Perfil profesional" rows="5" data-rule="required" data-msg="Please write something for us" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Link facebook" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Link instagram" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Link twitter" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Has creado un funcionario con exito!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Crear funcionario</button>
              </div>

            </form>
          </div>

         
        </div>