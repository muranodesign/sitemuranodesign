<div id="FaleConosco"> <div class="ContentMax"> <div class="paginaTitulo">< Fale conosco ></div><div class="row"> <div class="col-xs-12 col-sm-6"> <div class="FormularioContato"> <form name="EmailSend" method="POST"> <div class="labelContato hidden-xs">Nome</div><input type="text" placeholder="Nome" name="NomeSender" id=""> <div class="labelContato hidden-xs">Email</div><input type="text" placeholder="Email" name="EmailSender" id=""> <div class="labelContato hidden-xs">Assunto</div><input type="text" placeholder="Assunto" name="AssuntoSender" id=""> <div class="labelContato hidden-xs">Mensagem</div><textarea name="TextSender"></textarea> <input type="submit" value="ENVIAR" name="TextSender" id=""> </form> <?php if(isset($_POST["NomeSender"])){$to='contato@muranodesign.com.br'; $subject=$_POST["AssuntoSender"]; $message=$_POST["TextSender"]; $headers='From: '. $_POST["EmailSender"] . "\r\n" . 'Reply-To: contato@muranodesign.com.br' . "\r\n" . 'X-Mailer: PHP/' . phpversion(); mail($to, $subject, $message, $headers);}?> </div></div><div class="col-xs-12 col-sm-6 hidden-xs"> <div class="MapaContato"> <iframe width="100%" height="387" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.222513907371!2d-46.658398548997454!3d-23.56045056736959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cc01d31c87%3A0x5194cb5ca42ac644!2sR.+Carlos+Comenale%2C+263+-+Bela+Vista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1445354429704" marginwidth="0" marginheight="0" scrolling="no"></iframe> </div></div></div></div></div>